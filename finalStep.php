<?php
// Start the session
session_start();

// Set the timezone (replace 'America/New_York' with your correct timezone)
date_default_timezone_set('America/New_York');

// Include database connection file
include("dbcon.php");

// Ensure required session variables are set
if (!isset($_SESSION['passengerFN']) || !isset($_SESSION['passengerSN'])) {
    echo "<h4>Error: Missing passenger information. Please restart the booking process.</h4>";
    exit();
}

// Display passenger details
echo "<h4>Passenger's Firstname: " . htmlspecialchars($_SESSION['passengerFN']) . "</h4>";
echo "<h4>Passenger's Surname: " . htmlspecialchars($_SESSION['passengerSN']) . "</h4>";

// Check if luggage information is available
if (isset($_SESSION['luggage']) && $_SESSION['luggage'] == 1) {
    // Using isset() to avoid undefined index errors for session variables
    $subTenKG = isset($_SESSION['subTenKG']) ? $_SESSION['subTenKG'] : 0;
    $overTenKG = isset($_SESSION['overTenKG']) ? $_SESSION['overTenKG'] : 0;
    
    echo "<h4>Bags under 10 kilos: " . htmlspecialchars($subTenKG) . "</h4>";
    echo "<h4>Bags between 10 and 20 kilos: " . htmlspecialchars($overTenKG) . "</h4>";
} else {
    echo "<h4>No luggage details provided.</h4>";
}
?>

<!-- Confirmation Form -->
<form method="POST" action="confirm.php">
    <div class="form-group">        
        <label class="control-label col-sm-12 text-center">Is the above information correct?</label>
        <div class="checkbox col-sm-12 text-center">
          <label><input type="checkbox" name="confirm" required> Yes</label>
        </div>
    </div>
    <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-default">Continue</button>
    </div>
</form>
