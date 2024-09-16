<?php
$pageTitle = "Make a Reservation";
include "view-header.php";
?>
<h1>Make a Reservation</h1>
<form method="get" action="get-result.php">
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Date:</label>
        <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <div class="mb-3">
        <label for="time" class="form-label">Time:</label>
        <input type="time" class="form-control" id="time" name="time" required>
    </div>
    <div class="mb-3">
        <label for="guests" class="form-label">Number of Guests:</label>
        <input type="number" class="form-control" id="guests" name="guests" required>
    </div>
  
