<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Mirror Mirror</title>
<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="./css/style.css">

</head>

<body background="./img/bg.jpg">

<div class="row">
	<div class="container">

		<div class="span12 offset2" style="padding-top:25px;">
			<form class="form-horizontal mirror" style="padding-top:100px;" action="init.php" method="post">
				  <div class="control-group">
				  	<img src="./img/welcome.png" style="padding-left:180px;">
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="name">Name</label>
				    <div class="controls">
				      <input type="text" id="name" name= "name" placeholder="Name">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="weight">Weight</label>
				    <div class="controls">
				      <input type="text" id="weight" name="weight" placeholder="Weight in Pounds">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="height">Height</label>
				    <div class="controls">
				      <input type="text" name="height" id="height" placeholder="Height in Inches">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="age">Age</label>
				    <div class="controls">
				      <input type="text" id="age" name="age" placeholder="Age in years">
				    </div>
				  </div>

				  <div class="control-group">
				    <label class="control-label" for="Gender">Gender</label>
				    <div class="controls">
				    	<label class="radio">
						  <input type="radio" name="gender" id="optionsRadios1" value="m" checked>
						  Male
						</label>
						<label class="radio">
						  <input type="radio" name="gender" id="optionsRadios1" value="f" checked>
						  Female
						</label>
				    </div>
				  </div>


				  <div class="control-group">
				    <div class="controls">
				      <button type="submit" class="btn">continue</button>
				    </div>
				  </div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript" src="./js/bootstrap.js"></script>

</body>


</html>
