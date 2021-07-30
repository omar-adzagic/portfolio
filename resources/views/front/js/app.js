window.onload = function() {
	$('.navbar-nav a').click(function(){
    $(this).tab('show');
	});
}

// const search_input = document.querySelector('#main-navbar form input');

// search_input.onfocus = function() { this.placeholder = '' };
// search_input.onblur = function() { this.placeholder = 'Search' };

const name  = document.querySelector('#name');
const email = document.querySelector('#email');
const message = document.querySelector('#message-area');
name.addEventListener('focus', addBorderColor);
name.addEventListener('blur', removeBorderColor);
email.addEventListener('focus', addBorderColor);
email.addEventListener('blur', removeBorderColor);
message.addEventListener('focus', addBorderColor);
message.addEventListener('blur', removeBorderColor);

function addBorderColor(e) {
	e.target.classList.add('input_notification');
}

function removeBorderColor(e) {
	e.target.classList.remove('input_notification');
}

const link_u_cosku = document.querySelector('.link-u-cosku');
link_u_cosku.firstElementChild.addEventListener('click', e => {
	const element = e.target;
	const projekti = element.parentElement.parentElement;
	console.log(!(element.classList.contains('gore')));
	if(!(element.classList.contains('gore'))) {
		element.classList.remove('dolje');
		element.classList.add('gore');
		projekti.classList.remove('skupi-projekte');
		projekti.classList.add('prosiri-projekte');
	} else if(element.classList.contains('gore')) {
		element.classList.remove('gore');
		element.classList.add('dolje');
		projekti.classList.remove('prosiri-projekte');
		projekti.classList.add('skupi-projekte');
	}
});
