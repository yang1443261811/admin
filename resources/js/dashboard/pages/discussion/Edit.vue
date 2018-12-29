<style>
    .CodeMirror, .CodeMirror-scroll {
        min-height: 200px !important;
    }

    .CodeMirror {
        height: 300px !important;
    }
</style>

<template>
    <div class="row">
        <div class="box">
            <div class="box-title">
                <small class="float-right"><a @click.prevent="back" class="btn btn-sm btn-secondary">Back</a>
                </small>
                <h5>Create Discussion</h5>
            </div>
            <div class="box-content">
                <div class="row">
                    <form class="col-sm-9 offset-sm-1" @submit.prevent="onSubmit">
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" id="title" name="title" v-model="discussion.title"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tag</label>
                            <div class="col-sm-10">
                                <multiselect v-model="tags" :options="allTag" :multiple="true" :searchable="true"
                                             :hide-selected="true" :close-on-select="false" :clear-on-select="false"
                                             :limit="5" placeholder="select tag" label="tag" track-by="tag">
                                </multiselect>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Content</label>
                            <div class="col-sm-10">
                                <textarea id="editor" name="content"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 col-form-label">
                                Status
                            </div>
                            <div class="col-sm-2">
                                <div class="togglebutton" style="margin-top: 6px">
                                    <label>
                                        <input type="checkbox" name="status" value="1" v-model="discussion.status">
                                        <span class="toggle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-info">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        data(){
            return {
                tags: [],
                allTag: null,
                discussion: {}
            }
        },
        methods: {
            loadDiscussion(){
                let discussion_id = this.$route.params.id;
                this.$http.get('discussion/edit/' + discussion_id)
                    .then((response) => {
                        this.discussion = response.data.data;
                    })
            },
            loadTags() {
                this.$http.get('tags')
                    .then((response) => {
                        this.allTag = response.data.data
                    })
            },
            back(){
                this.$router.back();
            }
        },
        watch: {
            discussion(){
                this.tags = this.discussion.tags.data;
                this.simplemde.value(this.discussion.content);
            }
        },
        created(){
            this.loadDiscussion();
            this.loadTags();
        },
        mounted(){
            this.simplemde = new SimpleMDE({
                element: document.getElementById("editor"),
                placeholder: 'Please input article content.',
                autoDownloadFontAwesome: true,
            });
        }
    }
</script>