<!DOCTYPE HTML>
<html>
	<head>
		<title>Computer Science</title>
		<script src="../js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="icon" href="../back_logo/logow.png">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cuprum:400,400i,700,700i" rel="stylesheet">
        <style>
            .slide {
                width: 600px;
                height: 400px;
                overflow: hidden;
                float: left;
                display: none;
            }
            #slidemachine {
                width: 600px;
                height: 400px;
                overflow: hidden;
                margin: 30px auto;
            }
            
        </style>
        <script>
            
           
            var slideNum = 1;
            var totalSlides = 3;
            var time = 3000; //time for each slide
            
            
            
 
            
            
            
            $(function() {

                show();
                run();
                
               $(".slide").hover(function(){
                stop();
                }, function(){
                run();
    });
                
});
        
            
            function numup() {
                if (slideNum == totalSlides) {slideNum = 1;}
                else {slideNum = slideNum + 1;}

            }
            
             function numdown() {
                if (slideNum == 1) {nextSlide = totalSlides;}
                else {slideNum = slideNum - 1;}
            }
            
            function show() {
                $("#S"+slideNum).fadeIn(500);
            }
            
            function hide() {
                $("#S"+slideNum).fadeOut(500);
            }
            
            function next() {
                stop();
                hide();
                numup();
                show();
                run()
            }
            
            function prev() {
                stop();
                hide();
                numdown();
                show();
                run();
            }
            
            function run() {
                 loop = setInterval(next, 3000);
            }
            
            function stop() {window.clearInterval(loop);}
            
                
            
        </script>
	</head>
	<body>
		<div id="wrapper">
			<header>
				<div id="header_div"></div>
			</header>
            <br>
			<nav>
				<div id="nav_div"></div>
			</nav>
			<main>  
                <button id="lbutton" onclick="prev();">LEFT</button>
                <button id="rbutton" onclick="next();">RIGHT</button>
<div id="slidemachine">
           <img src="imgtest/angel.jpg" id="S1" class="slide">
            <img src="imgtest/ashera.jpg" id="S2" class="slide">
            <img src="imgtest/bolas.png" id="S3" class="slide">
</div>  
<!--            <p id=testing>yo</p>-->
        </main>
			<footer>
				<div id="footer_div"></div>
			</footer>
		</div>
	</body>
</html>

