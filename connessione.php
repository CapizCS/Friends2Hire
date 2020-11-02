<html>
	<head>
		<title>Connection..</title>
</head>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="friends2hire";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	echo"Connessione al server '".$servername."' falitta ".mysqli_error();
}
?>

</html>