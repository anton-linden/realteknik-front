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
                                <li><a href="Lagg-Till.php">LÄGG TILL</a></li>
                                <li><a href="Ta-Bort.php">TA BORT</a></li>


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

        <div class="amnen">
            <form action="amnenAdd.php" method="post" enctype="multipart/form-data" runat="server">
                <!-- ort namn title och telefon nummer -->
                <h2>Användarnamn</h2>
                <input type="text" name="user" id="username">
                <p>Lösenord</p>
                <input type="password" name="pass" id="password">
                <br>
                <br>
                <!-- Submit button -->
                <input id="button" type="submit"></form>
        </div>

        <?php
    //session_start();
    include_once 'connect.php';

    //Skapar anslutning
    $connection = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    //Kollar anslutning
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    //Hämtar värden från formuläret i login.php
    
        $user = ($_POST['user']);
        //global $user;
        $pass = ($_POST['pass']);
        $pass2 = ($_POST['pass2']);
        $selectbox1 = ($_POST['selectbox1']);
        $selectbox2 = ($_POST['selectbox2']);
        
        //För att skydda mot mysql injection 
        $user = stripcslashes($user);
        $pass = stripcslashes($pass);
        $pass2 = stripcslashes($pass2);
        $selectbox1 = stripcslashes($selectbox1);
        $selectbox2 = stripcslashes($selectbox2);
        $user = mysqli_real_escape_string($connection, $user);
        $pass = mysqli_real_escape_string($connection, $pass);
        $pass2 = mysqli_real_escape_string($connection, $pass2);
        $selectbox1 = mysqli_real_escape_string($connection, $selectbox1);
        $selectbox2 = mysqli_real_escape_string($connection, $selectbox2);
        
        //Kollar om alla fält är ifyllda
        if (empty($user) || empty($pass) || empty($pass2)) {
            echo "Du har inte fyllt i alla fält. <br><br>";
            echo "<a href='signup.php' target='_self'>Gå tillbaka</a>";
        }
        
        //Kollar så att lösenorden stämmer överens
        else if($pass == $pass2) {
            //skapar ny användare
            $pass = md5($pass);
            $sql = "INSERT INTO anvandare(user, pass, skola, access) VALUES('$user', '$pass', '$selectbox1', '$selectbox2')";
            $connection->set_charset("utf8");
            mysqli_query($connection, $sql);
            //$_SESSION['message'] = "Användare skapad";
            //$_SESSION['user'] = $user;
            echo "Ny användare har skapats! <br><br>";
            echo "<a href='../signup.php' target='_self'>Skapa en till användare</a> <br><br>";
            echo "<a href='../index.php' target='_self'>Återvänd till adminsidan</a>";
        }

        else{
            //felmeddelande
            //$_SESSION['message'] = "Lösenorden stämmer inte överens";
            echo "Lösenorden är inte likadana <br><br>";
            echo "<a href='../signup.php' target='_self'>Försök igen</a>";
        }
    
?>
            </div>
    </body>

    </html>
