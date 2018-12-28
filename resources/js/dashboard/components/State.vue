<template>
       <span :class="state === 1 ? 'red' : 'gray'" @click="setState()">
           <i class="fa fa-circle"></i>
       </span>
</template>
<script>
    export default{
        props: ['itemID', 'itemStatus', 'url'],
        data(){
            return {
                ID: '',
                state: '',
            }
        },
        mounted(){
            this.ID = parseInt(this.itemID);
            this.state = parseInt(this.itemStatus);
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
                        that.state = (that.state === 1) ? 0 : 1;
                        let apiUrl = that.url + '/' + that.ID + '?status=' +  that.state;
                        that.$http.get(apiUrl)
                            .then(function (response) {
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