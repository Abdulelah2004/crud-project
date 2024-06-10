<?php
// Database connection parameters
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "learn";

// Create a connection
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

// Check connection
if ($conn) {
    echo "You are connected successfully";
} else {
    echo "Sorry, you are not connected: " . mysqli_connect_error();
}

mysqli_close($conn);
?>
