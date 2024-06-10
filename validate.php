<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="age">age:</label>
        <input type="text" name="age" id="username">
        <input type="submit" name="login" value="Login">
    </form>
    
    <?php
    //if(isset($_POST["login"])){
       // $username = $_POST["username"];
       // echo "Hello, {$username}";
  //  }
  $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
  

  if(empty($age)){
    echo "sorry you did not input any age";
  }
  else{
    echo "your age is $age tears old ";
  }
    ?>
</body>
</html>
