<?php
$pageTitle = "Reservations";
include "view-header.php";
?>
<h1>Reservations</h1>
<form action="submit-reservation.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required>
    
    <label for="time">Time:</label>
    <input type="time" id="time" name="time" required>
    
    <label for="guests">Number of Guests:</label>
    <input type="number" id="guests" name="guests" required>
    
    <button type="submit">Reserve</button>
</form>
<?php
include "view-footer.php";
?>
