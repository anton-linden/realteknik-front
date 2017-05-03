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

    <!-- här är första formen för årskurs 1 -->
    <div class="edit col-sm-6">

        <p> Årskurs 1 </p>
        <p><textarea placeholder="Skriv här..." cols="40" rows="15" name="description" id="description"></textarea></p>
        <br>
        <br>
        <!-- Submit button -->
        <form action="" method="">
            <input id="button" type="submit" name="add_information1" value="Lägg till"></form>

    </div>
    <!-- här är andra formen för årskurs 2 -->
    <div class="edit1 col-sm-6">
        <p> Årskurs 2 </p>
        <p><textarea placeholder="Skriv här..." cols="40" rows="15" name="description" id="description"></textarea></p>
        <br>
        <br>
        <form action="" method="">
            <input id="button" type="submit" name="add_information2" value="Lägg till"></form>

    </div>
    <!-- här är tredje formen för årskurs 3 -->
    <div class="edit2 col-sm-6">
        <p> Årskurs 3 </p>
        <p><textarea placeholder="Skriv här..." cols="40" rows="15" name="description" id="description"></textarea></p>
        <br>
        <br>
        <form action="" method="">
            <input id="button" type="submit" name="add_information3" value="Lägg till"></form>

    </div>
    <div class="edit3 col-sm-6">
        <!-- här är formen för sen då? år 4 eller jobb?  -->
        <p> Sen då? År 4 eller jobb? </p>
        <p><textarea placeholder="Skriv här..." cols="40" rows="15" name="description" id="description"></textarea></p>
        <br>
        <br>
        <form action="" method="">
            <input id="button" type="submit" name="add_information3" value="Lägg till"></form>

    </div>

</body>

</html>