function sidebarBtn() {
	var a = document.querySelector(".offcanvas");
	var b = document.getElementsByClassName('main-wrapper');

	if (a) a.classList.toggle("sidebar-off");
	for (var j = 0; j < b.length; j++) {
		b[j].classList.toggle('expand-container');
	  }
}
