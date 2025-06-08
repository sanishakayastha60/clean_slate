<!-- Write a server-side script for implementing login with username and
password and redirect to welcome page if validated otherwise prints an -->
<!-- error. -->
 <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
 $name=$_POST['name'];
 $password=$_POST['password'];
 if(!preg_match("/^[a-zA-Z ]*$/", $name)||!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password)){
    header("Location: welcome.php");
 }
 exit;
}
 ?>
<!DOCTYPE html>
<head>
    <title>Form</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" >
        <label for="name">Username</label><br>
        <input type="text" name="name" id="name"><br><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password"><br><br>
        <button>Submit</button>
    </form>
</body>
</html>