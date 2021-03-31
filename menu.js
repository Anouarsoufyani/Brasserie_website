function menu(btn) {
	var nav = document.querySelector("nav");
	if (!btn.classList.contains("opened")) {
		btn.classList.add("opened");
		nav.classList.add("opened");
	} else {
		btn.classList.remove("opened");
		nav.classList.remove("opened")
	}
}