<template>
    <div class="row">
        <div class="box">
            <div class="box-title d-flex">
                <h5 class="align-self-center font-weight-normal">Comments</h5>
                <small class="ml-auto d-flex flex-row" style="height:31px;">
                    <form @submit.prevent="search" style="display: inherit;">
                        <div class="input-group input-group-sm mr-2">
                            <input type="text" placeholder="search" class="form-control" v-model="keyword"/>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-secondary">
                                    <span class="fa fa-search"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </small>
            </div>
            <div class="box-content no-padding table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="width-5-percent text-center"> ID </th>
                        <th> User Name </th>
                        <th> Commentable Type </th>
                        <th> Commentable Title </th>
                        <th> Created At </th>
                        <th class="text-center"> Actions </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-if="items.length == 0">
                        <td class="text-center" colspan="6"> no Content </td>
                    </tr>
                    <template v-if="items.length > 0">
                        <tr v-for="(item, key) in items">
                            <td class="text-center"> {{ item.id }} </td>
                            <td> {{ item.from_user }} </td>
                            <td> {{ item.type }} </td>
                            <td> {{ item.commentable }} </td>
                            <td> {{ item.created_at }} </td>
                            <td class="actions text-center">
                                <router-link :to="{ name:'comment.edit', params:{id: item.id} }" class="btn btn-info">
                                    <i class="fa fa-pencil"></i>
                                </router-link>
                                <delete :itemID="item.id" :url="'comment/delete'" v-on:reload="reload"></delete>
                            </td>
                        </tr>
                    </template>

                    </tbody>
                </table>
                <table-pagination :pagination="meta" v-on:loadPage="loadPage"></table-pagination>
            </div>
        </div>
    </div>
</template>
<script>
    import Delete from 'dashboard/components/Delete.vue'
    import TablePagination from 'dashboard/components/TablePagination.vue'
    export default{
        data(){
            return {
                items: {},
                meta: '',
                keyword: '',
                totalPage: '',
                currentPage: '',
            }
        },
        components: {
            Delete,
            TablePagination
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
                let params = this.currentPage
                    ? {page: this.currentPage, keyword: this.keyword}
                    : {keyword: this.keyword};

                this.$router.push({name: this.$route.name, query: params});

                this.$http.get('comments', {params: params})
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
        },
        mounted(){
            this.loadData();
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
    }
</script>