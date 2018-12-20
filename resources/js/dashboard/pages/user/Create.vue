<template>
    <div class="row">
        <div class="box">
            <div class="box-title">
                <small class="float-right"><a @click.prevent="back" class="btn btn-sm btn-secondary"
                                              style="color:white">Back</a></small>
                <h5>Create User</h5>
            </div>
            <div class="box-content">
                <div class="row">
                    <form role="form" class="form col-md-4 offset-md-4" @submit.prevent="onSubmit">
                        <div class="form-group text-center">
                            <img src="/images/default.png" id="avatar" width="100" class="rounded-circle"/>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" id="name" v-model="user.name" placeholder="Username"
                                   class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" id="email" v-model="user.email" placeholder="Email"
                                   class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Nick Name</label>
                            <input type="text" id="nickname" v-model="user.nickname" placeholder="Nick Name"
                                   class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Website</label>
                            <input type="text" id="website" v-model="user.website" placeholder="Website"
                                   class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" id="description" v-model="user.description" placeholder="Description"
                                   class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="password" class="form-control" id="password" placeholder="password" name="password" v-model="user.password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">confirm_password</label>
                            <input type="password" class="form-control" id="password_confirmation" placeholder="confirm_password" name="password_confirmation" v-model="user.password_confirmation">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create</button>
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
                user: {
                    name: '',
                    email: '',
                    website: '',
                    nickname: '',
                    description: '',
                    password: '',
                    password_confirmation: ''
                }
            }
        },

        methods: {

            onSubmit(){
                let that = this;
                this.$http.post('user/create', this.user)
                    .then((response) => {
                        toastr.success('You create the user success!');

                        window.setTimeout(function () {
                            that.$router.push({name: 'users'});
                        }, 1500)
                    })
                    .catch(({response}) => {
                        let errors = response.data.errors;
                        let keys = Object.keys(errors);
                        toastr.warning(errors[keys[0]]);
//                        Object.keys(errors).map(function(key, index){
//                            toastr.warning(errors[key]);
//                        });
//                        console.log(Object.keys(errors));
                    })
            },
            back(){
                this.$router.back();
            }
        }
    }
</script>