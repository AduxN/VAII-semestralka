<?php
/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=latin-ext">
    <script src="../../public/js/script.js"></script>
</head>
<body>
<nav>
    <ul class="menu">
        <li>
            <div class="defaultmenu">
                <a href="?c=home" class="item">Domov</a>
                <a href="?c=news" class="item">Novinky</a>
                <a href="?c=reviews" class="item">Recenzie</a>
                <a href="?c=offers" class="item">Špeciálne ponuky</a>
            </div>
        </li>
        <li>
            <div class="btns">

                <a href="?c=auth&a=login"><button type="button" class="btn btn-primary loginbtn">Prihlás sa</button></a>
                <a href="?c=auth&a=signin"><button type="button" class="btn btn-primary signinbtn">Registruj sa</button></a>
            </div>
        </li>
    </ul>
</nav>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
<footer>
    <hr>
    <div class="footer_text">
        <p class="left">
            Všetky práva vyhradené.
        </p>
        <p class="right">
            © 2022 GameCommunity - nagy1@stud.uniza.sk
        </p>
    </div>
</footer>
</body>
</html>
