<?php
$pageTitle = "Reservation Details";
include "view-header.php";
?>
<h1>Reservation Details</h1>
<?php
if (isset($_GET['name']) && isset($_GET['date']) && isset($_GET['time']) && isset($_GET['guests'])) {
    // Sanitize and display the reservation details
    $name = htmlspecialchars($_GET['name']);
    $date = htmlspecialchars($_GET['date']);
    $time = htmlspecialchars($_GET['time']);
    $guests = htmlspecialchars($_GET['guests']);
?>
    <p>Thank you for your reservation! Here are the details:</p>
    <ul>
        <li><strong>Name:</strong> <?php echo $name; ?></li>
        <li><strong>Date:</strong> <?php echo $date; ?></li>
        <li><strong>Time:</strong> <?php echo $time; ?></li>
        <li><strong>Number of Guests:</strong> <?php echo $guests; ?></li>
    </ul>
<?php
} else {
?>
    <p>No reservation details were sent to the page.</p>
<?php
}
include "view-footer.php";
?>
