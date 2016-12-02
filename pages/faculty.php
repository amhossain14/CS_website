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
            $facdir = file("../faculty/faculty.txt"); //will put into array
            $faccount = count($facdir);   //  will count how many are there
                 
                    $toggle = 1;
                
                for($i=0; $i<$faccount; $i++){
                    
                    $parent ="../faculty/";
                    $namefile="/name.txt";
                    $infofile="/info.txt";
					$hoursfile="/hours.txt";
					
					$facdirchop = chop($facdir[$i]);
                    
                    $nameprint= file_get_contents("$parent".chop($facdir[$i])."$namefile")."<br>";
                    $infoprint= file_get_contents("$parent".chop($facdir[$i])."$infofile")."<br>";
					$nameprint= str_replace(array("\r", "\n"), "",$nameprint);
                    
                    if( $toggle===1){
                        ?>
						<div class="sections">
							<div class="paragraph">	
								<h3><?= $nameprint?></h3><br><p><?=$infoprint?></p>
								<?php if(file_exists("$parent$facdirchop$hoursfile")){
								$hoursprint= file("$parent$facdirchop$hoursfile"); ?>
								<h4><?php print $nameprint."Office Hours" ?></h4>
								<table>
									<tr>
										<th>Monday</th>
										<th>Tuesday</th>
										<th>Wednesday</th>
										<th>Thursday</th>
										<th>Friday</th>
									</tr>
									<tr rowspan="10">
										<?php for($j = 0; $j < 10; $j+=2){ ?>
												<td>
												<?php 
												for($k = 0; $k < count($hoursprint)-1; $k+=2){
													$day = $hoursprint[$k];
													switch($j){
														case 0: 
														if(chop($day) == "mon"){
															print $hoursprint[$k+1]."<br/>";
														}
														break;
														case 2: 
														if(chop($day) == "tue"){
															print $hoursprint[$k+1]."<br/>";
														}
														break;
														case 4: 
														if(chop($day) == "wed"){
															print $hoursprint[$k+1]."<br/>";
														}
														break;
														case 6: 
														if(chop($day) == "thu"){
															print $hoursprint[$k+1]."<br/>";
														}
														break;
														case 8: 
														if(chop($day) == "fri"){
															print $hoursprint[$k+1]."<br/>";
														}
														break;
													}
												}
												?>
												</td>
										<?php } ?>
									</tr>
								</table>
							<?php }
							else{ ?>
								<h4><?php print $nameprint." has not entered office hours for this semester" ?></h4>
							<?php } ?>
							</div>
							<div class="image">
								<img src="<?=$parent.$facdir[$i]?>/circle_tra.png" alt="pic" >
							</div>
						<br></div>

            

                        <?php

                        $toggle++ ;
                   } 
				   else{ ?>
					<div class="sections">
						<div class="image">
							<img src="<?=$parent.$facdir[$i]?>/circle_tra.png" alt="pic" >
						</div>
						<div class="paragraph">	
							<h3><?= $nameprint?></h3><br><p><?=$infoprint?></p>
						<?php if(file_exists("$parent$facdirchop$hoursfile")){
							$hoursprint= file("$parent$facdirchop$hoursfile"); ?>
							<h4><?php print $nameprint." Office Hours" ?></h4>
							<table>
								<tr>
									<th>Monday</th>
									<th>Tuesday</th>
									<th>Wednesday</th>
									<th>Thursday</th>
									<th>Friday</th>
								</tr>
								<tr rowspan="10">
									<?php for($j = 0; $j < 10; $j+=2){ ?>
											<td>
											<?php 
											for($k = 0; $k < count($hoursprint)-1; $k+=2){
												$day = $hoursprint[$k];
												switch($j){
													case 0: 
													if(chop($day) == "mon"){
														print $hoursprint[$k+1]."<br/>";
													}
													break;
													case 2: 
													if(chop($day) == "tue"){
														print $hoursprint[$k+1]."<br/>";
													}
													break;
													case 4: 
													if(chop($day) == "wed"){
														print $hoursprint[$k+1]."<br/>";
													}
													break;
													case 6: 
													if(chop($day) == "thu"){
														print $hoursprint[$k+1]."<br/>";
													}
													break;
													case 8: 
													if(chop($day) == "fri"){
														print $hoursprint[$k+1]."<br/>";
													}
													break;
												}
											} ?>
											</td>
									<?php } ?>
								</tr>
							</table>
						</div>
						<?php } else{ ?>
								<h4><?php print $nameprint." has not entered office hours for this semester" ?></h4>
							<?php } ?>
					<br></div>
                <?php 
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