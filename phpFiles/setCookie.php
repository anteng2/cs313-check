<?php
    session_start();
    $_SESSION["color"] = $_POST["color"];
     $_SESSION["food"] = $_POST["food"];
     $_SESSION["fruit"] = $_POST["fruit"];
     $_SESSION["sport"] = $_POST["sport"];
	$value = "Voted";
	setcookie("voted", $value);
	       $_SESSION["count"] = 0;
	header("Location: surveyResult.php");
	exit();
?>