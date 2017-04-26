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
<div style="margin-bottom: 30px;" class="jumbotron text-center">
  <h1 style="font-family: myFirstFont;"><img alt="" src="img/teknik-rosa.png" width="60" height="60"/>&nbsp;&nbsp;&nbsp;Teknik</h1>
  <p style="font-family: myFirstFont; font-size:24px;">Gör det roligt - Lär på riktigt</p>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>Coola och häftiga elevprojekt</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris i 3D</strong></p>
        <p>Vi byggde hela Paris i 3D.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/newyork.jpg" alt="New York" width="400" height="300">
        <p><strong>Flyg över New York</strong></p>
        <p>Besök New York i HTC Vive.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>Bygg en bro</strong></p>
        <p>Bygg en bro med Mecano.</p>
      </div>
    </div>
  </div><br>
  
  <h2>Vad tycker våra elever?</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper för slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Bästa skolan och bästa programmet. Skrattar och lär varje dag!"<br><span style="font-style:normal;">Mikael Ronestam, elev i Norrköping</span></h4>
      </div>
      <div class="item">
        <h4>"Ett ord... GRYMT!!"<br><span style="font-style:normal;">Erika Larsson, elev i Gävle</span></h4>
      </div>
      <div class="item">
        <h4>"Jag lär mig och har kul samtidigt."<br><span style="font-style:normal;">Erik Larsson, elev i Linköping</span></h4>
      </div>
    </div>

    <!--Vänster och höger controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    

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

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>


