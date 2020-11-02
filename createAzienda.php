<html> 
    <head><title>Registrazione</title></head>

    <body>


<?php
include 'connessione.php';

$logo       = $_POST['logo'];
$businessname    = $_POST['businessname'];
$iva      = $_POST['iva'];
$office      = $_POST['office'];
$referente      = $_POST['referente'];
$email      = $_POST['email'];
$password   = $_POST['password'];

//Controllo azienda che non sia già iscritta

$contr="SELECT email FROM azienda WHERE email = '$email'";
//$rescont=mysqli_query($conn,$contr);
$rescont=$conn->query($contr);
if($rescont->num_rows <1){

    $base="abcdefghijklmnopqrstuvwxyz123456789?!";
    $cod = substr(str_shuffle($base),0,rand()%5+8);

    $ins="INSERT INTO azienda (logo, businessname, iva, office, referente, email, password, cod)
    VALUES
    ('$logo', '$businessname', '$iva', '$office', '$referente', '$email', '$password', '$cod')";
    $ris=mysqli_query($conn,$ins);
    header("refresh:0; url=index.html");


}else{
    $error = "Email already used!!";
    echo "<script type='text/javascript'>alert('$error');</script>";
    header("refresh:0; url=register.html");


}







?>

</body>
</html>