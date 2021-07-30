<template>
  <div>
    <main id="main">
      <section class="main" id="banner">
        <h1><span>B</span><span>l</span><span>o</span><span>g</span></h1>
      </section><!-- #banner -->
      <div class="container">
        <aside class="sidebar item">
          <ul>
            <li v-for="">
              <a href="#">{{  }}</a>
            </li>
          </ul>
        </aside>
        <section class="blogs item">
          <article>
            <router-link to="">
              <h3>{{ blog.title }}</h3>
              <p>{{ blog.description }}</p>
            </router-link>
          </article>
        </section>
      </div>
    </main>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      blog: { title: '', description: '', content: ''}
    }
  },
  created: function() {
    let uri = `http://127.0.0.1:8000/get-blog/${ this.$route.params.id }`;
    axios.get(uri).then(response => {
      this.blog = response.data
      console.log(this.blog);
    });
  },
}
</script>