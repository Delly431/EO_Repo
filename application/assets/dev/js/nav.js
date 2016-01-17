function showMobileMenu () {
	var button = $(this),
		mobile_menu = page.find("[data-role=mobile_menu]");
	button.toggleClass("active");
	mobile_menu.toggleClass("active");
}
