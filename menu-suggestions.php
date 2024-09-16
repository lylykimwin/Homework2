<?php
$pageTitle = "Menu Suggestions";
include "view-header.php";
?>
<h1>Menu Suggestions</h1>
<ul>
<?php
$suggestions = ["Spaghetti Carbonara", "Chicken Alfredo", "Vegetarian Lasagna"];

foreach ($suggestions as $suggestion) {
    echo "<li>" . htmlspecialchars($suggestion) . "</li>";
}
?>
</ul>
<?php
include "view-footer.php";
?>
