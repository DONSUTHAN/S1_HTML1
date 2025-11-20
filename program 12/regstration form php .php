<!DOCTYPE html>
<html>
<head>
<title>PHP Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="post" action="">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Mobile: <input type="text" name="mobile"><br><br>
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>

    <input type="submit" name="submit" value="Register">
</form>

<?php
if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($name) || empty($email) || empty($mobile) || empty($username) || empty($password)) {
        echo "<h3 style='color:red;'>All fields are required!</h3>";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h3 style='color:red;'>Invalid Email!</h3>";
    }
    else if(!is_numeric($mobile) || strlen($mobile) != 10) {
        echo "<h3 style='color:red;'>Mobile number must be 10 digits!</h3>";
    }
    else {
        echo "<h3 style='color:green;'>Registration Successful!</h3>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Mobile: $mobile <br>";
        echo "Username: $username <br>";
    }
}
?>

</body>
</html>
