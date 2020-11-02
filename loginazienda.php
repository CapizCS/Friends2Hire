
<?php
include 'connessione.php';

$email=$_POST['email'];
$password=$_POST['password'];

$controllo = "SELECT email, password
 FROM 
 azienda WHERE
 email = '$email' AND password ='$password'
 ";


$res =mysqli_query($conn,$controllo);



if($res->num_rows < 1){
	$error = "WRONG Email or Password";
    echo "<script type='text/javascript'>alert('$error');</script>";
	header("refresh: 0; url=index.html");
}else{
	session_start();
	$_SESSION['$utente'] = true;
    header("refresh:0; url=in/home.php");
}

?>
