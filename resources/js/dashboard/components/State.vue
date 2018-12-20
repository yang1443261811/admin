<template>
       <span :class="userStatus == 1 ? 'red' : 'gray'" @click="setState()">
           <i class="fa fa-circle"></i>
       </span>
</template>
<script>
    export default{
        props: ['uid', 'status'],
        data(){
            return {
                userID: '',
                userStatus: '',
            }
        },
        mounted(){
            this.userID = this.uid;
            this.userStatus = this.status;
        },
        methods: {
            setState(){
                let that = this;
                swal({
                    title: "Are you sure？",
                    text: "The action may affect some data, Please think twice！",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "YES！",
                    cancelButtonText: "NO！",
                }).then(function (isConfirm) {
                    if (isConfirm.value) {
                        that.userStatus = (that.userStatus === 1) ? 0 : 1;
                        let url = 'user/status/' + that.userID + '?status=' + that.userStatus;
                        that.$http.get(url).then(function (response) {
                            swal({title: "成功！", text: "用户状态设置成功.", type: "success", timer: 2000});
                        })
                    }
                })
            }
        }
    }
</script>
<style lang="scss" scoped>
    .component span {
        cursor: pointer;
    }

    .red {
        color: rgb(142, 180, 203)
    }

    .gray {
        color: rgb(191, 83, 41)
    }
</style>