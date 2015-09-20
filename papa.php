<!DOCTYPE html>
<html lang="en">

<head>
	<title>DWM PHP-TP</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="css/stylepapa.css">
</head> 
<body>

	<div class="container">

		<h1>Dad, I need your car to:</h1>

		<form action="#" method="GET">

			<div class="form_left">

				<fieldset>

					<legend>test your new tires in the Forest</legend>

					<label for="yes">Yes</label>
					<input type="radio" id="yes" name="tires" value="yes" required <?php if($GET['tires'] == "yes") { echo 'checked="checked"'; } ?> />

					<label for="no">No</label>
					<input type="radio" id="no" name="tires" value="no" required <?php if($GET['tires'] == "no") { echo 'checked="checked"'; } ?> />

				</fieldset>

				<fieldset>

					<legend>drop Mommy at the nearest Desert</legend>

					<label for="yes">Yes</label>
					<input type="radio" id="yes" name="mommy" value="yes" required <?php if($GET['mommy'] == "yes") { echo 'checked="checked"'; } ?> />

					<label for="no">No</label>
					<input type="radio" id="no" name="mommy" value="no" required <?php if($GET['mommy'] == "no") { echo 'checked="checked"'; } ?> />

				</fieldset>

				<fieldset>

					<legend>buy some groceries for the Family</legend>

					<label for="yes">Yes</label>
					<input type="radio" id="yes" name="groceries" value="yes" required <?php if($GET['groceries'] == "yes") { echo 'checked="checked"'; } ?> />

					<label for="no">No</label>
					<input type="radio" id="no" name="groceries" value="no" required <?php if($GET['groceries'] == "no") { echo 'checked="checked"'; } ?> />

				</fieldset>

			</div>

			<div class="form_right">

				<fieldset>

					<legend>buy a Bottle of Whisky for you</legend>

					<label for="yes">Yes</label>
					<input type="radio" id="yes" name="whisky" value="yes" required <?php if($GET['whisky'] == "yes") { echo 'checked="checked"'; } ?> />

					<label for="no">No</label>
					<input type="radio" id="no" name="whisky" value="no" required <?php if($GET['whisky'] == "no") { echo 'checked="checked"'; } ?> />

				</fieldset>

				<fieldset>

					<legend>visit my new Girlfriend</legend>

					<label for="yes">Yes</label>
					<input type="radio" id="yes" name="girlfriend" value="yes" required <?php if($GET['girlfriend'] == "yes") { echo 'checked="checked"'; } ?> />

					<label for="no">No</label>
					<input type="radio" id="no" name="girlfriend" value="no" required <?php if($GET['girlfriend'] == "no") { echo 'checked="checked"'; } ?> />

				</fieldset>

				<fieldset>

					<legend>cruise through the City</legend>

					<label for="yes">Yes</label>
					<input type="radio" id="yes" name="city" value="yes" required <?php if($GET['city'] == "yes") { echo 'checked="checked"'; } ?> />

					<label for="no">No</label>
					<input type="radio" id="no" name="city" value="no" required <?php if($GET['city'] == "no") { echo 'checked="checked"'; } ?> />

				</fieldset>

			</div>

			<div class="clear"></div>

			<button type="submit">Are you giving me the keys now?</button>
 

		</form> 

		<?php

		//stocking the possible anwers in $message[".."]
		$message["yes"] = '<div class="answer">OK, here are the keys my lovely son!<img src ="img/bmw.png" alt="bmw of dad" width="400px" /></div>';
		$message["no"] = '<div class="answer">NO! Get the fuck away from me!</div>';
		$message["maybe"] = '<div class="answer">Only if you drive as slow as grandma!</div>';

		//declare the funtion foo
		function foo() {
			echo '<div class="answer">Always clicking yes is easy you Clown, take your time!</div>';
		}


		//check if the request method is GET
		if ($_SERVER['REQUEST_METHOD'] === 'GET') {
			// checking if the different options are set
			if(isset($_GET['tires']) && isset($_GET['mommy']) && isset($_GET['groceries']) && isset($_GET['whisky']) && isset($_GET['girlfriend']) && isset($_GET['city'])){

					//getting the different scenarios and stocking them in a variable
					$tires = $_GET["tires"];
					$mommy = $_GET["mommy"];
					$groceries = $_GET["groceries"];
					$whisky = $_GET["whisky"];
					$girlfriend = $_GET["girlfriend"];
					$city = $_GET["city"];

					//if condition
					if ($tires == "no" && $mommy == "yes" && $groceries == "yes" && $whisky == "yes" && $girlfriend == "no" && $city == "no") {

						//displaying the message
						echo $message["yes"];

				} 	else if ($tires == "no" && $mommy == "yes" && $groceries == "yes" && $whisky == "yes" && $girlfriend == "yes" && $city == "no") {

						echo $message["maybe"];

				}	else if ($tires == "yes" && $mommy == "no" && $groceries == "yes" && $whisky == "yes" && $girlfriend == "yes" && $city == "no") { 

						echo $message["maybe"];

				} 	else if ($tires == "yes" && $mommy == "yes" && $groceries == "yes" && $whisky == "yes" && $girlfriend == "yes" && $city == "yes"){

						//call the function foo
						echo foo();

				} 	else {

						echo $message["no"];

				}

			}
				
    	}
			
	?>

		<div class="viewsrc">
			<a href="https://github.com/kopfnicker92/php1-tp">Take a look at my code</a>
		</div>
	</div>

</body>	
</html>

