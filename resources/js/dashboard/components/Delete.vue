<template>
    <a class="btn btn-danger" @click.pervent="deleteItem()"><i class="fa fa-trash"></i> </a>
</template>

<script>
    export default{
        props: ['url', 'itemID'],
        methods: {
            deleteItem(){
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
                        let apiUrl = that.url + '/' + that.itemID;
                        that.$http.get(apiUrl)
                            .then(function (response) {
                                toastr.success('You delete the user success!');

                                that.$emit('reload');
                            })
                    }
                })
            }
        }
    }
</script>