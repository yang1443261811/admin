<template>
    <nav class="navbar navbar bg-white">
        <div class="navbar-brand">
            <a class="navbar-toggler text-left" @click.prevent="toggle()"><i class="fa fa-bars text-secondary"></i></a>
        </div>
    </nav>
</template>
<script>
    export default {
        methods: {
            toggle(){
                this.$store.dispatch('toggle');
            }
        }
    }
</script>