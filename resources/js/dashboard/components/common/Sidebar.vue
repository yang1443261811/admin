<template>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <div class="user">
                <div class="avatar">
                    <img :src="user.avatar" class="img-fluid rounded-circle" alt="">
                </div>
                <div class="nickname">
                    <p>{{user.name}}</p>
                    <p>{{user.email}}</p>
                </div>
                <div class="buttons">
                    <a href="/post"><i class="fa fa-home"></i></a>
                    <a :href="'/user/center/'+user.name"><i class="fa fa-user"></i></a>
                    <a href="/setting"><i class="fa fa-cog"></i></a>
                </div>
            </div>
            <li class="nav-index">
                <router-link :to="{name : 'home'}"><i class="fa fa-dashboard"></i> Dashboard </router-link>
            </li>
            <li class="nav-users">
                <router-link :to="{name:'users'}"> <i class="fa fa-users"></i> Users </router-link>
            </li>
            <li class="nav-articles">
                <router-link :to="{name:'articles'}"> <i class="fa fa-book"></i> Articles </router-link>
            </li>
            <li class="nav-discussions">
                <router-link :to="{name:'discussions'}"> <i class="fa fa-question-circle"></i> Discussion </router-link>
            </li>
            <li class="nav-comments">
                <router-link :to="{name:'comments'}"> <i class="fa fa-comments"></i> Comments </router-link>
            </li>
            <li class="nav-files"><a href="/admin/files" class="">
                <i class="fa fa-folder"></i> Files </a></li>
            <li class="nav-tags"><a href="/admin/tags" class="">
                <i class="fa fa-tags"></i> Tags </a></li>
            <li class="nav-categories"><a href="/admin/categories" class=""><i
                    class="fa fa-list-alt"></i> Categories </a></li>
            <li class="nav-links"><a href="/admin/links" class=""><i
                    class="fa fa-globe"></i> Links </a></li>
            <li class="nav-visitors"><a href="/admin/visitors" class="">
                <i class="fa fa-eye"></i> Visitors </a></li>
            <li class="nav-system"><a href="/admin/system" class="">
                <i class="fa fa-cogs"></i> Systems </a></li>
        </ul>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                user: {}
            }
        },

        mounted(){
            this.user = window.user;
        }
    }
</script>

<style lang="scss" scoped>
    .sidebar-nav {
        position: absolute;
        top: 0;
        width: 250px;
        margin: 0;
        padding: 0;
        list-style: none;

        i {
            font-size: .9rem;
        }
    }

    .sidebar-nav li {
        text-indent: 20px;
        line-height: 40px;

        i {
            font-size: .6rem;
        }
    }

    .navbar {
        margin-bottom: 0;
    }

    .sidebar-nav li .user {
        display: block;
        text-align: center;
        width: 100%;
        background-color: #3d4e60;
        padding-top: 20px;
        padding-bottom: 10px;
        color: #fff;
    }

    .user {
        text-align: center;
        padding-top: 15px;
    }

    .user .avatar {
        width: 80px;
        margin: 10px auto;
    }

    .nickname {
        color: #fff;
    }

    .buttons {
        height: 50px;
    }

    .buttons a {
        display: inline-block;
        font-size: 20px;
        width: 40px;
        height: 40px;
        line-height: 40px;
        margin-right: 5px;
        color: #fff;
        opacity: .5;
    }

    .buttons a:hover {
        opacity: 1;
    }

    .sidebar-nav li a {
        display: block;
        text-decoration: none;
        color: #999999;
    }

    .sidebar-nav li a:hover {
        text-decoration: none;
        color: #fff;
        background: rgba(255, 255, 255, 0.2);
    }

    .sidebar-nav li .active {
        color: #fff !important;
    }

    .sidebar-nav li a i {
        padding-right: 10px;
    }

    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
        text-decoration: none;
    }

    .router-link-active {
        color: #fff !important;
        background-color: #3d4e60;
        border-right: 4px solid #647f9d;
    }

    .router-link-active a {
        color: #fff !important;
    }
</style>
