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
                <?php    
            $facdir = file("../faculty/faculty.txt"); //will put into array
            $faccount = count($facdir);   //  will count how many are there
                
                for($i=0; $i<$faccount; $i++){
                    
                    $parent ="../faculty/";
                    $namefile="/name.txt";
                    $infofile="/info.txt";
					$hoursfile="/hours.txt";
					
					$facdirchop = chop($facdir[$i]);
                    
                    $nameprint= file_get_contents("$parent$facdirchop$namefile");
                    $infoprint= file_get_contents("$parent$facdirchop$infofile");
					if(file_exists("$parent$facdirchop$hoursfile")){
						$hoursprint= file("$parent$facdirchop$hoursfile"); ?>
						<h3><?php print $nameprint ?></h3>
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
						else{
							
						}
                } ?>
			</main>
		</div>
	</body>
</html>