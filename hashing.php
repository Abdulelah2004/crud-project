<?php

$password = "Abdulelh hate you";

$hash = password_hash($password , PASSWORD_DEFAULT);

echo $hash;

?>