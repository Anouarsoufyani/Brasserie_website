function menu(btn) {
	var nav = document.querySelector("nav");
	if (btn.className == "menu") {
		btn.className = "menu opened";
		nav.className = "opened"
	} else {
		btn.className = "menu";
		nav.className = ""
	}
}