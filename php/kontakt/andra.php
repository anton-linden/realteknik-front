<?php
    include('../phpsession.php');

    //Create connection
     $connection = new mysqli($servername, $username, $password, $dbname);

    //Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
?>
<!doctype html>
<html>

<head>
    <title>REAL-gymnasiets Teknikprogram</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link href="Css/bootstrap.min.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="../../css/Archer-Bold.otf" rel="" type="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="../../css/style_a.css" rel="stylesheet" type="text/css" />
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
                            <li><a href="../arskurser/andra.php">ÄNDRA</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">PROJEKT <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">LÄGG TILL</a></li>
                            <li><a href="#">TA BORT</a></li>
                            <li><a href="#">ÄNDRA</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">ÄMNEN <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../amnen/Lagg-Till.php">LÄGG TILL</a></li>
                            <li><a href="../amnen/Ta-Bort.php">TA BORT</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">CITAT <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../citat/Lagg-Till.php">LÄGG TILL</a></li>
                            <li><a href="../citat/Ta-Bort.php">TA BORT</a></li>


                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">KONTAKT <b class="caret"></b></a>
                        <ul style="min-width: 100%; letter-spacing: 2px;" class="dropdown-menu">
                            <li><a href="../kontakt/andra.php">ÄNDRA</a></li>
                        </ul>
                    </li>
                    <?php
                    if($site_session === "admin")
                    {
                        echo '<li class="dropdown">';
                        echo '<a href="#" data-toggle="dropdown" class="dropdown-toggle">ANVÄNDARE<b class="caret"></b></a>';
                        echo '<ul class="dropdown-menu">';
                        echo '<li><a href="#">LÄGG TILL</a></li>';
                        echo '<li><a href="#">TA BORT</a></li>';
                        echo '<li><a href="#">ÄNDRA</a></li>';
                        echo '</ul>';
                        echo '</li>';
                    }
                    ?>
                    <li><a href="../logout.php">LOGGA UT</a></li>
                </ul>



            </div>
        </div>
    </nav>
    <!--Header med text-->
    <div class="jumbotron text-center">
        <h1 style="font-family: myFirstFont;"><img alt="" src="../../img/teknik-rosa.png" width="60" height="60" />&nbsp;&nbsp;&nbsp;&nbsp;Teknik</h1>
        <p style="font-family: myFirstFont; font-size:24px;">Gör det roligt - Lär på riktigt</p>
    </div>


    <div style="text-align: center; width:33.3333333%;" class="col-sm-6">
        <!-- ort namn title och telefon nummer -->
        <div style="display: inline-block;" class="gavle">
            <h2>Gävle</h2>
            <form action="change.php" method="post">
            <p> Namn </p>
            <input type="text" placeholder="Skriv namn..." name="namn" id="name">
            <p> Titel </p>
            <input type="text" placeholder="Skriv titel..." name="titel" id="roll">
            <p> Telefon nummer </p>
            <input type="text" placeholder="Skriv nummer..." name="telnum" id="nummer">
            <p> Email </p>
            <input type="text" placeholder="Skriv email..." name="email" id="email">
            <br>
            <br>
            <input hidden type="text" name="skola" value="Gävle">
                <input id="button" type="submit" name="change_kontakt" value="Ändra">
            </form>

        </div>

    </div>

    <div style="text-align: center; width:33.3333333%;" class="col-sm-6">
        <!-- ort namn title och telefon nummer -->
        <div style="display: inline-block;" class="lin">
            <h2>LINKÖPING</h2>
            <form action="change.php" method="post">
            <p> Namn </p>
            <input type="text" placeholder="Skriv namn..." name="namn" id="name">
            <p> Titel </p>
            <input type="text" placeholder="Skriv titel..." name="titel" id="roll">
            <p> Telefon nummer </p>
            <input type="text" placeholder="Skriv nummer..." name="telnum" id="nummer">
            <p> Email </p>
            <input type="text" placeholder="Skriv email..." name="email" id="email">
            <br>
            <br>
            <input hidden type="text" name="skola" value="Linköping">
                <input id="button" type="submit" name="change_kontakt" value="Ändra">
            </form>

        </div>

    </div>
    <div style="text-align: center; width:33.3333333%;" class="col-sm-6">
        <!-- ort namn title och telefon nummer -->
        <div style="display: inline-block;" class="norr">
            <h2>NORRKÖPING</h2>
            <form action="change.php" method="post">
            <p> Namn </p>
            <input type="text" placeholder="Skriv namn..." name="namn" id="name">
            <p> Titel </p>
            <input type="text" placeholder="Skriv titel..." name="titel" id="roll">
            <p> Telefon nummer </p>
            <input type="text" placeholder="Skriv nummer..." name="telnum" id="nummer">
            <p> Email </p>
            <input type="text" placeholder="Skriv email..." name="email" id="email">
            <br>
            <br>
            <input hidden type="text" name="skola" value="Norrköping">
                <input id="button" type="submit" name="change_kontakt" value="Ändra">
            </form>

        </div>

    </div>

</body>

</html>
