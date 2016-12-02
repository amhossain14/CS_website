window.onload = init;
function init(){
	var add = document.getElementById("add");
	var change = document.getElementById("change");
	loadContent();

        $(function() {

    $('.tab-panels .tabs li').on('click', function() {

        var $panel = $(this).closest('.tab-panels');

        $panel.find('.tabs li.active').removeClass('active');
        $(this).addClass('active');

        //figure out which panel to show
        var panelToShow = $(this).attr('rel');

        //hide current panel
        $panel.find('.panel.active').slideUp(300, showNextPanel);

        //show next panel
        function showNextPanel() {
            $(this).removeClass('active');

            $('#'+panelToShow).slideDown(300, function() {
                $(this).addClass('active');
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
