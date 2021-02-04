<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire</title>
</head>
<body>
    <div>
        <form method="post" action="index.php">
            <div>
                <label for="login">Identifiant</label>
                <input type="text" name="userId" id="login">
            </div>
            <div>
                <label for="passWord">Mot de passe</label>
                <input type="password" name="userPass" id="passWord">
            </div>
            <button type="submit">valider</button>
        </form>
    </div>

</body>
</html>


<?php



if(isset($_POST['userId'], $_POST['userPass'])){
    $userId = $_POST['userId'];
    $userPass = $_POST['userPass'];
    setcookie('ident', $userId);
    setcookie('pass', $userPass);
}

