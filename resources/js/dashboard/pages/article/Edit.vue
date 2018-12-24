<template>
    <div class="row">
        <div class="box">
            <div class="box-title">
                <small class="float-right"><a href="/admin/articles/" class="btn btn-sm btn-secondary">Back</a></small>
                <h5>Edit Article</h5>
            </div>
            <div class="box-content">
                <div class="row">
                    <form class="col-sm-9 offset-sm-1" @submit.prevent="onSubmit">
                        <div class="col-sm-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <multiselect v-model="selected" :options="options" label="name"
                                                 placeholder="category" track-by="name">
                                    </multiselect>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" id="title" name="title" v-model="article.title"
                                           class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subtitle" class="col-sm-2 col-form-label">SubTitle</label>
                                <div class="col-sm-10">
                                    <input type="text" id="subtitle" name="subtitle" v-model="article.subtitle"
                                           class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Page Image</label>
                                <div class="col-sm-5">
                                    <input type="text" v-model="page_image"
                                           placeholder="ex: /uploads/default_avatar.png" class="form-control"/>
                                </div>
                                <div class="col-sm-5 cover-box">
                                    <img v-if="page_image != null && page_image != ''" :src="page_image" alt="Pig Jian"
                                         width="35" height="35">
                                    <div class="cover-upload pull-right">
                                        <a href="javascript:;" class="btn btn-success file">
                                            <span>Upload New File</span>
                                            <input type="file" @change="coverUpload($event)" name="image"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Content</label>
                                <div class="col-sm-10">
                                    <textarea id="editor"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tag</label>
                                <div class="col-sm-10">
                                    <multiselect v-model="tags" :options="allTag" :multiple="true" :searchable="true"
                                                 :hide-selected="true" :close-on-select="false" :clear-on-select="false"
                                                 :limit="5" placeholder="select tag" label="tag"
                                                 track-by="tag">
                                    </multiselect>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="meta_description" class="col-sm-2 col-form-label">Meta Description</label>
                                <div class="col-sm-10">
                                    <textarea id="meta_description" name="meta_description"
                                              v-model="article.meta_description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Date Time</label>
                                <div class="col-sm-10">
                                    <date-picker :date="startTime" :option="option"></date-picker>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 col-form-label">
                                    Is Draft?
                                </div>
                                <div class="col-sm-2">
                                    <div class="togglebutton" style="margin-top: 6px;">
                                        <label><input type="checkbox" name="is_draft" v-model="article.is_draft"/> <span
                                                class="toggle"></span></label>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-form-label">
                                    Is Original?
                                </div>
                                <div class="col-sm-2">
                                    <div class="togglebutton" style="margin-top: 6px;">
                                        <label><input type="checkbox" name="is_original" v-model="article.is_original"/>
                                            <span class="toggle"></span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-info">Edit </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import FormMixin from './FormMixin';
    import DatePicker from 'vue-datepicker';
    import Multiselect from 'vue-multiselect';
    import {default as SimpleMDE} from 'simplemde/dist/simplemde.min';
    import emojione from 'emojione';
    export default{
        mixins: [FormMixin],
        data(){
            return {
                article: {},
                page_image: '',
            }
        },
        components: {
            DatePicker,
            Multiselect
        },
        watch: {
            article() {
                this.selected = this.article.category.data;
                this.tags = this.article.tags.data;
                this.simplemde.value(this.article.content);
                this.startTime.time = this.article.published_time;
                this.page_image = this.article.page_image;
            }
        },
        created(){
            this.loadArticle();
        },
        mounted() {
            let self = this;

            this.simplemde = new SimpleMDE({
                element: document.getElementById("editor"),
                placeholder: 'Please input article content.',
                autoDownloadFontAwesome: true,
                forceSync: true,
                previewRender(plainText, preview) {
                    preview.className += ' markdown';

                    return self.parse(plainText)
                },
            });

        },
        methods: {
            parse(content) {
                marked.setOptions({
                    highlight: (code) => {
                        return hljs.highlightAuto(code).value
                    },
                    sanitize: true
                });

                return emojione.toImage(marked(content))
            },
            onSubmit(){
                if (!this.tags || !this.selected) {
                    toastr.error('Category and Tag must select one or more.');
                    return;
                }

                let that = this;
                let tagIDs = [];
                for (var i = 0; i < this.tags.length; i++) {
                    tagIDs[i] = this.tags[i].id
                }

                let article_id = this.$route.params.id;
                this.article.content = this.simplemde.value();
                this.article.category_id = this.selected.id;
                this.article.tags = JSON.stringify(tagIDs);
                this.article.published_at = this.startTime.time;
                this.article.page_image = this.page_image;
console.log(this.article.is_original);
//return false;
                this.$http.post('article/update/' + article_id, this.article)
                    .then((response) => {
                        toastr.success('You update the article success!');

                        window.setTimeout(function () {
                            that.$router.push({name: 'articles'});
                        }, 1500)
                    })
                    .catch(({response}) => {
                        let errors = response.data.errors;
                        let keys = Object.keys(errors);
                        toastr.warning(errors[keys[0]]);
                    });
            },
            coverUpload(event){
                let files = event.target.files;
                let formData = new FormData();

                formData.append('image', files[0]);
                this.$http.post('files/upload', formData)
                    .then((response) => {
                        toastr.success('You upload a file success!');

                        this.page_image = '/' + response.data.url;
                    })
            },
            loadArticle(){
                let article_id = this.$route.params.id;
                this.$http.get('article/edit/' + article_id + '?include=category,tags')
                    .then((response) => {
                        this.article = response.data.data;
                    })
            }
        }
    }
</script>
<style lang="scss" scoped>
    .cover-upload {
        display: inline-block;

        .file {
            position: relative;
            margin: 0 auto;
            display: block;
            width: 100px;
            height: 35px;
            line-height: 35px;
            font-size: 12px;

            span {
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
            }
            input {
                position: absolute;
                left: 0;
                right: 0;
                top: 0;
                width: 100px;
                height: 35px;
                opacity: 0;
            }
        }
    }
</style>
<style>
    .CodeMirror, .CodeMirror-scroll {
        min-height: 200px !important;
    }

    .CodeMirror {
        height: 300px !important;
    }
    .markdown {
        overflow: auto !important;
    }
</style>
