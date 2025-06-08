<?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name=$_POST['name'];
    $hobby=$_POST['hobby'];
    $gender=$_POST['gender'];
    $country=$_POST['country'];
?>
<!DOCTYPE html>
    <html>
    <head>
        <title>Form Result</title>
    </head>
    <body>
        <h2>Submitted Data</h2>
        <table border="1">
            <tr><th>Name</th>
            <th>Hobby</th>
            <th>Gender</th>
            <th>Country</th>
            </tr>
            <tr>
              <td><?php echo $name; ?></td>
              <td><?php echo $hobby; ?></td>
              <td><?php echo $gender; ?></td>
              <td><?php echo $country; ?></td>
            </tr>
        </table>
        <br>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>">Go back</a>
    </body>
    </html>
<?php
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
      <!-- Textbox -->
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" /><br /><br />

      <!-- Checkbox -->
      <label>Choose your hobbies:</label><br />
      <input type="checkbox" id="hobby1" name="hobby" value="reading" />
      <label for="hobby1">Reading</label><br />
      <input type="checkbox" id="hobby2" name="hobby" value="traveling" />
      <label for="hobby2">Traveling</label><br /><br />

      <!-- Radio Buttons -->
      <label>Gender:</label><br />
      <input type="radio" id="male" name="gender" value="male" />
      <label for="male">Male</label><br />
      <input type="radio" id="female" name="gender" value="female" />
      <label for="female">Female</label><br /><br />

      <!-- Select Dropdown -->
      <label for="country">Country:</label>
      <select id="country" name="country">
        <option value="usa">USA</option>
        <option value="uk">UK</option>
        <option value="canada">Canada</option></select
      ><br /><br />

      <!-- Submit Button -->
      <input type="submit" value="Submit" />
    </form>
  </body>
</html>
