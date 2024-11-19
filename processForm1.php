<?php
session_start();


$_SESSION['passengerFN'] = $_POST['firstname'];
$_SESSION['passengerSN'] = $_POST['surname'];


if (isset($_POST['luggage'])) {
    $_SESSION['luggage'] = 1; 
    header('Location: luggage.html'); 
} else {
    $_SESSION['luggage'] = 0; 
    header('Location: finalStep.php'); 
}


exit();
