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


                <ul class="nav navbar-nav navbar-right">

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

    <!-- här är första formen för årskurs 1 -->
    <div class="edit col-sm-6">
         <form action="change.php" method="post">
        <p>Årskurs 1</p>
        <input hidden name="id"  id="id" value="1"/>
        <p><textarea placeholder="Skriv här..." cols="40" rows="15" name="description" id="description"></textarea></p><br><br>
        <input id="button" type="submit" name="add_information1" value="Ändra"></form>

    </div>
    <!-- här är andra formen för årskurs 2 -->
    <div class="edit1 col-sm-6">
        <form action="change.php" method="post">
        <p>Årskurs 2</p>
        <input hidden name="id"  id="id" value="2"/>
        <p><textarea placeholder="Skriv här..." cols="40" rows="15" name="description" id="description"></textarea></p><br><br>
        <input id="button" type="submit" name="add_information2" value="Ändra"></form>

    </div>
    <!-- här är tredje formen för årskurs 3 -->
    <div class="edit2 col-sm-6">
        <form action="change.php" method="post">
        <p>Årskurs 3</p>
        <input hidden name="id"  id="id" value="3"/>
        <p><textarea placeholder="Skriv här..." cols="40" rows="15" name="description" id="description"></textarea></p><br><br>
        <input id="button" type="submit" name="add_information3" value="Ändra"></form>

    </div>
    <!-- här är formen för sen då? år 4 eller jobb?  -->
    <div class="edit3 col-sm-6">
        <form action="change.php" method="post">
        <p>Årkurs 4</p>
        <input hidden name="id"  id="id" value="4"/>
        <p><textarea placeholder="Skriv här..." cols="40" rows="15" name="description" id="description"></textarea></p>
        <br>
        <br>
        <input id="button" type="submit" name="add_information3" value="Ändra"></form>

    </div>

</body>

</html>
