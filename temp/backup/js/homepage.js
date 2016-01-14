
var page = $(document);

console.log('hello');

page.on("click", "[data-role=mobile_menu_opener]", showMobileMenu);
page.on("scroll", page, debounce(applySticky, 50)); 

// Let's limi our function calls
function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		var later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
}

function applySticky () {
	var page = $(this),
			sticky_nav = page.find("[data-role=sticky]");

	if (page.scrollTop() >= 68) {
		sticky_nav.addClass("sticky");
		page.find("main").addClass("sticky");
	} else {
				sticky_nav.removeClass("sticky");
		page.find("main").removeClass("sticky");
	}
}

function showMobileMenu () {
	var button = $(this),
		mobile_menu = page.find("[data-role=mobile_menu]");
	button.toggleClass("active");
	mobile_menu.toggleClass("active");
}


