
var page = $(document),
    browser_window = $(window);

// Append Any Event Listeners On The Site Here
page.on("click", "[data-role=mobile_menu_opener]", showMobileMenu);

function debounce (func, wait, immediate) {
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