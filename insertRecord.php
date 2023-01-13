<?php

require_once "config.php";

$conn = new mysqli($hn,$un,$pw,$db);

if(isset($_POST['first_name']) && 
	isset($_POST['last_name'])) {

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$student_iD = null;

	$stmt = $conn->prepare("INSERT INTO students VALUES (?,?,?)");

	$stmt->bind_param("iss", $student_iD, $first_name, $last_name);

	$stmt->execute();

	$stmt->close();
	$conn->close();

	header("Location: ./");
}

?>
