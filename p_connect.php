<?php
$serverName="localhost";
$userName="rlelito";
$password="mygh36tra2Psql";
$dbName="rlelito";
	
# połączenie z bazą danych 
$conn = mysqli_connect($serverName, $userName, $password, $dbName);
if(mysqli_connect_errno()){
	{echo "wystąpił błąd z połączeniem do dazy";
	exit;}
}
?>