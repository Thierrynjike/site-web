document.getElementById('button').addEventListener('click',
function() {
	document.querySelector('.bg-modal').style.display= 'flex';
	document.cookie = "id=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
	document.cookie = "id=";
});

document.querySelector('.close').addEventListener('click',
function(){
	document.querySelector('.bg-modal').style.display= 'none';
})