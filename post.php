<?php
$pageTitle = "Submit Feedback";
include "view-header.php";
?>
<h1>Submit Your Feedback</h1>
<form method="post" action="post-result.php">
    <div class="mb-3">
        <label for="dish-suggestion" class="form-label">Dish Suggestion or Feedback:</label>
        <input type="text" class="form-control" id="dish-suggestion" name="dish-suggestion" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
include "view-footer.php";
?>
