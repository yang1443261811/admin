<template>
    <div class="wrapper">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="box">
                    <div class="box-title box-warning">
                        <span class="badge badge-secondary float-right">Admin</span>
                        <h5 class="no-margins">Notice For Everyone.</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box">
                    <div class="box-title">
                        <span class="badge badge-success float-right">All</span>
                        <h5 class="no-margins">Users</h5>
                    </div>
                    <div class="box-content">
                        <h1 class="no-margins"><i class="fa fa-users"></i>{{statistics.users}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box">
                    <div class="box-title">
                        <span class="badge badge-success float-right">All</span>
                        <h5 class="no-margins">Views</h5>
                    </div>
                    <div class="box-content">
                        <h1 class="no-margins"><i class="fa fa-eye"></i>{{statistics.visitors}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box">
                    <div class="box-title">
                        <span class="badge badge-success float-right">All</span>
                        <h5 class="no-margins">Articles</h5>
                    </div>
                    <div class="box-content">
                        <h1 class="no-margins"><i class="fa fa-newspaper"></i>{{statistics.articles}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="box">
                    <div class="box-title">
                        <span class="badge badge-success float-right">All</span>
                        <h5 class="no-margins">Comments</h5>
                    </div>
                    <div class="box-content">
                        <h1 class="no-margins"><i class="fa fa-comments"></i>{{statistics.comments}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        data(){
            return {
                statistics: {}
            }
        },

        mounted(){
            this.$http.get('statistics').then((response) => {
                this.statistics = response.data;
            });
        }
    }
</script>

<style lang="scss" scoped>
    h1 {
        font-size: 30px;
        font-weight: normal;
    }

    h5 {
        font-size: 14px;
    }

    h1 i {
        font-size: 35px;
        margin-right: 12px;
    }

    .label {
        padding: .3em .6em;
    }

    .no-margins {
        margin: 0 !important;
    }
</style>
