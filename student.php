<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name =($_POST["name"]);
  $email = ($_POST["email"]);
  $phone = ($_POST["phone"]);
  $gender =($_POST["gender"]);
  $grade =($_POST["grade"]);
  $township=($_POST["township"]);
  $subject=($_POST["subject"]);
}


?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Phone: <input type="text" name="phone">
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
        Township:
        <select name="township">
            <option>Hpa-An</option>
            <option>Yangon</option>
            <option>Mandalay</option>
        </select>
        <br><br>
        Grade:
        <select name="grade">
            <option>First Year</option>
            <option>Second Year</option>
            <option>Third Year</option>
        </select>
        <br><br>
        Subject:
        <input type="checkbox" name="subject[]" value="Sub1">501
        <input type="checkbox" name="subject[]" value="Sub2">502
        <input type="checkbox" name="subject[]" value="Sub3">503
        <br><br>
        <input type="submit" name="submit" value="Submit">  
  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $gender;
echo "<br>";
echo $grade;
echo "<br>";
echo $township;

?>

</body>
</html>