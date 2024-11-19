<?php
// Start the session
session_start();

// Check if the form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store the number of bags under 10 KG in the session
    $_SESSION['subTenKG'] = isset($_POST['subTenKG']) ? intval($_POST['subTenKG']) : 0;

    // Store the number of bags between 10 and 20 KG in the session
    $_SESSION['overTenKG'] = isset($_POST['overTenKG']) ? intval($_POST['overTenKG']) : 0;

    // Redirect to the final step page
    header('Location: finalStep.php');
    exit();
} else {
    // If accessed directly, redirect back to the flight booking page
    header('Location: flightBooking.html');
    exit();
}
?>
