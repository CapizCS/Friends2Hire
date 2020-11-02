<html>

<head>
    <title>
        Friends2Hire Home
    </title>
</head>
<?php

include '../connessione.php';

session_start();


if($_SESSION['$utente'] != true){
    header("location: ../index.html");
}

?>


<body>

    ciao<br>

    








</body>

</html>