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
                    <li><a href="index2.php">ÅRSKURSER</a></li>
                    <li><a href="amnen.php">ÄMNEN</a></li>
                    <li><a href="citat.php">CITAT</a></li>
                    <li><a href="kontakt.php">KONTAKT</a></li>
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


    <div class="edit">
        <!-- ort namn title och telefon nummer -->
        <h2>Gävle</h2>

        <p> Namn </p>
        <input type="text" name="name" id="name">
        <p> Titel </p>
        <input type="text" name="roll" id="roll">
        <p> Telefon nummer </p>
        <input type="text" name="nummer" id="nummer">
        <p> Email </p>
        <input type="text" name="email" id="email">
        <br>
        <br>
        <!-- Submit button -->
        <form action="" method="">
            <input id="button" style="float:right;margin-right:65px;" type="submit" name="add_information1" value="Lägg till"></form>
        <form action="" method="">
            <input id="button" type="submit" name="del_information1" value="Ta bort">
        </form>
    </div>
    <div class="edit1">
        <!-- ort namn title och telefon nummer -->
        <h2>Linköping</h2>

        <p> Namn </p>
        <input type="text" name="name" id="name2">
        <p> Titel </p>
        <input type="text" name="roll" id="roll2">
        <p> Telefon nummer </p>
        <input type="text" name="nummer" id="nummer2">
        <p> Email </p>
        <input type="text" name="email" id="email2">
        <br>
        <br>
        <!-- Submit button -->
        <form action="" method="">
            <input id="button" style="float:right;margin-right:65px;" type="submit" name="add_information2" value="Lägg till"></form>
        <form action="" method="">
            <input id="button" type="submit" name="del_information2" value="Ta bort">
        </form>
    </div>
    <div class="edit2">
        <!-- ort namn title och telefon nummer -->
        <h2>Norrköping</h2>

        <p> Namn </p>
        <input type="text" name="name" id="name3">
        <p> Titel </p>
        <input type="text" name="roll" id="roll3">
        <p> Telefon nummer </p>
        <input type="text" name="nummer" id="nummer3">
        <p> Email </p>
        <input type="text" name="email" id="email3">
        <br>
        <br>
        <!-- Submit button -->
        <form action="" method="">
            <input id="button" style="float:right;margin-right:65px;" type="submit" name="add_information3" value="Lägg till"></form>
        <form action="" method="">
            <input id="button" type="submit" name="del_information3" value="Ta bort">
        </form>
    </div>
</body>

</html>
