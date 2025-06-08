<?php
// Check if variables are passed via URL
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = htmlspecialchars($_GET['name']);
    $age = (int)$_GET['age'];

    echo "<h2>Received Data:</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Age: $age</p>";
    echo '<p><a href="?' . http_build_query([]) . '">Reset</a></p>';
} else {
    // Display links with variables passed in URL
    echo "<h2>Click a link to pass variables through URL</h2>";
    echo '<a href="?name=Alice&age=25">Send Alice\'s Info</a><br>';
    echo '<a href="?name=Hotaru&age=25">Send Hotaru\'s Info</a>';
}
?>
