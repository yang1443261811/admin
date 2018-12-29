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
                <small class="float-right"><a @click.prevent="back" class="btn btn-sm btn-secondary" style="color:white">Back</a>
                </small>
                <h5>Create Discussion</h5>
            </div>
            <div class="box-content">
                <div class="row">
                    <form class="col-sm-9 offset-sm-1" @submit.prevent="onSubmit">
                        <div class="form-group text-center">
                            <h3>{{comment.commentable}}</h3>
                            <h6 id="type">{{comment.type}}</h6>
                        </div>
                        <div class="form-group row">
                            <label for="editor" class="col-sm-2 col-form-label">Content</label>
                            <div class="col-sm-10">
                                <textarea id="editor" name="content"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-info">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import {default as SimpleMDE} from 'simplemde/dist/simplemde.min';
    export default{
        data(){
            return {
                comment: {},
                simplemde: {},
            }
        },
        methods: {
            onSubmit(){
                if (!this.simplemde.value()) {
                    toastr.error('The content cannot be empty!');
                }
                this.comment.content = this.simplemde.value();

                this.$http.post('comment/update/' + this.comment.id, this.comment)
                    .then((response) => {
                        toastr.success('You updated the comment success!');

                        this.$router.push({name: 'comments'})
                    })
            },
            loadComment(){
                let comment_id = this.$route.params.id;
                this.$http.get('comment/edit/' + comment_id)
                    .then((response) => {
                        this.comment = response.data.data;
                    })
            },
            back(){
                this.$router.back();
            }
        },
        watch: {
            comment(){
                this.simplemde.value(this.comment.content);
            }
        },
        created(){
            this.loadComment();
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