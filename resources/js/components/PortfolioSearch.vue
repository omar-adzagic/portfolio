<!--<link rel="stylesheet" href="../../../../../expandable-search-form-with-css3/dist/style.css">-->
<template>
    <form>
        <input type="search" placeholder="Pretraga">
    </form>
</template>

<script>
import { bus } from '../app.js'
export default {
  component: {
    name: 'portfolio-search',
  },
  data() {
    return {
      searchToggle: false,
    }
  },
  methods: {
    searchBlogs(e) {
      bus.$emit('searched', e.target.value);
    }
  }
}
</script>

<style scoped>
    form {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 5rem;
    }
    input {
        outline: none;
    }
    input[type=search] {
        -webkit-appearance: textfield;
        -webkit-box-sizing: content-box;
        font-family: inherit;
        font-size: 100%;
    }
    input::-webkit-search-decoration,
    input::-webkit-search-cancel-button {
        display: none;
    }

    input[type=search] {
        background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
        border: solid 1px #ccc;
        padding: 9px 10px 9px 32px;
        width: 5rem;
        -webkit-border-radius: 10em;
        -moz-border-radius: 10em;
        border-radius: 10em;

        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        transition: all .5s;
    }
    input[type=search]:focus {
        width: 130px;
        background-color: #fff;
        border-color: #0cc;

        -webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
        -moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
        box-shadow: 0 0 5px rgba(109,207,246,.5);
    }


    input:-moz-placeholder {
        color: #999;
    }
    input::-webkit-input-placeholder {
        color: #999;
    }

    /* Demo 2 */
    #demo-2 input[type=search] {
        width: 15px;
        padding-left: 10px;
        color: transparent;
        cursor: pointer;
    }
    #demo-2 input[type=search]:hover {
        background-color: #fff;
    }
    #demo-2 input[type=search]:focus {
        width: 130px;
        padding-left: 32px;
        color: #000;
        background-color: #fff;
        cursor: auto;
    }
    #demo-2 input:-moz-placeholder {
        color: transparent;
    }
    #demo-2 input::-webkit-input-placeholder {
        color: transparent;
    }
</style>
