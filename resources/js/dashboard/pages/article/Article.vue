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
                <h5 class="align-self-center font-weight-normal">Articles</h5>
                <small class="ml-auto d-flex flex-row" style="height:31px;">
                    <form @submit.prevent="search" style="display: inherit;">
                        <div class="input-group input-group-sm mr-2">
                            <input type="text" name="keyword" placeholder="" class="form-control" v-model="keyword"/>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-secondary"><span
                                        class="fa fa-search"></span></button>
                            </div>
                        </div>
                    </form>
                    <a href="/admin/articles/create" class="btn btn-sm btn-success" style="height:31px;">Create</a>
                </small>
            </div>
            <div class="box-content no-padding table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="width-5-percent text-center"> ID </th>
                        <th> Title </th>
                        <th> Sub Title </th>
                        <th class="width-10-percent"> Published At </th>
                        <th class="text-center"> Actions </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-if="items.length == 0">
                        <td class="text-center" colspan="5"> 没有数据 </td>
                    </tr>
                    <tr v-for="(item, key) in items">
                        <td class="text-center"> {{item.id}} </td>
                        <td><a href="" title="查看">{{item.title}}</a>
                        </td>
                        <td> {{item.subtitle}} </td>
                        <td> {{item.created_at}} </td>
                        <td class="actions text-center">
                            <a class="btn btn-success" href="/"><i class="fa fa-eye"></i> </a>
                            <a class="btn btn-info" href=""><i class="fa fa-pencil"></i> </a>
                            <delete :itemID="item.id" :url="'article/delete'" v-on:reload="reload"></delete>
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
    import State from 'dashboard/components/State.vue'
    import Delete from 'dashboard/components/Delete.vue'
    export default{
        components: {
            State,
            Delete,
            TablePagination
        },
        data(){
            return {
                items: {},
                meta: '',
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

                this.$router.push({name: this.$route.name, query: params});

                this.$http.get('articles', {params: params})
                    .then((response) => {
                        this.items = response.data.data;
                        this.meta = response.data.meta.pagination;
                        this.totalPage = response.data.meta.pagination.total_pages;
                        this.currentPage = response.data.meta.pagination.current_page;
                    })
            },
            reload(){
                this.loadData();
            },
            edit(data){
                this.$router.push({name: 'article.edit', params: {id: data.id}})
            }
        },
        mounted(){
            this.loadData();
        }
    }
</script>