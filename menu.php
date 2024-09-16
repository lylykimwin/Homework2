<?php
$pageTitle = "Menu";
include "view-header.php";
?>
<h1>Menu</h1>
<form action="submit-suggestion.php" method="post">
    <label for="suggestion">Share your dish suggestion:</label>
    <input type="text" id="suggestion" name="suggestion" required>
    <button type="submit">Submit</button>
</form>
<?php
include "view-footer.php";
?>
