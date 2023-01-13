<?php

require_once "config.php";

$conn = new mysqli($hn,$un,$pw,$db);

$query = "SELECT * FROM students";

$result = $conn->query($query);

if(!$result) die("No result");

foreach($result as $item) {
	$response[] = $item;
}

echo json_encode($response);

?>