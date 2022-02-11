<template>
  <header>
    <nav>
      <ul>
        <li><router-link :to="{name: 'home'}">Home</router-link></li>
        <li><router-link :to="{name: 'about'}">Chi siamo</router-link></li>
        <li><router-link :to="{name: 'posts'}">Blog</router-link></li>
        <li><router-link :to="{name: 'contacts'}">Contatti</router-link></li>
      </ul>
    </nav>
  </header>
</template>

<script>
export default {

  name: 'Header',

}
</script>

<style lang="scss" scoped>

header{
  background-color: black;
  text-align: center;
  padding: 20px 0;
  ul{
    list-style: none;
    li{
      display: inline-block;
      a{
        text-decoration: none;
        margin: 0 15px;
        color: white;
        &:hover{
          text-decoration: underline;
        }
        &.active{
            color: orangered;
          }
      }
    }
  }
}

</style>