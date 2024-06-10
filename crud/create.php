<?php
include "config.php";

if (isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    // Ensure you have no single quotes around table or column names
    $sql = "INSERT INTO users (firstname, lastname, email, password, gender) 
            VALUES ('$first_name', '$last_name', '$email', '$password', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "You are registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
</head>
<body>
    <h1>Sign Up Form</h1>
    <form action="" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            First Name: <br>
            <input type="text" name="firstname" required>
            <br>
            Last Name: <br>
            <input type="text" name="lastname" required>
            <br>
            Email: <br>
            <input type="email" name="email" required>
            <br>
            Password: <br>
            <input type="password" name="password" required>
            <br>
            Gender: <br>
            <input type="radio" name="gender" value="male" required> Male
            <input type="radio" name="gender" value="female" required> Female
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>
