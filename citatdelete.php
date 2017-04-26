<!doctype html>
<html>

<head>
    <title>REAL-gymnasiets Teknikprogram</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link href="Css/bootstrap.min.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="Css/Archer-Bold.otf" rel="" type="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="Css/style_a.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


    <!--NavBar-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                <a class="navbar-brand" href="#myPage" style="font-family:myFirstFont;">REAL - TEKNIK</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar" style="font-family: myFirstFont;">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">ÅRSKURSER</a></li>
                    <li><a href="projekt.php">PROJEKT</a></li>
                    <li><a href="amnen.php">ÄMNEN</a></li>
                    <li><a href="citat.php">CITAT</a></li>
                    <li><a href="kontakt.php">KONTAKT</a></li>
                    <li><a href=".php">ANVÄNDARE</a></li>
                    <li><a href="login.php">LOGGA UT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Header med text-->
    <div class="jumbotron text-center">
        <h1 style="font-family: myFirstFont;"><img alt="" src="img/teknik-rosa.png" width="60" height="60" />&nbsp;&nbsp;&nbsp;&nbsp;Teknik</h1>
        <p style="font-family: myFirstFont; font-size:24px;">Gör det roligt - Lär på riktigt</p>
    </div>

    <div class="amnen">
        <!-- ort namn title och telefon nummer -->
        <h2>Ta bort citat</h2>

        <p> ID </p>
        <input type="text" placeholder="Skriv ID som ska raderas..." name="title" id="title">
        <br>
        <br>
        <!-- Submit button -->
        <form action="" method="">
            <input id="button" type="submit" name="delete_citat" value="Ta bort"></form>

</body>

</html>
