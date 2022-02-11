<template>
  <main>
    <div class="container" v-if="posts">
    
      <h1>I miei post</h1>

      <div class="posts">
        
        <PostItem 
          v-for="post in posts" 
          :key="post.id"
          :post = "post"
          />
      </div>
      
      <button
        @click="getPosts(pages.current - 1)"
        :disabled="pages.current === 1"
      >Prev</button>

      
      <button
        v-for="page in pages.last"
        :key="`BUTTON-${page}`"
        @click="getPosts(page)"
        :disabled="pages.current === page"
      >{{page}}</button>


      <button
        @click="getPosts(pages.current + 1)"
        :disabled="pages.current === pages.last"
      >Next</button>
    </div>

    <div class="container" v-else>
      <h1>Loading...</h1>
    </div>
  </main>
</template>

<script>
import PostItem from './PostItem';
export default {
  name: 'Posts',
  components:{
    PostItem,
  },
  data(){
    return{
      apiUrl: 'http://127.0.0.1:8000/api/posts?page=',
      posts: null,
      pages: {}
    }
  },
  mounted(){
    this.getPosts();
  },
  methods:{
    getPosts(page = 1){
      this.posts=null;
      axios.get(this.apiUrl + page)
      .then(res => {
        this.posts = res.data.posts.data;
        console.log(this.posts);
        this.pages ={
          current : res.data.posts.current_page,
          last: res.data.posts.last_page,
        }
      })
    }
  }
}
</script>

<style lang="scss" scoped>
  main{
    .container{
      .posts{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }
    }
  }
</style>