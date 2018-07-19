<template>
<div>
<app-main-nav></app-main-nav>
  <div class="container">
    <div class="row">

      <div class="col-sm-8 col-sm-offset-2">

        <app-post-excerpt v-for="post in posts"></app-post-excerpt>


        <nav>
          <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
          </ul>
        </nav>

      </div><!-- /.blog-main -->

    </div><!-- /.row -->

  </div><!-- /.container -->

<app-main-footer></app-main-footer>
</div>
</template>

<script>
export default {
  name: 'app',
  data:function () {
    return {
      posts: []
    }
  },
  mounted: function () {
    jQuery.get(wp_rest_api.base_url + 'posts')
      .always((response)=>{
        this.posts = response;
    });
  }
}
</script>

<style>
/*#app {*/
  /*font-family: 'Avenir', Helvetica, Arial, sans-serif;*/
  /*-webkit-font-smoothing: antialiased;*/
  /*-moz-osx-font-smoothing: grayscale;*/
  /*text-align: center;*/
  /*color: #2c3e50;*/
  /*margin-top: 60px;*/
/*}*/

/*h1, h2 {*/
  /*font-weight: normal;*/
/*}*/

/*ul {*/
  /*list-style-type: none;*/
  /*padding: 0;*/
/*}*/

/*li {*/
  /*display: inline-block;*/
  /*margin: 0 10px;*/
/*}*/

/*a {*/
  /*color: #42b983;*/
/*}*/
</style>
