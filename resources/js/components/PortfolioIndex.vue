<template>
  <div>
    <portfolio-header-index></portfolio-header-index>

    <main id="main">
      <section class="main" id="banner">
        <h1><span>W</span><span>e</span><span>l</span><span>c</span><span>o</span><span>m</span><span>e</span></h1>
      </section>
      
      <section id="info" class="group main" :class="{ 'hidden': sectionHidden }">
        <h2>Info</h2>

        <p>Hello and welcome! I'm Omar, a Full-Stack Developer living in Podgorica, Montenegro. This is my personal website and portfolio. Here you will find my projects, and something about myself. Enjoy your stay!</p>
        
        <h3>Tech Skills</h3>
        <h4>Front-End</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus quaerat perferendis id quidem unde laborum iste debitis, voluptas sunt, necessitatibus reiciendis. Repellendus blanditiis, esse aliquam nobis aut, sequi itaque sint?</p>
        <h4>Back-End</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus dicta debitis, quod, temporibus quia vel sequi aspernatur possimus praesentium molestias.</p>
      </section>
      
      <section id="projects" class="group" :class="{ 'hidden': sectionHidden, 'skupi-projekte': !projectsOpened, 'prosiri-projekte': projectsOpened }">
        <h2>Projects</h2>

        <p class="text">Here you can find some of my projects</p>
        <div class="projekti">
          
        </div>
        <p class="link-u-cosku" :class="{'gore': projectsOpened, 'dolje': !projectsOpened }" @click="projectsOpened = !projectsOpened"><i class="fas fa-angle-down"></i></p>
      </section>
      
      <section id="contact" class="clearfix" :class="{ 'hidden': sectionHidden }">
        <h2>Contact</h2>
        <p>Follow / Add me on:</p>
        <ul class="kontakt_linkovi">
          <li>
            <a class="github socialLink" href="https://github.com/omar-adzagic" target="_blank">
              <i class="fab fa-github"></i>
            </a>
          </li>
          <li>
            <a class="codepen socialLink" href="https://codepen.io/omar-adzagic/#" target="_blank">
              <i class="fab fa-codepen"></i>
            </a>
          </li>
          <li>
            <a class="facebook socialLink" href="https://www.facebook.com/omar.adzagic" target="_blank">
              <i class="fab fa-facebook"></i>
            </a>
          </li>
          <li>
            <a class="freecodecamp socialLink" href="https://www.freecodecamp.com/omar.adzagic" target="_blank">
              <i class="fab fa-free-code-camp"></i>
            </a>
          </li>
          <li>
            <a class="codewars socialLink" href="https://www.codewars.com/users/omar.adzagic" target="_blank">
              <img src="images/codewars.svg" alt="" width="30">
            </a>
          </li>
        </ul>
        <!-- <p>Email: omar.adzagic@gmail.com</p> -->
        <hr>
        <div id="message" class="message">
          <h3>Send Message</h3>
          <form action="" method="POST" accept-charset="utf-8">
            <input id="name" name="name" type="text" placeholder="Name">
            <input id="email" name="email" type="email" placeholder="Email">
            <textarea id="message-area" name="body" rows="3" placeholder="Message"></textarea>
            <button id="send-but" type="button">Send</button> <!-- id="send-but" -->
          </form>
        </div>

      </section>
    </main>
  </div>
</template>

<script>
	import PortfolioHeaderIndex from './PortfolioHeaderIndex.vue';
  export default {
		components: {
    	PortfolioHeaderIndex
  	},
		data() {
			return {
				sectionHidden: true,
				projectsOpened: false,
			}
		},
		methods: {

		},
    mounted() {
      console.log('Component mounted.')
    }
  }

// const name  = document.querySelector('#name');
// const email = document.querySelector('#email');
// const message = document.querySelector('#message-area');
// name.addEventListener('focus', addBorderColor);
// name.addEventListener('blur', removeBorderColor);
// email.addEventListener('focus', addBorderColor);
// email.addEventListener('blur', removeBorderColor);
// message.addEventListener('focus', addBorderColor);
// message.addEventListener('blur', removeBorderColor);

// function addBorderColor(e) {
// 	e.target.classList.add('input_notification');
// }

// function removeBorderColor(e) {
// 	e.target.classList.remove('input_notification');
// }


</script>

<style scoped>
#main {
	/*position: relative;*/
	margin: auto;
	list-style: none;
	margin-bottom: 40px;
	/*min-width: 700px;*/
}

#banner,
#info,
#projects,
#contact {
	margin: 0 0 15px 0;
	padding: 10px 25px 10px 25px;
	box-sizing: border-box;
	box-shadow: rgba(36, 20, 12, 0.25) 0 2px  2px,
							rgba(36, 20, 12, 0.20) 0 4px  4px,
							rgba(36, 20, 12, 0.15) 0 8px  8px;
	background-image: linear-gradient(135deg, #f4f4c8, #efefe6);
	color: rgb(88,88,88);
	/*font-family: 'Calluna Sans Regular', sans-serif;*/
	font-family: 'Raleway', sans-serif;
	text-align: justify;
	text-justify: inter-word;
}

.slide:hover,
.slide:focus {
  border-radius: 50px;
  box-shadow: inset 11em 0 0 0 var(--hover);
}
.slide {
  --color: #8fc866;
  /*--hover: #6DD5FA;*/
  --hover: rgba(255,255,255,0.2);
}
.slide {
  color: var(--color);
  /*background-image: linear-gradient(red blue);*/
  transition: 0.25s;
}
.slide:hover, .slide:focus {
  border-color: var(--hover);
  color: #fff;
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
	color: rgb(248,248,248);
	animation: spustanje 1s ease-out;
}

#banner h1 {
	font-family: 'Nexa Rust Script', sans-serif;
	/*font-family: 'Rolka Light', sans-serif;*/
	font-weight: 400;
	font-size: 3.5em;
	display: inline-block;
	letter-spacing: 3px;
	text-shadow: 0  1px  0px #ccc,
							 0  2px  0px #c9c9c9,
							 0  3px  0px #bbb,
							 0  4px  0px #b9b9b9,
							 0  5px  0px #aaa,
							 0  6px  1px rgba(0,0,0,.1),
							 0  0px  5px rgba(0,0,0,.1),
							 0  1px  3px rgba(0,0,0,.3),
							 0  3px  5px rgba(0,0,0,.2),
							 0  5px 10px rgba(0,0,0,.25),
							 0 10px 10px rgba(0,0,0,.2),
							 0 20px 20px rgba(0,0,0,.15);
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

/******************************
 *
 * INFO
 *
 ******************************/

#info {
	/*height: 300px;*/
	position: relative;
	text-decoration: none;
}

/******************************
 *
 * PROJECTS
 *
 ******************************/

#projects {
	position: relative;
	height: 250px;
	display: flex;
	flex-direction: column;
	justify-content: flex-start;
}

#projects h2 {
	justify-content: flex-start;
}

.hidden {
	opacity: 0;
}

.fade-in-element {
  animation: slide-in-elliptic-left-fwd 1.3s;
}

#projects .link-u-cosku {
	display: block;
	position: absolute;
	bottom: 10px;
	margin-bottom: 5px;
	align-self: center;
	opacity: 0.85;
	font-size: 2.5em;
	cursor: pointer;
}

#projects .link-u-cosku:hover {
	text-shadow: -1px -1px  5px rgb(224,224,224);
}

/*.projekti {
	display: grid;
}*/

.prosiri-projekte {
	animation: prosiri_projekte 0.5s ease-in-out forwards;
}

.skupi-projekte {
	animation: skupi_projekte 0.5s ease-in-out reverse;
}

.gore {
	animation: gore 0.5s ease-in-out forwards;
}

.dolje {
	animation: dolje 0.5s ease-in-out forwards;
}

/******************************
 *
 * CONTACT
 *
 ******************************/

#contact {
	/*height: 500px;*/
	border-bottom-left-radius: 20px;
	border-bottom-right-radius: 20px;
	text-decoration: none;
	text-align: center;
}

form input,
form textarea {
	border: 1px solid #bbb;
	font-family: Arial, sans-serif;
}

form textarea {
	height: 100px;
	resize: none;
}

.input_notification {
	border-color: #0cc;
	background-color: #ebffff;
	box-shadow: 0 0px 5px 1px rgba(0, 204, 204, 0.3);
	transition: border-color 0.3s ease-in-out,
							background-color 0.3s ease-in-out,
							box-shadow 0.3s ease-in-out;
}

/*Linkovi za Drustvene Mreze*/

.kontakt_linkovi {
	margin: 25px 0;
}

.kontakt_linkovi li {
	display: inline-block;
	margin-right: 15px;
}

.kontakt_linkovi li a {
	box-sizing: border-box;
	display: inline-block;
	/*padding: 15px 15px 0 15px;*/
	padding: 5px 10px;
	text-decoration: none;
	color: inherit;
	font-family: 'Calluna Sans Bold', sans-serif;
	font-size: 25px;
	font-size: 2em;
	/*transition: transform 0.5s;*/
}

.codewars svg {
	width: 30px;
	height: 25px;
}

.github:hover {
	color: #24292e;
}

.codepen:hover {
	color: #1e1f26;
}

.facebook:hover {
	color: #3E5C9A;
}

.freecodecamp:hover {
	color: #006400;
}

.codewars:hover {
	color: #ca4c33;
}

.kontakt_linkovi li a:hover {
	/*transform: scale(1.5);*/
	animation: bounce 0.4s forwards;
}

#message > h3 {
	position: relative;
	margin: 15px 0 20px;
	text-align: center;
	font-family: 'Open Sans';
	font-weight: normal;
	font-size: 1.67em;
}

#message form {
	box-sizing: border-box;
}

::selection {
	background: #9ff; /* WebKit/Blink Browsers */
}

::-moz-selection {
	background: #9ff; /* Gecko Browsers */
}

/***** CLEARFIX *****/
.group:after {
  content: "";
  display: table;
  clear: both;
}

/******************************
 *
 * MEDIA QUERIES
 *
 ******************************/

@media only screen and (max-width: 640px) {
	#banner h2,
	#info h2,
	#projects h2,
	#contact h2 {
		font-size: 1.4em;
	}

	#banner p,
	#info p,
	#projects p,
	#contact p {
		font-size: 1.2em;
	}
}

@media only screen and (min-width: 641px) {
	#banner p,
	#info p,
	#projects p,
	#contact p {
		font-size: 1.4em;
	}
}

@media only screen and (max-width: 768px) {
	#main-navbar {
		position: relative;
	}

	#main-navbar .navigacija li {
		display: block;
		width: 100%;
		margin: 5px auto;
	}

	#main-navbar .navigacija li a {
		/*position: relative;*/
		text-align: center;
	}

	#main-navbar form {
		display: block;
		/*position: relative;*/
		width: 90%;
		margin: 0 auto;
		/*float: none;*/
		/*margin-top: 0;*/
	}

	#main-navbar form input.search {
		display: block;
		width: 100%;
		margin: auto;
	}

	#main-navbar .submit-button {
		/*display: block;*/
		width: 100%;
		margin: 6px 0;
	}

	#main {
		width: 90%;
		margin: auto;
		padding-top: 25px;
	}

	#banner h1 {
		font-size: 1.3em;
	}

	#message #name,
	#message #email,
	#message #send-but,
	#message #message-area {
		display: block;
		width: 100%;
		margin: auto;
	}
}
</style>