$(document).ready(function() {
	var id = $(location).attr('pathname');
	$(document.getElementById(id)).addClass('active');
});