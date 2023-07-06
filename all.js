function scrolll () {
		var left = document.querySelector(".scroll-images");
		left.scrollBy(200,0)
	}
	function scrollr () {
		var right = document.querySelector(".scroll-images");
		right.scrollBy(-200,0)
	}
	function welcom(){
		alert('Welcome to Ancient Contractors');
	}
	function showMenu(){
		var menu = document.querySelector(".burger");
		menu.style.display = "block";
	}
	function hideMenu(){
		var menu = document.querySelector(".burger");
		menu.style.display = "none";

	}