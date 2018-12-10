<template>
    <div class="container">
        <div class="row comment">
            <div v-if="comments.length == 0">hello world</div>
            <div class="media" v-for="(comment, key) in comments" v-else>
                <div class="media-left">
                    <a :href="'/user/center/'+comment.from_user">
                        <img :src="comment.avatar" class="media-object img-circle">
                    </a>
                </div>
                <div class="media-body box-body">
                    <div class="heading">
                        <i class="ion-person"></i>
                        <a :href="'/user/center/'+comment.from_user">{{ comment.from_user }}</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="ion-clock"></i>{{ comment.created_at }}
                        <span class="pull-right operate"><span class="vote-button">
                    <a class="up" value="45"><i class="ion-happy-outline"></i> <small></small></a>
                    <a class="down" value="45"><i class="ion-sad-outline"></i></a></span>
                    <a class="reply" value="">回復</a></span>
                    </div>
                    <div class="editor"><input type="text" class="reply-text" placeholder=""><span class="btn">发表</span>
                    </div>
                    <div class="comment-body markdown"><h2>{{ comment.content_raw }}</h2>
                        <ul></ul>
                    </div>
                </div>
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
                    console.log(this.comments);
                });
        }
    }
</script>
