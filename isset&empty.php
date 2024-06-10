<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset&empty.php" method="post">
        <label for="">username</label>
        <input type="text" name="username" id=""> <br>
        
        <label for="">password</label>
        <input type="password" name="password" id="">  <br>

        <input type="submit" name="login" id="log in">
    </form>
</body>
</html>

<?php
/*foreach*/
if(isset ($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST ["password"];

    if (empty($username & $password)){
        echo"you missed to input your username and passwords";
    }

    elseif(empty($username)){
        echo "please input your username";
    }
        elseif(empty($password)){
            echo " please input your password";
        }

        
        else{
            echo "hello there {$username}";
        }

    }

?>