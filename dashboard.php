<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mirror Mirror</title>
	<style type="text/css">
	body
	{
		font-family:"Lucida Sans";

	}
	*
	{
	margin:0px
	}
	#searchbox
	{
	width:870px;
	border:solid 1px #000;
	padding:3px;
	}
	#display
	{
	width:870px;
	display:none;
	float:left; margin-right:30px;
	border-left:solid 1px #dedede;
	border-right:solid 1px #dedede;
	border-bottom:solid 1px #dedede;
	overflow:hidden;
	}
	.display_box
	{
	padding:4px; border-top:solid 1px #dedede; font-size:12px; height:30px;
	}

	.display_box:hover
	{
	background:#3b5998;
	color:#FFFFFF;
	}
	#shade
	{
	background-color:#00CCFF;

	}
</style>
	

	<script type="text/javascript" src="jquery.js"></script>
	
	<script type="text/javascript" src="jquery.watermarkinput.js"></script>

	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<script type="text/javascript" src="./js/processing-1.4.1.js"></script>

</head>

<body background="./img/sprinkles.png">

<div class="row">
	<div class ="container">
		<div class="span12 offset 2">
	<?php 
		session_start();

		//print "<pre>";print_r($_SESSION);print "</pre>";

		$caloriesMonth = $_SESSION['BMI'] * 31;
		$caloriesWeek = $_SESSION['BMI'] * 7;
		//$caloriesYear = $_SESSION['BMI'] * 365;

		//store data as json file
		$fileName = "user.txt";
		$data = $_SESSION['Name'] . "\n" . $_SESSION['Gender'] . "\n" . $_SESSION['Weight'] . "\n". $_SESSION['calories']."\n".$_SESSION['BMI'];

		file_put_contents($fileName, $data);

	?>

	<div class="navbar">
		<div class="navbar navbar-fixed-top">
              <div class="navbar-inner">
                <ul class="nav">
                  <li class="divider-vertical"><a href="#" id=""><?php print $_SESSION['Name']; ?></a></li>
                  <li class="divider-vertical"><a href="#" id="">Total Calories Per Day: <?php print $_SESSION['BMI']; ?></a></li>
                  <li class="divider-vertical"><a href="#" id="">Total Calories Per Week: <?php print $caloriesWeek; ?></a></li>
                  <li class="divider-vertical"><a href="#" id="">Current Weight: <?php print $_SESSION['Weight']; ?></a></li>
                  <li class="divider-vertical"><a href="#" id="">Total Consummed: <?php print $_SESSION['calories'];  ?></a></li>
                  <li class="divider-vertical"><a href="#" id="">Gender : <?php print $_SESSION['Gender'];  ?> </a></li>
                  <li class="divider-vertical"><a href="./signout.php">Signout </a></li>
                </ul>
              </div>
            </div>
        </div>

	</div>
</div>

</div>
<div class="row">
	<div class ="container">
		<div class="span12">	
		<div style=" width:300px; float:left; margin:100px" align="left">
			
				<input type="text" class="search" id="searchbox">
				<?php

					print "<input type='hidden' id='name' value='".$_SESSION['Name']."' />";
				?>
				<a href="reset.php"><button>2 Finger Powerup</button></a>
				<div id="display">
				</div>
		</div>
		</div>
</div>
</div>


<div class="row">

	<div class ="container">
		<div class="span8 offset2">
		
			<canvas id="mysketch" data-processing-sources="./sketch/sketch.pde"></canvas>
			
		</div>
	</div>

</div>


</div>


	<script type="text/javascript">
	$(document).ready(function(){

	$(".search").keyup(function() 
	{
	var searchbox = $(this).val();
	var dataString = 'searchword='+ searchbox;

	if(searchbox=='')
	{
	}
	else
	{

	$.ajax({
	type: "POST",
	url: "search.php",
	data: dataString,
	cache: false,
	success: function(html)
	{

	$("#display").html(html).show();
		
		
		}




	});
	}return false;    


	});
	});

	jQuery(function($){
	   $("#searchbox").Watermark("Search");
	   });
	</script>
	

</body>

</html>
