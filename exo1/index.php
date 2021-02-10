<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exo 172</title>
</head>
<body>
    <div>
        <?php
        echo "User Agent : ".$_SERVER['HTTP_USER_AGENT'];
        ?>
    </div>
    <div>
        <?php
        echo "adresse ip : ".$_SERVER['REMOTE_ADDR'];
        ?>
    </div>
    <div>
        <?php
        echo $_SERVER['SERVER_NAME'];
        ?>
    </div>

</body>
</html>

<?php

