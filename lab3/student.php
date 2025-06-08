<!-- Create a form to collect student details such as name, address, phone,age,
gender and store into the database. -->
<?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servername = 'localhost';
    $username ='root';
    $password='';
    $dbname='student';
    //Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //check connection
    if(!$conn){
        die("Connection failed. ".mysqli_connect_error());
    }
    //sql data insert
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $sql="insert into student(name,address,phone,age,gender) values('$name','$address','$phone','$age','$gender')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Successfully Inserted into database!";
    }
    else{
        echo "error";
    }
    mysqli_close($conn);
    exit;
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Form</title>
  </head>
  <body>
    <h2>Form</h2>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name" /><br /><br />

      <label for="address">Address:</label><br>
      <input type="text" id="address" name="address" /><br /><br />

      <label for="phone">Phone Number:</label><br>
      <input type="number" id="phone" name="phone"/><br /><br />
      
      <label for="age">Age:</label><br>
      <input type="number" id="age" name="age"/><br /><br />
      <!-- Radio Buttons -->
      <label>Gender:</label><br />
      <input type="radio" id="male" name="gender" value="male" />
      <label for="male">Male</label><br />
      <input type="radio" id="female" name="gender" value="female" />
      <label for="female">Female</label><br /><br />
      <!-- Submit Button -->
      <input type="submit" value="Submit" />
    </form>
  </body>
</html>
