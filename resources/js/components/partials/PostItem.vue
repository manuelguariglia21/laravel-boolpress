<template>
  <article>
    <h3>
      <router-link :to="{name:'detail', params:{slug: post.slug} }">
        {{post.title}}
      </router-link>
    </h3>

    
    <div class="badges">

      <span class="category">
        {{post.category.name}}
      </span> 
      
      /

      <span class="tags" 
      v-for="tag in post.tags"
      :key="tag.id">
        {{tag.name}}
      </span>

    </div>

    <p class="data">
      {{setDate}}
    </p>

    <p>
      {{truncateText}}
    </p>

  </article>
</template>

<script>
export default {

  name: 'PostItem',
  data(){
    return{
      date: null,
    }
  },
  props:{
    'post': Object,
  },
  computed:{
    truncateText(){
      return this.post.description.substr(0, 50) + '...';
    },
    setDate(){
      this.date = new Date(this.post.created_at);
      const monthNames = [
        "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
      ];
      const format_date = ` ${this.date.getDay()} ${monthNames[this.date.getMonth()]} ${this.date.getFullYear()}`;
      return format_date;
    }
  }

}
</script>

<style lang="scss" scoped>
  article{
    width: 44%;
    margin: 2%;
    padding: 15px;
    border-radius: 10px;
    background-color: black;
    border: 2px solid orangered;
    color: white;
    h3{
      margin: 5px 0px;
      a{
        text-decoration: none;
        color: white;
        &:hover{
          color: orangered;
        }
      }
    }

    .badges{
      margin: 5px 0;
      .category{
        margin-right: 5px;
        font-size: 12px;
        background-color: white;
        color: red;
        padding: 3px;
        border-radius: 5px;
      }

    .tags{
        font-size: 12px;
        background-color: transparent;
        border: 2px solid red;
        margin-right: 5px;
        color: white;
        padding: 3px;
        border-radius: 5px;
      }

    }

    .data{
      margin: 10px 0;
    }
  }
</style>