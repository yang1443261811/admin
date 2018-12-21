<template>
    <div class="row">
        <div class="box">
            <div class="box-title">
                <small class="float-right"><a href="/admin/articles/" class="btn btn-sm btn-secondary">Back</a></small>
                <h5>Create Article</h5>
            </div>
            <div class="box-content">
                <div class="row">
                    <form class="col-sm-9 offset-sm-1">
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
                                    <input type="text" id="title" name="title" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subtitle" class="col-sm-2 col-form-label">SubTitle</label>
                                <div class="col-sm-10">
                                    <input type="text" id="subtitle" name="subtitle" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="page_image" class="col-sm-2 col-form-label">Page Image</label>
                                <div class="col-sm-5">
                                    <input type="text" id="page_image" name="page_image"
                                           placeholder="ex: /uploads/default_avatar.png" class="form-control"/>
                                </div>
                                <div class="col-sm-5 cover-box">
                                    <div class="cover-upload pull-right">
                                        <a href="javascript:;" class="btn btn-success file">
                                            <span>Upload New File</span>
                                            <input type="file" id="fileupload" data-url="/files/upload" name="image"
                                                   multiple/>
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
                                    <textarea id="meta_description" name="meta_description" class="form-control"></textarea>
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
                                        <label><input type="checkbox" name="is_draft"/> <span
                                                class="toggle"></span></label>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-form-label">
                                    Is Original?
                                </div>
                                <div class="col-sm-2">
                                    <div class="togglebutton" style="margin-top: 6px;">
                                        <label><input type="checkbox" name="is_original"/> <span class="toggle"></span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-info">Create </button>
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
    export default{
        mixins: [FormMixin],
        data(){
            return {

            }
        },
        components:{
            DatePicker,
            Multiselect
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
