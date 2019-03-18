<?php
	include("p_showError.php");
	$name = $_POST['inputName'];
	$email = $_POST['inputEmail'];
	$phone = $_POST['inputPhone'];
	$title = $_POST['inputTitle'];
	$text = $_POST['inputTextArea'];

	include('p_connect.php');
	$data = date("Y-m-d H:i:s");
	$sql = "INSERT INTO Messages (Name, Email, Phone, DateAdd, Title, TextArea) VALUES ('$name', '$email', '$phone', '$data', '$title', '$text')";
	
if( mysqli_query($conn, $sql))
{
	echo "Danezapisane w bazie<br/>";
	header("Location: index.html#rezerwacja-form");
}
else
{
	echo "Error</br>".mysqli_error($conn);
}
mysqli_close($conn);
?>