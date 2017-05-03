<!doctype html>
<html>
<head>
	<title>REAL-gymnasiets Teknikprogram</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="Css/Archer-Bold.otf" rel="" type="">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
      <link href="Css/style_a.css" rel="stylesheet" type="text/css"/>  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<?php include_once("analyticstracking.php") ?>

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
                    <li><a href="#">ÄNDRA</a></li>
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
                    <li><a href="#">LÄGG TILL</a></li>
                    <li><a href="#">TA BORT</a></li>
                    <li class="divider"></li>
                    <li><a href="#">ÄNDRA</a></li>
                </ul>
            </li>
        <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">CITAT <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">LÄGG TILL</a></li>
                    <li><a href="#">TA BORT</a></li>
                    <li class="divider"></li>
                    <li><a href="#">ÄNDRA</a></li>
                </ul>
            </li>
        <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">KONTAKT <b class="caret"></b></a>
                <ul style="min-width: 100%; letter-spacing: 2px;" class="dropdown-menu">
                    <li><a href="#">ÄNDRA</a></li>
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
          
      </ul>
        
        
        
    </div>
  </div>
</nav>
<!--Header med text-->
<div style="margin-bottom: 0px;" class="jumbotron text-center">
  <h1 style="font-family: myFirstFont;"><img alt="" src="img/teknik-rosa.png" width="60" height="60"/>&nbsp;&nbsp;&nbsp;Teknik</h1>
  <p style="font-family: myFirstFont; font-size:24px;">Gör det roligt - Lär på riktigt</p>
</div>

<!-- Container (Portfolio Section) -->
<div style="padding-top: 15px;" id="portfolio" class="container-fluid text-center bg-grey">
  <h1>Portfolio</h1><br>
  <h4>Coola och häftiga elevprojekt</h4>
  <div class="row text-center">
    <div class="col-sm-4">
      <div style="padding: 10px 0 15px 0;" class="thumbnail">
        <h2><strong>Mall-1</strong></h2>
        <img href="" src="img/paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Kort beskrvning</strong></p>
        <p>Användningsområde</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div style="padding: 10px 0 15px 0;" class="thumbnail">
        <h2><strong>Mall-2</strong></h2>    
        <img href=""src="img/newyork.jpg" alt="New York" width="400" height="300">
        <p><strong>Kort beskrvning</strong></p>
        <p>Användningsområde</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div style="padding: 10px 0 15px 0;" class="thumbnail">
        <h2><strong>Mall-3</strong></h2>  
        <img href=""src="img/sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>Kort beskrvning</strong></p>
        <p>Användningsområde</p>
      </div>
    </div>
  </div><br>
    

<!-- Add Google Maps --><!--AIzaSyCMGe9k4MP6nYMH6QelA_FvFF7mQDQhyBc-->
<script src="https://maps.googleapis.com/maps/api/js"></script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMGe9k4MP6nYMH6QelA_FvFF7mQDQhyBc&callback=initMap">
    </script>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Sidan konstruerad och byggd av elever vid det gymnasieingenjörsprogrammet på Real i Norrköping. Design by Holmes o Co</p>
</footer>



</body>
</html>


