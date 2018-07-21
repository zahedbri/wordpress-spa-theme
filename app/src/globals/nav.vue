<template>
  <nav class="navbar navbar-default navbar-inverse">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">{{ site_name }}</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li v-for="item in menu_items"><a :href="item.url">{{ item.title }}</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

</template>

<script>
    export default {
      name: "nav",
      data:function () {
        return {
          menu_items:[],
          site_name: wp_rest_api.site_name,

        }
      },
      mounted: function () {
        jQuery.get(wp_rest_api.spa_url + 'menus/primary').always((response)=>{
          this.menu_items = response;
        });
      }
    }
</script>

<style scoped>

</style>
