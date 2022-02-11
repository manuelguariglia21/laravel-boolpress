<template>

<div>
  <Header />
  
  <Posts />

  <Footer />
</div>

</template>

<script>
import Header from './components/partials/Header';
import Posts from './components/partials/Posts';
import Footer from './components/partials/Footer';
export default {
  name: "App",
  components:{
    Header,
    Posts,
    Footer
  }
}
</script>

<style lang="scss"> 

</style>