<?php
// Set cookie if it's not already set
if (!isset($_COOKIE['user'])) {
    setcookie("user", "Sanisha", time() + 3600); // Cookie valid for 1 hour
    $message = "Cookie has been set. Please refresh the page to see the value.";
} else {
    $user = $_COOKIE['user'];
    $message = "Welcome back, " . htmlspecialchars($user) . "!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Cookie </title>
</head>
<body>
<h2>Cookie </h2>
<p><?php echo $message; ?></p>
</body>
</html>
