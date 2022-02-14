<template>
  <div class="container">
    <h1>{{post.title}}</h1>

    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, ipsa! Asperiores velit id possimus blanditiis ad ab impedit nisi pariatur fugit! Quibusdam amet ipsa architecto recusandae possimus consequuntur ducimus facilis perspiciatis vero voluptate harum voluptatem distinctio accusamus, optio sapiente sit quod, temporibus adipisci doloribus tenetur. Quia unde optio nobis! Veniam consectetur provident nesciunt facere, itaque, dicta quo totam blanditiis laudantium dignissimos libero. Laudantium eum quos ipsam eligendi voluptates voluptatem magnam fuga nesciunt, iste voluptate. Iure, quos, nisi vel itaque hic eius, doloribus blanditiis iusto voluptatibus voluptatum nihil incidunt ullam! Cumque modi culpa labore cum deleniti ex reiciendis itaque aliquid deserunt.
    </p>
  </div>
</template>

<script>
export default {

  name: 'PostDetails',
    data(){
      return{

        apiUrl: 'http://127.0.0.1:8000/api/posts/',
        post: null,

      }
  },

  mounted(){

    this.getApi();

  },

  methods:{
    getApi(){
        axios.get(this.apiUrl + this.$route.params.slug)
        .then(res=> {
            this.post = res.data;
            console.log(this.post);
        })
    }
  },

}
</script>

<style>

</style>