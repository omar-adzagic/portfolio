<template>
  <header>
    <nav id="main-navbar" class="group">
      <ul class="navigacija">
        <li>
          <a class="navlinks slide" href="#info"></i> info<span></span></a> <!-- <i class="fas fa-info"> -->
        </li>
        <li>
          <a class="navlinks slide" href="#projects"></i> projects<span></span></a> <!-- <i class="fas fa-folder"> -->
        </li>
        <li>
          <a class="navlinks slide" href="#contact"></i> contact<span></span></a> <!-- <i class="fas fa-address-book"> -->
        </li>
        <li>
          <a class="navlinks slide" href="/blogs"></i> blog<span></span></a> <!-- <i class="fas fa-folder"> -->
        </li>
      </ul>
      
      <ul class="lang">
        <li>
          <a href="#"></a>
        </li>
        <li>
          <a href="#"></a>
        </li>
      </ul>
  <!-- 		<form action="" method="">
        <input class="search" type="text" placeholder="Search">
        <button class="submit-button" type="submit"><i class="fas fa-search"></i></button>
      </form> -->
    </nav>
  </header>
</template>

<script>
  export default {
    component: {
      name: 'portfolio-header-index',
    },
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>

<style scoped>
header {
  margin-bottom: 40px;
}

#main-navbar {
  box-sizing: border-box;
	/*position: relative;*/
	width: 90%;
	margin: auto;
	background-color: #f4f4c8;
	/*box-shadow: 2px 4px 4px -4px rgba(0,0,0,0.6);*/
	border-bottom: 1px solid rgba(0,0,0,0.1);
	border-radius: 8px;
	box-shadow: rgba(36, 20, 12, 0.15) 0 2px  2px,
							rgba(36, 20, 12, 0.15) 0 4px  4px,
							rgba(36, 20, 12, 0.15) 0 8px  8px,
							rgba(36, 20, 12, 0.10) 0 16px 16px,
							rgba(36, 20, 12, 0.05) 0 32px 32px;
							/*rgba(36, 20, 12, 0.15) 0 64px 64px;*/
	
	/* Flexbox */
	display: flex;
	flex-flow: row;
	/*justify-content: space-between;*/
}

/* Navigacioni Linkovi */
#main-navbar .navigacija {
	flex-grow: 10;
	/*justify-content: center;*/
}

#main-navbar .navigacija,
#main-navbar .lang {
	margin: 15px 20px;
	
	/* Flexbox */
	flex-basis: 150px;
	display: flex;
}

#main-navbar .navigacija li {
	
	/*display: inline-block;*/
	margin-right: 15px;
	padding: 0;
	border: 1px solid rgba(0,0,0,0.05);
	border-radius: 25px;
	list-style: none;
	text-align: center;
	font-family: 'Proxima Nova Regular', sans-serif;
	font-size: 1.1em;
	/*text-transform: uppercase;*/
	font-variant: small-caps;
	letter-spacing: .1em;
	
	/* Flexbox osobine */
	/*flex-grow: 1;*/
}

#main-navbar .navigacija li:hover {
	border: 1px solid #9ff;
	background-color: #f4f4c8;
	box-shadow: 0 5px 4px -4px rgba(0,0,0,0.6),
				inset 1px 0 2px -1px rgba(0,0,0,0.05);
	background-image: linear-gradient(#f4f4c8, #efefe6 250%);
	transition: all 0.3s ease;
}

#main-navbar .navigacija li a {
	display: block;
	text-decoration: none;
	padding: 15px 50px 15px 50px;
}

#main-navbar .navigacija li a:link {
	color: rgb(112,112,112);
}

#main-navbar .navigacija li a:visited {
	/*color: #1B1B1E;*/
	color: rgb(112,112,112);
}

#main-navbar .navigacija li a:hover {
	/*display: block;*/
	color: #0cc;
	transition: all 0.3s ease;
}

/* Jezici */
#main-navbar .lang {
	flex-grow: 1;
	justify-content: center;
}

.lang li {
	/*display: inline-block;*/
	list-style-type: none;
}

.lang li a {
	display: inline-block;
	text-decoration: none;
	width: 40px;
	height: 20px;
	color: #fff;
	padding: 10px;
	opacity: 0.8;
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
	/*transition: transform 0.2s ease-in-out;*/

}

.lang li:first-of-type a {
	/*background-image: url('../images/engleski.png');*/
}

.lang li:last-of-type a {
	/*background-image: url('../images/crnogorski.png');*/
}

.lang li:hover a {
	animation: flip-scale-2-hor-top 0.35s ease-out forwards;
}

#main-navbar form .search {
	box-sizing: border-box;
	padding: 7px;
	/*margin: 0 8px 2px 5px;*/
	color: rgb(128,128,128);
	font-style: italic;
	border: 2px solid rgb(192,192,192);
	border-radius: 3px;
}

#main-navbar form .search:hover {
	background-color: #edffff;
	box-shadow: 0 5px 4px -4px rgba(0,0,0,0.6);
}

#main-navbar form .search:focus {
	background-color: #dff4f5;
	/*border: 2px solid #B5F1FF;*/
	/*box-sizing: border-box;*/
	box-shadow: 0 5px 4px -4px rgba(0,0,0,0.6);
}

#main-navbar form .submit-button {
	background-color: #A1DFE6;
	display:inline-block;
	box-sizing: border-box;
	padding:0.35em 1.2em;
	border: 0.1em solid rgb(192,192,192);
	/*margin:0 0.3em 0.3em 0;*/
	border-radius:0.4em;
	height: 2.3em;
	text-decoration: none;
	font-family: 'Roboto',sans-serif;
	font-weight:300;
	color:#FFFFFF;
	text-align:center;
	transition: all 0.2s;
}

#main-navbar form .submit-button:hover {
	color: rgb(128,128,128);
	background-color:#FFFFFF;
	box-shadow: 0 5px 4px -4px rgba(0,0,0,0.6);
}

#main-navbar form .submit-button:active {
	color: rgb(64,64,64);
	background-color: rgb(224,224,224);
	border-color: #FFFFFF;
}
</style>