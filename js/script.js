window.onload = init;
function init(){
	var add = document.getElementById("add");
	var change = document.getElementById("change");
	loadContent();
	$(function() {

    $('.block .tabs li').on('click', function() {

        var $panel = $(this).closest('.block'); //this will allow a panel for each professor.

        $panel.find('.tabs li.shown').removeClass('shown');
        $(this).addClass('shown');

        //figure out which panel to show
        var currentPanel = $(this).attr('rel');

        //hide current panel
        $panel.find('.panel.shown').slideUp(100, showNextPanel);

        //show clicked panel
        function showNextPanel() {
            $(this).removeClass('shown');

            $('#'+currentPanel).slideDown(200, function() {
                $(this).addClass('shown');
            });
        }
    });
});
}
function loadContent(){
	$("#header_div").load("../pages/header.html");
	$("#nav_div").load("../pages/nav.html");
	$("#footer_div").load("../pages/footer.html");
}
