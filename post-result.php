<?php
$pageTitle = "Feedback Results";
include "view-header.php";
?>
<h1>Feedback Results</h1>
<?php
echo getDisplay();
include "view-footer.php";

function getDisplay() {
    if (isset($_POST['dish-suggestion'])) {
        // Sanitize and display the submitted feedback
        $suggestion = htmlspecialchars($_POST['dish-suggestion']);
        return "<p>Thank you for your suggestion! You suggested: <strong>$suggestion</strong></p>";
    } else {
        return "<p>No feedback received.</p>";
    }
}
?>
