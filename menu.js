function menu(btn) {
	var nav = document.querySelector("nav");
	if (btn.className == "menu closed") {
		btn.className = "menu opened";
		nav.style.visibility = "visible";
		nav.style.opacity = 1
	} else {
		btn.className = "menu closed";
		nav.style.visibility = "hidden";
		nav.style.opacity = 0
	}
}