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
            <div class="collapse navbar-collapse dropdown" id="myNavbar" style="font-family: myFirstFont;">


                <ul class="nav navbar-nav navbar-right ">

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">ÅRSKURSER <b class="caret"></b></a>
                        <ul style="" class="dropdown-menu">
                            <li><a href="arskurschange.php">ÄNDRA</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">PROJEKT <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">LÄGG TILL</a></li>
                            <li><a href="#">TA BORT</a></li>
                            <li class="divider"></li>
                            <li><a href="#">ÄNDRA</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">ÄMNEN <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="amnenlaggtill.php">LÄGG TILL</a></li>
                            <li><a href="amnendelete.php">TA BORT</a></li>
                            <li class="divider"></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">CITAT <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="citatlaggtill.php">LÄGG TILL</a></li>
                            <li><a href="citatdelete.php">TA BORT</a></li>
                            <li class="divider"></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">KONTAKT <b class="caret"></b></a>
                        <ul style="min-width: 100%; letter-spacing: 2px;" class="dropdown-menu">
                            <li><a href="kontaktchange.php">ÄNDRA</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">ANVÄNDARE<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">LÄGG TILL</a></li>
                            <li><a href="#">TA BORT</a></li>
                            <li class="divider"></li>
                            <li><a href="#">ÄNDRA</a></li>
                        </ul>
                    </li>
                    <li><a href="logout.php">LOGGA UT</a></li>
                </ul>



            </div>
        </div>
    </nav>
    <!--Header med text-->
    <div class="jumbotron text-center">
        <h1 style="font-family: myFirstFont;"><img alt="" src="img/teknik-rosa.png" width="60" height="60" />&nbsp;&nbsp;&nbsp;&nbsp;Teknik</h1>
        <p style="font-family: myFirstFont; font-size:24px;">Gör det roligt - Lär på riktigt</p>
    </div>

    <div class="citat">

        <!-- ort namn title och telefon nummer -->
        <h2>Citat</h2>

        <p> Citat </p>
        <input type="text" placeholder="Citatet.." name="text" id="text">

        <p> Namn </p>
        <input type="text" placeholder="Elevens namn.." name="name" id="name">
        <p> Skola </p>
        <input type="text" placeholder="Skolan.." name="skola" id="skola">
        <br>
        <br>

        <!-- Submit button -->
        <form action="" method="">
            <input id="button" type="submit" name="add_citat" value="Lägg till"></form>

    </div>

</body>

</html>
