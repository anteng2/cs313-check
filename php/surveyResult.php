

<!DOCTYPE html>
<html lang ="en">
	<head>
		<meta charset="utf-8">
		<title>Survey rsult</title>
		
		<link rel="stylesheet" href="../css/survey.css">

	</head>

	<body>
	<?php 
			session_start();
			if (!isset($_SESSION['count'])) {
				$_SESSION['count'] = 1;
			}
			$_SESSION['count'] += 1;		
			$colors = 0;
			$foods = 0;
			$sports = 0;
			$fruits = 0;

	 if (array_key_exists('voted', $_COOKIE) && $_SESSION['count'] == 1)
	 {
		if(!empty($_SESSION["color"]))
		{

			if($_SESSION["color"] == "red")
				$colors = 0;
			else if($_SESSION["color"] == "blue")
				$colors = 1;
			else if($_SESSION["color"] == "green")
				$colors = 2;
			else if($_SESSION["color"] == "yellow")
				$colors = 3;
			else if($_SESSION["color"] == "black")
				$colors = 4;
			else
				;

		}
		if(isset($_SESSION["food"]))
		{

			if($_SESSION["food"] == "pizza")
				$foods = 0;
			else if($_SESSION["food"] == "steak")
				$foods = 1;
			else if($_SESSION["food"] == "spagetti")
				$foods = 2;
			else if($_SESSION["food"] == "sushi")
				$foods = 3;
			else if($_SESSION["food"] == "orangeChicken")
				$foods = 4;
			else
				;
			
		}

		if(isset($_SESSION["sport"]))
		{

			if($_SESSION["sport"] == "basketball")
				$sports = 0;
			else if($_SESSION["sport"] == "baseball")
				$sports = 1;
			else if($_SESSION["sport"] == "football")
				$sports = 2;
			else if($_SESSION["sport"] == "soccor")
				$sports = 3;
			else if($_SESSION["sport"] == "valleyball")
				$sports = 4;
			else
				;
			
		}

		if(isset($_SESSION["fruit"]))
		{
			
			if($_SESSION["fruit"] == "apple")
				$fruits = 0;
			else if($_SESSION["fruit"] == "orange")
				$fruits = 1;
			else if($_SESSION["fruit"] == "waterMelon")
				$fruits = 2;
			else if($_SESSION["fruit"] == "grape")
				$fruits = 3;
			else if($_SESSION["fruit"] == "peach")
				$fruits = 4;
			else
				;
			
		}

		
		$linesColor = file("../txt/color.txt");

		$linesColor[$colors] += 1;
		$fh = fopen("../txt/color.txt", "w");
		for ($i = 0; $i < 5; $i++) {
			if ($i == $colors)
				fwrite($fh,$linesColor[$i]."\n");
			else
				fwrite($fh,$linesColor[$i]);
		}

		echo "<div class = 'container' align='center'>\n";
		echo "<h1>Favorite color??</h1>\n";
		echo "<table>\n";
		echo "<tr>\n";
		echo "<td>Color</td>\n";
		echo "<td>Red</td>\n";
		echo "<td>Blue</td>\n";
		echo "<td>Green</td>\n";
		echo "<td>Yellow</td>\n";
		echo "<td>Black</td>\n";
		echo "</tr>\n";

		echo "<tr>\n";
		echo "<td>Result</td>\n";
		echo "<td>$linesColor[0]</td>\n";
		echo "<td>$linesColor[1]</td>\n";
		echo "<td>$linesColor[2]</td>\n";
		echo "<td>$linesColor[3]</td>\n";
		echo "<td>$linesColor[4]</td>\n";
		echo "</tr>\n";
		echo "</table>\n";
		echo "</div><hr/>";

		$linesFood = file("../txt/food.txt");

		$linesFood[$foods] += 1;
		$fh = fopen("../txt/food.txt", "w");
		for ($i = 0; $i < 5; $i++) {
			if ($i == $foods)
				fwrite($fh,$linesFood[$i]."\n");
			else
				fwrite($fh,$linesFood[$i]);
		}

		echo "<div class = 'container' align='center'>\n";
		echo "<h1>Favorite Food??</h1>\n";
		echo "<table>\n";
		echo "<tr>\n";
		echo "<td>Food</td>\n";
		echo "<td>Pizza</td>\n";
		echo "<td>Steak</td>\n";
		echo "<td>Spagetti</td>\n";
		echo "<td>Sushi</td>\n";
		echo "<td>Orange Chicken</td>\n";
		echo "</tr>\n";

		echo "<tr>\n";
		echo "<td>Result</td>\n";
		echo "<td>$linesFood[0]</td>\n";
		echo "<td>$linesFood[1]</td>\n";
		echo "<td>$linesFood[2]</td>\n";
		echo "<td>$linesFood[3]</td>\n";
		echo "<td>$linesFood[4]</td>\n";
		echo "</tr>\n";
		echo "</table>\n";
		echo "</div><hr/>";

		$linesSport = file("../txt/sport.txt");

		$linesSport[$sports] += 1;
		$fh = fopen("../txt/sport.txt", "w");
		for ($i = 0; $i < 5; $i++) {
			if ($i == $sports)
				fwrite($fh,$linesSport[$i]."\n");
			else
				fwrite($fh,$linesSport[$i]);
		}

		echo "<div class = 'container' align='center'>\n";
		echo "<h1>Favorite sport??</h1>\n";
		echo "<table>\n";
		echo "<tr>\n";
		echo "<td>Sport</td>\n";
		echo "<td>Basketball</td>\n";
		echo "<td>Baseball</td>\n";
		echo "<td>Football</td>\n";
		echo "<td>Soccor</td>\n";
		echo "<td>Valleyball</td>\n";
		echo "</tr>\n";

		echo "<tr>\n";
		echo "<td>Result</td>\n";
		echo "<td>$linesSport[0]</td>\n";
		echo "<td>$linesSport[1]</td>\n";
		echo "<td>$linesSport[2]</td>\n";
		echo "<td>$linesSport[3]</td>\n";
		echo "<td>$linesSport[4]</td>\n";
		echo "</tr>\n";
		echo "</table>\n";
		echo "</div><hr/>";

		$linesFruit = file("../txt/fruit.txt");

		$linesFruit[$fruits] += 1;
		$fh = fopen("../txt/fruit.txt", "w");
		for ($i = 0; $i < 5; $i++) {
			if ($i == $fruits)
				fwrite($fh,$linesFruit[$i]."\n");
			else
				fwrite($fh,$linesFruit[$i]);
		}


		echo "<div class = 'container' align='center'>\n";
		echo "<h1>Favorite fruit??</h1>\n";
		echo "<table>\n";
		echo "<tr>\n";
		echo "<td>Fruit</td>\n";
		echo "<td>Apple</td>\n";
		echo "<td>Orange</td>\n";
		echo "<td>Water melon</td>\n";
		echo "<td>Grape</td>\n";
		echo "<td>Peach</td>\n";
		echo "</tr>\n";

		echo "<tr>\n";
		echo "<td>Result</td>\n";
		echo "<td>$linesFruit[0]</td>\n";
		echo "<td>$linesFruit[1]</td>\n";
		echo "<td>$linesSport[2]</td>\n";
		echo "<td>$linesFruit[3]</td>\n";
		echo "<td>$linesFruit[4]</td>\n";
		echo "</tr>\n";
		echo "</table>\n";
		echo "</div><hr/>";
	}

	if ($_SESSION['count'] != 1)
{
	$linesColor = file("../txt/color.txt");
	$linesFood = file("../txt/food.txt");
	$linesFruit = file("../txt/fruit.txt");
	$linesSport = file("../txt/sport.txt");
		echo "<div class = 'container' align='center'>\n";
		echo "<h1>Favorite color??</h1>\n";
		echo "<table>\n";
		echo "<tr>\n";
		echo "<td>Color</td>\n";
		echo "<td>Red</td>\n";
		echo "<td>Blue</td>\n";
		echo "<td>Green</td>\n";
		echo "<td>Yellow</td>\n";
		echo "<td>Black</td>\n";
		echo "</tr>\n";

		echo "<tr>\n";
		echo "<td>Result</td>\n";
		echo "<td>$linesColor[0]</td>\n";
		echo "<td>$linesColor[1]</td>\n";
		echo "<td>$linesColor[2]</td>\n";
		echo "<td>$linesColor[3]</td>\n";
		echo "<td>$linesColor[4]</td>\n";
		echo "</tr>\n";
		echo "</table>\n";
		echo "</div><hr/>";

		echo "<div class = 'container' align='center'>\n";
		echo "<h1>Favorite Food??</h1>\n";
		echo "<table>\n";
		echo "<tr>\n";
		echo "<td>Food</td>\n";
		echo "<td>Pizza</td>\n";
		echo "<td>Steak</td>\n";
		echo "<td>Spagetti</td>\n";
		echo "<td>Sushi</td>\n";
		echo "<td>Orange Chicken</td>\n";
		echo "</tr>\n";

		echo "<tr>\n";
		echo "<td>Result</td>\n";
		echo "<td>$linesFood[0]</td>\n";
		echo "<td>$linesFood[1]</td>\n";
		echo "<td>$linesFood[2]</td>\n";
		echo "<td>$linesFood[3]</td>\n";
		echo "<td>$linesFood[4]</td>\n";
		echo "</tr>\n";
		echo "</table>\n";
		echo "</div><hr/>";

		echo "<div class = 'container' align='center'>\n";
		echo "<h1>Favorite sport??</h1>\n";
		echo "<table>\n";
		echo "<tr>\n";
		echo "<td>Sport</td>\n";
		echo "<td>Basketball</td>\n";
		echo "<td>Baseball</td>\n";
		echo "<td>Football</td>\n";
		echo "<td>Soccor</td>\n";
		echo "<td>Valleyball</td>\n";
		echo "</tr>\n";

		echo "<tr>\n";
		echo "<td>Result</td>\n";
		echo "<td>$linesSport[0]</td>\n";
		echo "<td>$linesSport[1]</td>\n";
		echo "<td>$linesSport[2]</td>\n";
		echo "<td>$linesSport[3]</td>\n";
		echo "<td>$linesSport[4]</td>\n";
		echo "</tr>\n";
		echo "</table>\n";
		echo "</div><hr/>";

		echo "<div class = 'container' align='center'>\n";
		echo "<h1>Favorite fruit??</h1>\n";
		echo "<table>\n";
		echo "<tr>\n";
		echo "<td>Fruit</td>\n";
		echo "<td>Apple</td>\n";
		echo "<td>Orange</td>\n";
		echo "<td>Water melon</td>\n";
		echo "<td>Grape</td>\n";
		echo "<td>Peach</td>\n";
		echo "</tr>\n";

		echo "<tr>\n";
		echo "<td>Result</td>\n";
		echo "<td>$linesFruit[0]</td>\n";
		echo "<td>$linesFruit[1]</td>\n";
		echo "<td>$linesSport[2]</td>\n";
		echo "<td>$linesFruit[3]</td>\n";
		echo "<td>$linesFruit[4]</td>\n";
		echo "</tr>\n";
		echo "</table>\n";
		echo "</div><hr/>";
	}
?>

	</body>
</html>