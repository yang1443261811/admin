<template>
    <nav class="d-flex justify-content-center">
        <ul class="pagination" v-if="content">
            <li class="page-item" :class="isOnFirstPage ? 'disabled' : ''">
                <a class="page-link" @click="loadData('prev')"><i class="fa fa-chevron-left"></i></a>
            </li>
            <template v-for="n in content.total_pages">
                <li class="page-item" :class="isActive(n) ? 'active' : ''">
                    <a class="page-link" @click="loadData(n)">{{n}} </a></li>
            </template>
            <li class="page-item" :class="isOnLastPage ? 'disabled' : ''">
                <a class="page-link" @click="loadData('next')"><i class="fa fa-chevron-right"></i></a>
            </li>
        </ul>
    </nav>
</template>
<script>
    export default{
        props: ['pagination'],
        data(){
            return {
                content: null
            }
        },
        computed: {
            isOnFirstPage(){
                return this.content.current_page === 1;
            },
            isOnLastPage(){
                return this.content.current_page === this.content.total_pages;
            }
        },
        mounted(){
            console.log(this.content);
            console.log(123);
        },
        methods: {
            loadData(params){
               if(params === 'next') {
                   this.$emit('loadPage', this.content.current_page + 1);
               } else if (params === 'prev') {
                   this.$emit('loadPage', this.content.current_page - 1);
               } else {
                   this.$emit('loadPage', params)
               }
            },

            isActive(n){
                return n === this.content.current_page;
            },

        },
        watch: {
            pagination(content){
                this.content = content;
            }
        }
    }
</script>

<style lang="scss" scoped>
    .active {
        background-color: #3d4e60;
        border-right: none;
    }

    .pagination {
        li {
            cursor: pointer;
        }
    }

    .page-link {
        position: relative;
        display: block;
        padding: 0.5rem 0.75rem;
        margin-left: -1px;
        line-height: 1;
        color: #007bff;
        background-color: #fff;
        border: 1px solid #dee2e6;
    }
</style>