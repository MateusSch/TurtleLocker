<?php
include('PHP/protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Guarde seus pertences com segurança em nossos armários">
    <link rel="stylesheet" href="style.css">
    <link type="image/png" sizes="96x96" rel="icon" href="icons/turtle-web.png">
    <link rel="apple-touch-icon" type="image/png" sizes="76x76" href="icons/turtle-ios.png">
    <title>TurtleLocker</title>
</head>
<body class="container">
    <header>
        <nav class="navHeader">
            <h1 class="logo">Turtle<span>Locker</span></h1>
        </nav>
    </header>
    <main class="mainMap">
        <div class="textoMap">
            <h1 class="texto_home">
            Nossos pontos de <span>segurança</span>
            </h1>
        </div>
        <iframe class="map" src="https://storage.googleapis.com/maps-solutions-fi3dgca02a/locator-plus/cwc6/locator-plus.html" width="100%" height="100%" style="border:0;" loading="lazy"></iframe>
    </main>
</body>
</html>
