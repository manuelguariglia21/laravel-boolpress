<template>
  <section class="sidebar">

    <div class="box">
      <div class="tags">
         <h3>Tags</h3>

         <div class="tags-buttons">
           <span v-for="tag in tags" :key="tag.id">
             {{tag.name}}
           </span>
         </div>
      </div>
    </div>
          
    <div class="box">
      <div class="categories">
          <h3>Categories</h3>

          <div class="cat-buttons">
           <span v-for="category in categories" :key="category.id">
             {{category.name}}
           </span>
         </div>
      </div>
    </div>

  </section>
</template>

<script>
export default {

  name: 'Sidebar',
    data(){
      return{

      }
  },

  props:{

        'tags': Object,
        'categories': Object,
      
      },

}
</script>

<style lang="scss" scoped>
.sidebar{
  .box{
    border: 2px solid black;
    border-radius: 15px;
    padding: 15px;
    margin-bottom: 15px;
  }
}
</style>