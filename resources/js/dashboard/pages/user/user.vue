<style>
    .actions a {
        display: inline-block;
        border-radius: 50%;
        width: 2.2rem;
        height: 2.2rem;
        line-height: 2rem;
        /*padding: 0;*/
        margin-left: 5px;
        margin-right: 5px;
    }
</style>
<template>
    <div class="row">
        <div class="box">
            <div class="box-title d-flex">
                <h5 class="align-self-center font-weight-normal"> Users</h5>
                <small class="ml-auto d-flex flex-row" style="height:31px;">
                    <form style="display: inherit;">
                        <div class="input-group input-group-sm mr-2">
                            <input type="text" placeholder="" class="form-control" v-model="keyword"/>
                            <div class="input-group-append">
                                <button @click.pervent="search()" class="btn btn-outline-secondary">
                                    <span class="fa fa-search"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <a href="/admin/users/create" class="btn btn-sm btn-success" style="height:31px;">Create</a>
                </small>
            </div>
            <div class="box-content no-padding table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="width-5-percent text-center"> ID</th>
                        <th class="text-center"> Avatar</th>
                        <th> User Name</th>
                        <th> E-Mail Address</th>
                        <th class="text-center"> Status</th>
                        <th> Created At</th>
                        <th class="text-center"> Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-if="content.length == 0">
                        <td class="text-center" colspan="7"> no Content</td>
                    </tr>
                    <tr v-for="(item, key) in content">
                        <td class="text-center"> {{item.id}} </td>
                        <td class="text-center">
                            <img :src="item.avatar ? item.avatar : '/images/default.png'"
                                 class="avatar img-fluid rounded-circle"/>
                        </td>
                        <td> {{item.name}} </td>
                        <td> {{item.email}} </td>
                        <td class="component text-center">
                            <span v-if="item.status == 1" style="color: rgb(142, 180, 203);"><i
                                    class="fa fa-circle"></i></span>
                            <span v-if="item.status == 0" style="color: rgb(191, 83, 41);"><i class="fa fa-circle"></i></span>
                        </td>
                        <td> {{item.created_at}} </td>
                        <td class="actions text-center">
                            <a class="btn btn-info" href="/admin/users/edit/"><i class="fa fa-pencil"></i> </a>
                            <a class="btn btn-danger" href="/admin/users/delete/"><i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table-pagination :pagination="meta" v-on:loadPage="loadPage"></table-pagination>
            </div>
        </div>
    </div>
</template>

<script>
    import TablePagination from 'dashboard/components/TablePagination.vue'
    export default{
        components: {
            TablePagination
        },
        data(){
            return {
                meta: null,
                content: {},
                keyword: '',
                totalPage: '',
                currentPage: '',
            }
        },

        watch: {
            $route() {
                let pageNum = 1;

                if (this.$route.query.page) {
                    pageNum = this.$route.query.page
                }

                this.loadPage(pageNum);
            }
        },

        methods: {
            loadPage(page){
                if (page !== this.currentPage && (page > 0 && page <= this.totalPage)) {
                    this.currentPage = page;
                    this.loadData()
                }
            },

            search(){
                this.loadData();
            },

            loadData(){
                let params = '';

                if (this.currentPage) {
                    params = {page: this.currentPage, keyword: this.keyword};
                } else {
                    params = {keyword: this.keyword};
                }

                this.$router.push({ name: this.$route.name, query: params });

                this.$http.get('users', {params: params})
                    .then((response) => {
                        this.content = response.data.data;
                        this.meta = response.data.meta.pagination;
                        this.totalPage = response.data.meta.pagination.total_pages;
                        this.currentPage = response.data.meta.pagination.current_page;
                })
            }
        },

        mounted(){
            this.loadData();
        }
    }
</script>