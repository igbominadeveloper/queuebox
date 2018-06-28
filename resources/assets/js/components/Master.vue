<template>
    <div>
       <app-header></app-header>
       <app-nav></app-nav>
       <app-footer></app-footer>
    </div>
</template>

<script>
    import Header from './Layout/Header';
    import Nav from './Layout/Nav';
    import Footer from './Layout/Footer';

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components:{
            'app-header': Header,
            'app-nav': Nav,
            'app-footer': Footer
        }
    }
</script>
