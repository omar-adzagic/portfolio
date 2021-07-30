<template>
    <div>
        <portfolio-header-blogs></portfolio-header-blogs>

        <main id="main">
            <section class="main" id="banner">
                <h1><span>B</span><span>l</span><span>o</span><span>g</span></h1>
            </section><!-- #banner -->
            <div class="container">
                <aside class="sidebar item">
                    <ul>
                        <li>
                            <a href="#" :class="{ 'active': activeCategoryId === 0 }" @click.prevent="getBlogs">All
                                Blogs</a>
                        </li>
                        <li v-for="blogCategory in blogCategories">
                            <a href="#" :class="{ 'active': blogCategory.id === activeCategoryId }"
                               @click.prevent="getCategoryBlogs($event, blogCategory.id)">{{ blogCategory.name }}</a>
                        </li>
                    </ul>
                </aside>
                <section class="blogs item">
                    <article v-for="blog in blogs">
                        <router-link v-bind:to="{ name: 'PortfolioSingleBlog', params: { id: blog.id } }">
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
    import {bus} from '../app.js';
    import PortfolioHeaderBlogs from './PortfolioHeaderBlogs.vue';

    export default {
        // el: '#app',
        components: {
            PortfolioHeaderBlogs
        },
        data() {
            return {
                activeCategoryId: 0,
                blogs: null,
                blogCategories: null,
            }
        },
        methods: {
            getBlogs(e = null) {
                this.activeCategoryId = 0;
                axios.get('/get-blogs').then(response => (this.blogs = response.data));
            },
            getCategoryBlogs(e, categoryId) {
                this.activeCategoryId = categoryId;
                axios.post('/get-category-blogs', {category_id: categoryId}).then(response => (this.blogs = response.data));
            },
        },
        created() {
            bus.$on('searched', (data) => {
                axios.post('/get-search-blogs', {
                    searchKeyword: data,
                    searchCategoryId: this.activeCategoryId
                }).then(response => (this.blogs = response.data));
                console.log(this.blogs);
            })
        },
        mounted() {
            axios.get('/get-blogs').then(response => (this.blogs = response.data, console.log(this.blogs)));
            axios.get('/get-blog-categories').then(response => (this.blogCategories = response.data));

        }
    }
</script>

<style scoped>
    div {
        box-sizing: border-box;
    }

    .container {
        display: grid;
        grid-template-columns: 20% 80%;
    }

    .sidebar {
        width: 90%;
        padding-top: 20px;
        border-radius: 4px;
        box-shadow: rgba(36, 20, 12, 0.25) 0 2px 2px,
        rgba(36, 20, 12, 0.20) 0 4px 4px,
        rgba(36, 20, 12, 0.15) 0 8px 8px;
        background-image: linear-gradient(135deg, #f4f4c8, #efefe6);
        /*height: 100vh;*/
        /*float: left;*/
    }

    .sidebar li {
        border: 1px solid transparent;
        border-radius: 2px;
        list-style-type: none;
        text-align: center;
    }

    .sidebar li:hover {
        background-color: #f4f4c8;
        border: 1px solid #aaa;
    }

    .sidebar a {
        display: block;
        box-sizing: border-box;
        width: 100%;
        padding: 10px 15px;
        text-decoration: none;
    }

    .active {
        background-color: #4169E1;
        color: #fff;
    }

    #banner,
    #info,
    #projects,
    #contact {
        margin: 0 0 15px 0;
        padding: 10px 25px 10px 25px;
        box-sizing: border-box;
        box-shadow: rgba(36, 20, 12, 0.25) 0 2px 2px,
        rgba(36, 20, 12, 0.20) 0 4px 4px,
        rgba(36, 20, 12, 0.15) 0 8px 8px;
        background-image: linear-gradient(135deg, #f4f4c8, #efefe6);
        color: rgb(88, 88, 88);
        /*font-family: 'Calluna Sans Regular', sans-serif;*/
        font-family: 'Raleway', sans-serif;
        text-align: justify;
        text-justify: inter-word;
    }

    /******************************
     *
     * BANNER
     *
     ******************************/

    #banner {
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        text-align: center;
        color: rgb(248, 248, 248);
        animation: spustanje 1s ease-out;
    }

    #banner h1 {
        font-family: 'Nexa Rust Script', sans-serif;
        /*font-family: 'Rolka Light', sans-serif;*/
        font-weight: 400;
        font-size: 3.5em;
        display: inline-block;
        letter-spacing: 3px;
        text-shadow: 0 1px 0px #ccc,
        0 2px 0px #c9c9c9,
        0 3px 0px #bbb,
        0 4px 0px #b9b9b9,
        0 5px 0px #aaa,
        0 6px 1px rgba(0, 0, 0, .1),
        0 0px 5px rgba(0, 0, 0, .1),
        0 1px 3px rgba(0, 0, 0, .3),
        0 3px 5px rgba(0, 0, 0, .2),
        0 5px 10px rgba(0, 0, 0, .25),
        0 10px 10px rgba(0, 0, 0, .2),
        0 20px 20px rgba(0, 0, 0, .15);
    }

    #banner h1 {
        display: flex;
        justify-content: center;
    }

    #banner span:first-of-type {
        animation: welcome 0.5s 0.05s;
    }

    #banner span:nth-of-type(2) {
        animation: welcome 0.5s 0.15s;
    }

    #banner span:nth-of-type(3) {
        animation: welcome 0.5s 0.2s;
    }

    #banner span:nth-of-type(4) {
        animation: welcome 0.5s 0.25s;
    }

    #banner span:nth-of-type(5) {
        animation: welcome 0.5s 0.3s;
    }

    #banner span:nth-of-type(6) {
        animation: welcome 0.5s 0.35s;
    }

    #banner span:nth-of-type(7) {
        animation: welcome 0.5s 0.4s;
    }

    .blogs {
        box-sizing: border-box;
        display: grid;
        grid-template-rows: 1fr 1fr 1fr;
        grid-template-columns: 49.25% 49.25%;
        grid-column-gap: 1.5%;
        grid-row-gap: 15px;
    }

    .blogs article {
        /*min-height: 250px;/*
        /*height: auto;*/
        border-radius: 4px;
        /*padding: 5% 7%;*/
        text-overflow: hidden;
        text-align: justify;
        background-image: linear-gradient(135deg, #f4f4c8, #efefe6);
        box-shadow: rgba(36, 20, 12, 0.25) 0 2px 2px,
        rgba(36, 20, 12, 0.20) 0 4px 4px,
        rgba(36, 20, 12, 0.15) 0 8px 8px;
        font-family: 'Raleway', sans-serif;
        animation: scale-up-center 0.5s ease-out;
        transition: transform 0.15s ease-in-out,
        box-shadow 0.1s ease-in;
    }

    .blogs article:hover {
        cursor: pointer;
        /*transform: translateY(-3px);*/
        transform: scale(1.02);
    }

    .blogs article:active {
        cursor: pointer;
        box-shadow: rgba(36, 20, 12, 0.25) 0 1px 2px,
        rgba(36, 20, 12, 0.20) 0 2px 4px,
        rgba(36, 20, 12, 0.15) 0 4px 8px;
        transform: translateY(0);
    }

    .blogs article a {
        display: block;
        padding: 5% 7%;
        text-decoration: none;
        color: inherit;
    }

    .blogs article a:visited {

    }

    .article {
        height: 250px;
        padding: 5% 7%;
        margin-bottom: 30px;
        border-radius: 4px;
        text-overflow: hidden;
        text-align: justify;
        background-image: linear-gradient(135deg, #f4f4c8, #efefe6);
        box-shadow: rgba(36, 20, 12, 0.25) 0 2px 2px,
        rgba(36, 20, 12, 0.20) 0 4px 4px,
        rgba(36, 20, 12, 0.15) 0 8px 8px;
        font-family: 'Raleway', sans-serif;
        animation: slide-in-elliptic-left-fwd 1.3s;
        transition: transform 0.2s ease-in,
        box-shadow 0.1s ease-in;
    }

    @media only screen and (max-width: 872px) and (min-width: 769px) {
        #main-navbar form {
            display: block;
            margin-top: 0;
            float: right;
        }
    }

    @media only screen and (min-width: 873px) {
        #main-navbar form {
            margin-top: 19px;
            float: right;
        }
    }

    @media only screen and (min-width: 769px) {
        #main-navbar .navigacija {
            float: left;
        }

        #main-navbar form .submit-button {
            margin-right: 5px;
            margin-bottom: 5px;
        }

        #main {
            width: 90%;
            margin: 30px auto;
            /*padding-top: 50px;*/
            /*float: right;*/
        }

        #banner h1 {
            /*font-size: 1.5em;*/
        }

        #message #name,
        #message #email,
        #message #message-area {
            margin: 5px auto;
            padding: 10px 15px;
            color: #999;
            display: block;
            width: 38.1%;
        }

        #message #name {
            border-top-left-radius: 6px;
            border-top-right-radius: 6px;
        }

        #message #message-area {
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;
        }

        #send-but {
            margin: 10px auto;
            display: block;
            outline: none;
            height: 40px;
            text-align: center;
            width: 150px;
            border-radius: 40px;
            background: #fff;
            border: 1px solid #0cc;
            /*color: #0cc;*/
            letter-spacing: 1px;
            text-shadow: 0;
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        #send-but:hover {
            color: white;
            background: #0cc;
            opacity: 0.8;
        }

        #send-but:active {
            letter-spacing: 3px;
        }
    }
</style>
