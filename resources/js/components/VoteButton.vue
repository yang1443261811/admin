<template>
     <span class="pull-right operate">
         <span class="vote-button">
             <a href="javascript:;" @click="upVote()">
                 <i :class="item.is_up_voted ? 'ion-happy text-success' : 'ion-happy-outline'"></i> <small>{{item.vote_count > 0 ? item.vote_count : ''}}</small>
             </a>
             <a href="javascript:;" @click="downVote()">
                 <i :class="item.is_down_voted ? 'ion-sad text-danger' : 'ion-sad-outline'"></i>
             </a>
         </span>
         <a href="javascript:;"><i class="ion-ios-undo"></i></a>
     </span>
</template>

<script>
    export default{
        props: ['username', 'item'],
        data() {
            return {
                isUpVoted: false,
                isDownVoted: false,
            }
        },

        methods: {
            upVote(){
                this.$http.post('/comment/vote/up', {id: this.item.id})
                    .then((response) => {
                        this.item.is_up_voted = !this.item.is_up_voted;
                        if (this.item.is_up_voted) {
                            this.item.vote_count++;
                            this.item.is_down_voted = false;
                        } else {
                            this.item.vote_count--;
                        }
                    })
            },

            downVote(){
                this.$http.post('/comment/vote/down', {id: this.item.id})
                    .then((response) => {
                        this.item.is_down_voted = !this.item.is_down_voted;
                        if (this.item.is_down_voted) {
                            this.item.is_up_voted = false;
                            this.item.vote_count > 0 && this.item.vote_count--;
                        }
                    })
            }
        }
    }
</script>