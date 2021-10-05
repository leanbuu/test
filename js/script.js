var btn = document.getElementsByClassName("mo-menu");
var menu = document.getElementById("menu");
btn[0].addEventListener("click", (e) => {
	e.preventDefault();
	console.log(menu.style.height);
	if(menu.style.height <= "0px"){
		menu.style.height = "auto";
	}else{
		menu.style.height = "0px";
	}
});

