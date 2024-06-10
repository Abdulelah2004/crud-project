<?php
include "config.php";

if (isset($_POST['update'])) {

    $firstname = $_POST['firstname'];
    $user_id = $_POST['id'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', password='$password', gender='$gender' WHERE id='$user_id'";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id=$user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $email = $row['email'];
        $password = $row['password'];
        $gender = $row['gender'];
        $id = $row['id'];
    } else {
        echo "No record found";
    }
}
?>

<h2>user update form</h2>
<form action="" method="post"></form>
<form action="" method="post">
    <fieldset>
  <legend> personal information</legend>
  first name: <br>
  <input type="text" name="firstname">
  <br>
  last name: <br>
  <input type="text" name="lastname" id="">
  <br>
  password: <br>
  <input type="password" name="password">
    <br>
  gender: <br>
  <input type="radio" name="gender" value="male">
  <input type="radio" name="gender" value="female">
  <br>
  <input type="submit" name="submit" value="submit">
    </fieldset>
    </form>      