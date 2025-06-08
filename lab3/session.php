<!-- Write a program to store page views count in SESSION, increment the count
on each refresh, and show the count on web page. -->
<?php
session_start(); 
if (isset($_SESSION['views'])) {
    $_SESSION['views']++; 
} else {
    $_SESSION['views'] = 1;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page View Counter</title>
</head>
<body>
    <h2>Page Views Counter</h2>
    <p>You have refreshed or visited this page <strong><?php echo $_SESSION['views']; ?></strong> times in this session.</p>
</body>
</html>
