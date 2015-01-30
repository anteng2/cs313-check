<?php
    session_start();
	       $_SESSION["count"] = 1;

	header("Location: surveyResult.php");
	exit();

?>