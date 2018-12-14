<style>
    .btn-success {
        position: relative;
        cursor: pointer
    }

    span {
        cursor: pointer
    }
</style>

<template>
    <div class="cover-avatar text-center">
        <img :src="src" class="avatar">
        <a href="javascript:;" class="btn btn-success file">
            <span>修改头像</span>
            <input type="file" data-url="/files/upload" :accept="imgType" @change="upload($event)">
        </a>
    </div>
</template>
<script>
    export default {
        props: ['src'],
        data(){
            return {
                imgType: "image/png,image/gif,image/jpeg,image/jpg,image/tiff"
            }
        },

        methods: {
            upload(e) {
                let image = e.target.files[0];
                let formData = new FormData();
                formData.append('image', image);

                this.$http.post('/files/upload', formData)
                    .then((response) => {
                        console.log(response);
                    })
            }
        }
    }
</script>