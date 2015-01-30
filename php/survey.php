
<?php 
if (isset($_COOKIE['voted']))
 {  
 	header("Location: surveyResult.php");
	exit();
 }

?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP Survey</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/survey.css">
	</head>

	<body>
		<h1> Surveys!!</h1><hr><br>
		<form action="setCookie.php" method="post">

			<fieldset>
				<legend>What is your favorite color?</legend>
				<div>
					<label class="radio-inline"><input type="radio" name="color" required value="red">Red</label>
					<label class="radio-inline"><input type="radio" name="color" required value="blue">Blue</label>
					<label class="radio-inline"><input type="radio" name="color" required value="green">Green</label>
					<label class="radio-inline"><input type="radio" name="color" required value="yellow">Yellow</label>
					<label class="radio-inline"><input type="radio" name="color" required value="black">Black</label><br><br>
				</div>
			</fieldset>

			<br>

			<fieldset>
				<legend>What is your favorite food?</legend>
				<div>
					<label class="radio-inline"><input type="radio" name="food" required value="pizza">Pizza</label>
					<label class="radio-inline"><input type="radio" name="food" required value="steak">Steak</label>
					<label class="radio-inline"><input type="radio" name="food" required value="spagetti">Spagetti</label>
					<label class="radio-inline"><input type="radio" name="food" required value="sushi">Sushi</label>
					<label class="radio-inline"><input type="radio" name="food" required value="orangeChicken">Orange Chicken</label><br><br>
				</div>
			</fieldset>

			<br>

			<fieldset>
				<legend>What is your favorite sport?</legend>
				<div>
					<label class="radio-inline"><input type="radio" name="sport" required value="basketball">Basketball</label>
					<label class="radio-inline"><input type="radio" name="sport" required value="baseball">Baseball</label>
					<label class="radio-inline"><input type="radio" name="sport" required value="football">Football</label>
					<label class="radio-inline"><input type="radio" name="sport" required value="soccor">Soccor</label>
					<label class="radio-inline"><input type="radio" name="sport" required value="valleyball">valleyball</label><br><br><br>
				</div>
			</fieldset>

			<br>

			<fieldset>
				<legend>What is your faverite fruit?</legend>
				<div>
					<label class="radio-inline"><input type="radio" name="fruit" required value="apple">Apple</label>
					<label class="radio-inline"><input type="radio" name="fruit" required value="orange">Orange</label>
					<label class="radio-inline"><input type="radio" name="fruit" required value="waterMelon">Water melon</label>
					<label class="radio-inline"><input type="radio" name="fruit" required value="grape">Grape</label>
					<label class="radio-inline"><input type="radio" name="fruit" required value="peach">Peach</label><br><br>
				</div>
			</fieldset>

			<input type="submit" value="Submit" />
			<form action="surveyResult.php">
				<input type="button" value="See Results" onclick="window.location='resetCount.php';" />
			</FORM>
		</form>
	</body>
</html>