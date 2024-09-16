<?php
$pageTitle = "Reservation Details";
include "view-header.php";
?>
<h1>Reservation Results</h1>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['name']) && isset($_GET['date']) && isset($_GET['time']) && isset($_GET['guests'])) {
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
        echo "<p>Incomplete reservation details. Please go back and fill out the form again.</p>";
    }
} else {
    echo "<p>No reservation data submitted.</p>";
}
include "view-footer.php";
?>
