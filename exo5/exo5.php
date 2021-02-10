<?php
session_start();

setcookie('userId', 'bidule', time() + 60 * 10, "/");
setcookie('userPass', '1234', time() + 60 * 10, "/");

echo "identifiant : ".$_COOKIE['userId']."<br>";
echo "mot de passe : ".$_COOKIE['userPass'];