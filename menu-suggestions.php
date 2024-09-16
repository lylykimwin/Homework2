<?php
$pageTitle = "Menu Suggestions";
include "view-header.php";
?>
<h1>Menu Suggestions</h1>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dish-suggestion'])) {
    // Sanitize and store the submitted suggestion
    $dishSuggestion = htmlspecialchars($_POST['dish-suggestion']);
        
    echo "<p>Thank you for your suggestion! You suggested: <strong>$dishSuggestion</strong></p>";
} else {
    echo "<p>No suggestion was submitted.</p>";
}
?>

<form action="menu-suggestions.php" method="post">
    <div class="mb-3">
        <label for="dish-suggestion" class="form-label">Share another dish suggestion:</label>
        <input type="text" class="form-control" id="dish-suggestion" name="dish-suggestion" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
include "view-footer.php";
?>
