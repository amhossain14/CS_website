window.onload = init;

function init(){
	var add = document.getElementById("add");
	var change = document.getElementById("change");
	loadContent();
    }


        var slideNum = 1;
        var totalSlides = 3;
        var time = 3000; //time for each slide
        var paused = false;
   


           function pausetoggle() {
                if (!paused) {
                    paused = true;
                    stop();
                    $("#npl").hide();
                    $("#npa").show();
                }
                else {
                    paused = false;
                    run();
                    $("#npa").hide();
                    $("#npl").show();
                }    
            }

            function numup() {
                if (slideNum == totalSlides) {slideNum = 1;}
                else {slideNum = slideNum + 1;}
            }
            function numdown() {
                if (slideNum == 1) {slideNum = totalSlides;}
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
                if (!paused) {run();}
                
            }
            function prev() {
                stop();
                hide();
                numdown();
                show();
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


