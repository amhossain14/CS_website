<!DOCTYPE HTML>
<html>
	<head>
		<title>Computer Science</title>
		<script src="../js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="icon" href="../back_logo/logow.png">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cuprum:400,400i,700,700i" rel="stylesheet">

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
                $("#S"+slideNum).hide();
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

           <img src="../Slidesimg/slides(1).jpg"  id="S1" class="slide">
            <img src="../Slidesimg/slides(2).png " id="S2" class="slide">
            <img src="../Slidesimg/slides(3).png" id="S3" class="slide">
</div>  
                
             <?php    
                    $parent = "../News_update/"; //is a string
                    $news1file = "news1.txt";
                    $news2file = "news2.txt";
                    $news3file = "news3.txt";    
                    $updatefile = "update.txt";
                    $extrafile ="extra.txt";
                
                    $news1print = file_get_contents("$parent$news1file")."<br>";
                    $news2print = file_get_contents("$parent$news2file")."<br>";
                    $news3print = file_get_contents("$parent$news3file")."<br>";
                    $updateprint = file_get_contents("$parent$updatefile")."<br>";
                    $extraprint = file_get_contents("$parent$extrafile")."<br>";
                    ?>
                
                <div class="maindivofhome">
                
                    <div class="box1middle">
                        <h3>UPDATE</h3>
                         <p> <?= $updateprint?> </p>
                    </div>
                    <div class="gapbetween2">
<!--                        <p></p>-->
                    </div>
                    <div class="box2middle">
                        <h3>EXTRA</h3>
                    <p> <?= $extraprint ?> </p>
                    </div>
                </div>    <!--  Main div ends with first part -->
                <br>
                
                <!--div with 3 divs Start -->
                
             <div class="maindivofhome">
                
                    <div class="boxtype3">
                        <h3>NEWS#1</h3>
                        <p> <?= $news1print?> </p>
                    </div>
                 <div class="gapbetween3"></div>
                    <div class="boxtype3">
                   <h3>NEWS#2</h3>
                        <p> <?= $news2print?> </p>
                    </div>
                  <div class="gapbetween3"></div>
                    <div class="boxtype3">
                        <h3>NEWS#3</h3>
                    <p><?= $news3print?> </p>
                    </div>
                </div>   
                 <!--div with 3 divs ends -->
                
                <br>
            <div class="maindivofhome">
                    <div class="box1middle">
                <a href="http://www.wsucs.club/"><img class ="imagelast2" src="../icon/csclub.png" alt="csclublogo" ></a>
                        <h3>CS CLUB</h3>
                    <p> 175 W Mark St, Winona, <br>
                        Winona State University<br>
                        PO Box 5838<br>
                        Winona MN 55987<br>
                        507.457.5385</p>
                    </div>
           
                    <div class="gapbetween2"></div>
                
                    <div class="box2middle">
                         <img class ="imagelast2" src="../icon/contact.png" alt="contact" >  
                        <h3>Contact Us</h3>
                    <p> Computer Science Department<br>
                        Winona State University<br>
                        PO Box 5838<br>
                        Winona MN 55987<br>
                        507.457.5385</p>
                    </div>
                
            </div>
                <br> <!--  Main div of last part ends  -->
        </main>
			<footer>
				<div id="footer_div"></div>
			</footer>
	
	</body>
</html>

