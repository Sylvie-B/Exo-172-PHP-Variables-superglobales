<?php

session_start();

    echo "identifiant : ".$_COOKIE['userId']."<br>";
    echo "mot de passe : ".$_COOKIE['userPass'];
