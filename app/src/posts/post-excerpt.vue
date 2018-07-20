<template>
  <div class="blog-post">
    <a href="#">
      <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=900x450&w=900&h=450" class="img-responsive">
    </a>
    <h2><a>{{ post.title.rendered }}</a></h2>
    <p>{{ moment(post.date) }} by <a href="#">Mark</a></p>

    <div v-html="post.excerpt.rendered"></div>

    <hr>
  </div><!-- /.blog-post -->
</template>

<script>
    export default {
      name: "post-excerpt",
      props:['post'],
      methods:{
        moment: function (date) {
          return moment.utc(date).format('MMMM DD, YYYY');
        }
      }
    }
</script>

<style scoped>

</style>
