window.onload = init;

function init(){
	var add = document.getElementById("add");
	var change = document.getElementById("change");
	loadContent();
    }


        var slideNum = 1;
        var totalSlides = 3;
        var time = 5000; //time for each slide
        var paused = false;

           function pausetoggle() {
                if (paused == false) {
                    paused = true;
                    stop();
                }
                else {
                    paused = false;
                    run();
                }    
            }
            function numup() {
                if (slideNum == totalSlides) {slideNum = 1;}
                else {slideNum = slideNum + 1;}
            }
            function numdown() {
                if (slideNum == 1) {nextSlide = totalSlides;}
                else {slideNum = slideNum - 1;}
            }
            function show() {
                $("#S"+slideNum).fadeIn(1000);
                hideothers();
            }
            function hide() {
                $("#S"+slideNum).hide();
            }
            function hideothers() {
                var i = 0;
                var x = totalSlides + 1;
                while (i <= totalSlides) {
                    i++;
                if (i != slideNum){
                       $("#S"+i).hide();
                    }
                }
            }
    
            function next() {
                stop();
                hide();
                numup();
                show();
                run();
            }
            function prev() {
                stop();
                hide();
                numdown();
                show();
                run();
            }
            
            function run() {
                 loop = setInterval(next, time);
            }

            function stop() {window.clearInterval(loop);}

function loadContent(){
	$("#header_div").load("../pages/header.html");
	$("#nav_div").load("../pages/nav.html");
	$("#footer_div").load("../pages/footer.html");
}


