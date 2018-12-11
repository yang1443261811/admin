<template>
    <div class="container">
        <div class="row comment">
            <div class="col-md-8 col-md-offset-2"><h5>评论</h5></div>
            <div class="col-md-8 col-md-offset-2">
                <div class="media" v-for="(comment, key) in comments">
                    <div class="media-left">
                        <a :href="'/user/center/'+comment.from_user"><img :src="comment.avatar ? comment.avatar : '/images/default.png'" class="media-object img-circle"></a>
                    </div>
                    <div class="media-body box-body">
                        <div class="heading"><i class="ion-person"></i><a :href="'/user/'+comment.from_user">{{comment.from_user}}</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="ion-clock"></i>{{comment.created_at}}
                            <span class="pull-right operate"><span class="vote-button">
                                    <a href="javascript:;"><i class="ion-happy-outline"></i> <small>1</small></a>
                                    <a href="javascript:;"><i class="ion-sad-outline"></i></a></span>
                                <a href="javascript:;"><i class="ion-ios-undo"></i></a>
                            </span>
                        </div>
                        <div class="comment-body markdown">
                            <p>{{comment.content_raw}}</p>
                        </div>
                    </div>
                </div>
                <form action='/comment/create' method='post' class="form-horizontal comments" style="margin-top: 30px;">
                    <div class="form-group">
                        <label class="col-sm-2 control-label own-avatar">
                            <a :href="'/user/center/'+username"><img :src="avatar" class="img-circle"></a>
                        </label>
                        <div class="col-sm-10">
                            <div data-v-49ec89dc="" class="complete-box" id="content">
                                <textarea data-v-49ec89dc="" id="v-textcomplete-txh7wu83" placeholder="Markdown" rows="7" name="content" class="form-control text" style="line-height: 20px;"></textarea>
                                <div data-v-49ec89dc="" id="autocomplete-txh7wu83" class="autocomplete transition" style="display: none;">
                                    <ul data-v-49ec89dc=""></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success pull-right publish">发布评论</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['title', 'commentable_type', 'commentable_id', 'username', 'avatar'],
        data(){
            return {
                comments: [],
            }
        },
        mounted() {
            var url = 'comment/show/' + this.commentable_id;
            this.$http.post(url, {"type": this.commentable_type})
                .then((response) => {
                    this.comments = response.data.data;
                    console.log(this.comments.length);
                });
        },

        methods: {
            demo: function () {
                alert(this.comments.length);
            }
        }
    }
</script>
