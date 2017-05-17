<?php
    include('../session.php');
    include_once '../connect.php';
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
                </div>
            </div>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <div class="edit1 col-sm-6">
            <form action="projektAdd.php" method="post" enctype="multipart/form-data" runat="server">
                <p>Rubrik:</p><input type="text" name="rubrik"><br><br>
                <p>Liten Rubrik:</p><input type="text" name="Minirubrik"><br><br>
                <p>Bild:</p>

                <input type="file" name="upload"><br>
                <p>Bild text:</p> <input type="text" name="bNamn"><br>
                <p>Brödtext:</p>
                <p><textarea placeholder="Skriv här..." cols="25" rows="5" name="description" id="description"></textarea></p>
                <br>
                <p>Bild2:</p>

                <input type="file" name="upload"><br>
                <p>Bild text2:</p> <input type="text" name="bNamn"><br>
                <p>Brödtext2:</p>
                <p><textarea placeholder="Skriv här..." cols="25" rows="5" name="description" id="description"></textarea></p>
                <br>
                <button type="submit">Spara</button>

            </form>
        </div>
        <div class="edit2 col-sm-6">
            <form action="projektAdd.php" method="post" enctype="multipart/form-data" runat="server">
                <p>Rubrik:</p><input type="text" name="rubrik"><br><br>
                <p>Liten Rubrik:</p><input type="text" name="Minirubrik"><br><br>
                <p>Bild:</p>

                <input type="file" name="upload"><br>
                <p>Bild text:</p> <input type="text" name="bNamn"><br>
                <p>Brödtext:</p>
                <p><textarea placeholder="Skriv här..." cols="25" rows="5" name="description" id="description"></textarea></p>
                <br>
                <p>Bild2:</p>

                <input type="file" name="upload"><br>
                <p>Bild text2:</p> <input type="text" name="bNamn"><br>
                <p>Brödtext2:</p>
                <p><textarea placeholder="Skriv här..." cols="25" rows="5" name="description" id="description"></textarea></p>
                <br>
                <button type="submit">Spara</button>

            </form>
        </div>
        <div class="edit3 col-sm-6">
            <form action="projektAdd.php" method="post" enctype="multipart/form-data" runat="server">
                <p>Rubrik:</p><input type="text" name="rubrik"><br><br>
                <p>Liten Rubrik:</p><input type="text" name="Minirubrik"><br><br>
                <p>Bild:</p>

                <input type="file" name="upload"><br>
                <p>Bild text:</p> <input type="text" name="bNamn"><br>
                <p>Brödtext:</p>
                <p><textarea placeholder="Skriv här..." cols="25" rows="5" name="description" id="description"></textarea></p>
                <br>
                <p>Bild2:</p>

                <input type="file" name="upload"><br>
                <p>Bild text2:</p> <input type="text" name="bNamn"><br>
                <p>Brödtext2:</p>
                <p><textarea placeholder="Skriv här..." cols="25" rows="5" name="description" id="description"></textarea></p>
                <br>
                <button type="submit">Spara</button>

            </form>
        </div>

    </body>

    </html>
