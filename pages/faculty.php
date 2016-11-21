<!DOCTYPE HTML>
<html>
	<head>
		<title>Computer Science</title>
		<script src="../js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="icon" href="../back_logo/logow.png">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cuprum:400,400i,700,700i" rel="stylesheet">
        
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
                
                <?php    
            $facdir = scandir('../faculty'); //will put into arrary
            $faccount = count($facdir);   //  will count how many are there
                 
                    $toggle = 1;
                
                for($i=2; $i<$faccount; $i++){
                    
                    $parent ="../faculty/";
                    $namefile="/name.txt";
                    $infofile="/info.txt";
                    
                    $nameprint= file_get_contents("$parent$facdir[$i]$namefile")."<br>";
                    $infoprint= file_get_contents("$parent$facdir[$i]$infofile")."<br>";
                    
                    if( $toggle===1){
                        ?>
                
                <div class="sections">
                    <div class="paragraph">	
				<p> <?= $nameprint?> <br> <?=$infoprint?></p>
                    </div>
                
                <div class="image">
                    <img src="<?=$parent.$facdir[$i]?>/circle_tra.png" alt="pic" >
                </div>
			<br></div>
                        
                        <?php
                        print "<br>";
                        $toggle++ ;
                   } else{ ?>
                        
                    <div class="sections">
                     <div class="image">
                    <img src="<?=$parent.$facdir[$i]?>/circle_tra.png" alt="pic" >
                </div>
                    <div class="paragraph">	
				<p> <?= $nameprint?> <br> <?=$infoprint?></p>
                    </div>
			<br></div>
    
                <?php
                        print"<br>";
                        $toggle-- ;
                    }
                }
    ?>
			</main>
			<footer>
				<div id="footer_div"></div>
			</footer>
		</div>
	</body>
</html>