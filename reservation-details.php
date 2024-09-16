<?php
$pageTitle = "Reservation Details";
include "view-header.php";
?>
<h1>Reservation Details</h1>
<ul>
<?php
// Fetch reservations from the database or a file
// Example static list
$reservations = [
    ["name" => "John Doe", "date" => "2024-09-20", "time" => "19:00", "guests" => 4],
    ["name" => "Jane Smith", "date" => "2024-09-21", "time" => "20:00", "guests" => 2]
];

foreach ($reservations as $reservation) {
    echo "<li>" . htmlspecialchars($reservation['name']) . " - " . htmlspecialchars($reservation['date']) . " at " . htmlspecialchars($reservation['time']) . " for " . htmlspecialchars($reservation['guests']) . " guests</li>";
}
?>
</ul>
<?php
include "view-footer.php";
?>
