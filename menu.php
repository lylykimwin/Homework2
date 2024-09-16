<?php
$pageTitle = "Menu";
include "view-header.php";
?>
<h1>Menu</h1>
<form action="menu-suggestions.php" method="post">
    <div class="mb-3">
        <label for="dish-suggestion" class="form-label">Share your dish suggestion:</label>
        <input type="text" class="form-control" id="dish-suggestion" name="dish-suggestion" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
include "view-footer.php";
?>
