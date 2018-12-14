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
        <modal :show="dialogVisible" @cancel="dialogVisible = false">
            <div slot="title">图片剪裁</div>
            <cropper :image="cropImage" @canceled="dialogVisible = false" @succeed="succeed"></cropper>
        </modal>
    </div>
</template>
<script>
    import modal from 'components/Modal.vue';
    import Cropper from 'components/Cropper.vue';
    export default {
        components: {modal, Cropper},
        props: ['src'],
        data(){
            return {
                imgType: "image/png,image/gif,image/jpeg,image/jpg,image/tiff",
                dialogVisible: false,
                cropImage: ''
            }
        },

        methods: {
            upload(e) {
                let image = e.target.files[0];
                let formData = new FormData();
                formData.append('image', image);

                this.$http.post('/files/upload', formData)
                    .then((response) => {
                        this.cropImage = response.data;
                        this.dialogVisible = true;
                    })
            },
            succeed() {
                this.dialogVisible = true;

                window.location = '/user/profile';
            },
        }
    }
</script>