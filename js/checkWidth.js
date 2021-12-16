function checkWidth() {
	var width =
		window.innerWidth ||
		document.documentElement.clientWidth ||
		document.body.clientWidth
	let menu = document.getElementById("menu")
	let menuMobile = document.getElementById("menu-mobile")
	if (width <= 768) {
		menu.style.display = "none"
		menuMobile.style.display = "block"
	} else {
		menu.style.display = "block"
		menuMobile.style.display = "none"
	}
}
