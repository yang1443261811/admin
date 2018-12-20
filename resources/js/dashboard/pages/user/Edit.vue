<template>
    <div class="row">
        <div class="box">
            <div class="box-title">
                <small class="float-right"><a @click.prevent="back" class="btn btn-sm btn-secondary" style="color:white">Back</a></small>
                <h5>Edit User</h5>
            </div>
            <div class="box-content">
                <div class="row">
                    <form role="form" class="form col-md-4 offset-md-4" @submit.prevent="onSubmit">
                        <div class="form-group text-center">
                            <img :src="user.avatar ? user.avatar : '/images/default.png'" id="avatar" width="100" class="rounded-circle"/>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" id="name" v-model="user.name" placeholder="Username" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" id="email" v-model="user.email" placeholder="Email" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Nick Name</label>
                            <input type="text" id="nickname" v-model="user.nickname" placeholder="Nick Name" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Website</label>
                            <input type="text" id="website" v-model="user.website" placeholder="Website" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" id="description" v-model="user.description" placeholder="Description" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        data(){
            return {
                user: {}
            }
        },
        created() {
            this.loadUser()
        },
        methods: {
            loadUser() {
                this.$http.get('user/' + this.$route.params.id + '/edit')
                    .then((response) => {
                        this.user = response.data
                    })
            },
            onSubmit(){
                let that = this;
                let url = 'user/update/' + this.user.id;
                this.$http.post(url, this.user)
                    .then((response) => {
                        toastr.success('You update the user success!');

                        window.setTimeout(function () {
                            that.$router.push({name: 'users'});
                        }, 1500)
                })
            },
            back(){
                this.$router.back();
            }
        }
    }
</script>