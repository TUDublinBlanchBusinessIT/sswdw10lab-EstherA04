<?php
include("finalStepHeader.html");

// Set the timezone to avoid warnings
date_default_timezone_set('UTC');

// Start a session
session_start();

// Echo the passenger's firstname from the appropriate session variable
if (isset($_SESSION['passengerFN'])) {
    echo "First Name: " . htmlspecialchars($_SESSION['passengerFN']) . "<br>";
} else {
    echo "First Name: Not provided<br>";
}

// Echo the passenger's surname from the appropriate session variable
if (isset($_SESSION['passengerSN'])) {
    echo "Surname: " . htmlspecialchars($_SESSION['passengerSN']) . "<br>";
} else {
    echo "Surname: Not provided<br>";
}

// If the luggage session variable is set and equals 1 (luggage selected)
if (isset($_SESSION['luggage']) && $_SESSION['luggage'] == 1) {
    echo "Luggage Details:<br>";
    
    // Echo the amount of bags under ten kilos the passenger is bringing
    echo "Bags under 10 KG: " . (isset($_SESSION['subTenKG']) ? htmlspecialchars($_SESSION['subTenKG']) : '0') . "<br>";
    
    // Echo the amount of bags over ten kilos the passenger is bringing
    echo "Bags between 10 and 20 KG: " . (isset($_SESSION['overTenKG']) ? htmlspecialchars($_SESSION['overTenKG']) : '0') . "<br>";
} else {
    echo "No luggage selected.<br>";
}
?>
</h4></div></div>
<form method="POST" action="confirm.php">
    <div class="form-group">
        <label class="control-label col-sm-12 text-center">Is the above information correct?</label>
        <div class="checkbox col-sm-12 text-center">
            <label><input type="checkbox" name="confirm">Yes</label>
        </div>
    </div>
    <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-default">Continue</button>
    </div>
</form>
