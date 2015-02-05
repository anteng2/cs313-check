<?php
	try{
	$db = new PDO("mysql:host=localhost;dbname=scripture", "anteng2", "php-pass");
}
catch (PDOException $ex)
{
	echo "error: ". $ex->getMessage();
	die();
}

foreach ($DB->query("SELECT book, chapter, verse, content FROM scriptures") as $row) {
	echo $row['book'] . " ";
	echo $row['chapter'] . ": ";
	echo $row['verse'];
	echo "<br />";	
	echo $row['content'];
	echo "<br />";
}

?>