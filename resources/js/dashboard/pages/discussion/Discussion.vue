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
        <div  class="box">
            <div  class="box-title d-flex">
                <h5  class="align-self-center font-weight-normal">Discussions</h5>
                <small  class="ml-auto d-flex flex-row" style="height:31px;">
                    <form @submit.prevent="search" style="display: inherit;">
                        <div  class="input-group input-group-sm mr-2">
                            <input  type="text" v-model="keyword" placeholder="" class="form-control"/>
                            <div  class="input-group-append">
                                <button  type="submit" class="btn btn-outline-secondary"><span class="fa fa-search"></span></button>
                            </div>
                        </div>
                    </form>
                    <router-link :to="{name:'discussion.create'}" class="btn btn-sm btn-success" style="height:31px;">
                        Create
                    </router-link>
                </small>
            </div>
            <div  class="box-content no-padding table-responsive">
                <table  class="table table-striped table-hover">
                    <thead >
                    <tr >
                        <th  class="width-5-percent text-center"> ID </th>
                        <th  class="text-center"> User Name </th>
                        <th > Title </th>
                        <th  class="text-center"> Status </th>
                        <th > Created At </th>
                        <th  class="text-center"> Actions </th>
                    </tr>
                    </thead>
                    <tbody >
                    <tr >
                        <td  class="text-center" colspan="6"> no Content </td>
                    </tr>
                  
                    <tr v-for="(item, key) in items">
                        <td  class="text-center"> {{item.id}} </td>
                        <td  class="text-center">Issac DuBuque</td>
                        <td > {{item.title}} </td>
                        <td  class="component text-center">
                            <state :itemStatus="item.status" :itemID="item.id" :url="'discussion/status'"></state>
                        </td>
                        <td > {{item.created_at}} </td>
                        <td  class="actions text-center">
                            <a class="btn btn-success" :href="'/discussion/show/' + item.id" target="_blank"><i class="fa fa-eye"></i> </a>
                            <router-link :to="{name:'discussion.edit', params:{id: item.id}}" class="btn btn-info"><i class="fa fa-pencil"></i></router-link>
                            <delete :itemID="item.id" :url="'discussion/delete'" v-on:reload="reload"></delete>
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

                this.$http.get('discussions', {params: params})
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
                this.$router.push({name: 'discussion.edit', params: {id: data.id}})
            }
        },
        mounted(){
            this.loadData();
        }
    }
</script>