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
    <div class="collapse navbar-collapse" id="myNavbar" style="font-family: myFirstFont;">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">OM</a></li>
        <li><a href="#amnen">ÄMNEN</a></li>
        <li><a href="#portfolio">COOLA PROJEKT</a></li>
        <li><a href="#pricing">ANSÖK</a></li>
        <li><a href="#contact">KONTAKT</a></li>
        <li><a href="login.php">ADMIN</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--Header med text-->
<div class="jumbotron text-center">
  <h1 style="font-family: myFirstFont;"><img alt="" src="img/teknik-rosa.png" width="60" height="60"/>&nbsp;&nbsp;&nbsp;Teknik</h1>
  <p style="font-family: myFirstFont; font-size:24px;">Gör det roligt - Lär på riktigt</p>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Realgymnasiets teknikprogram</h2><br>
      <h4>Skapa och utveckla framtidens teknik</h4>
      <p>Teknik är utbildningen för dig som är nyfiken, vetgirig och gärna studerar vidare efter gymnasiet. Här uppmuntras du till att skapa framtidens teknik. Du jobbar kreativt och digitalt med prototyper och design, i projekt, hela vägen från idé till färdig produkt. Här får du utvecklas inom spel- och webbutveckling, gränssnittsdesign och 3D, samtidigt som du får en riktigt bra grund för vidare studier på teknisk högskola eller universitet.<br> Läs mer om varje år i kursen här under genom at klicka År 1, År 2 osv.</p><br>
      
 <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        År 1</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">Ditt första år handlar om att du ska lära känna teknikområdet och utveckla kunskaper inom det. Mycket handlar om att du lär dig verktyg som du har nytta av i utbildningen och senare i arbetslivet. Exempel på program du lär dig är Adobe CC, Autodesk, Microsoft university och Unity 3D pro.
Matematiken och fysiken lägger grunden för dina kommande år. Du och dina klasskamrater jobbar med olika uppdrag där ni själva uppfinner och ta fram nya spännande produkter. Under processen lär du dig hur det går till när en ny produkt utvecklas, från idé och hela vägen till slutprodukt.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        År 2</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">Under andra året består mycket av din utbildning av IT samt matematik och fysik, kunskaper som är en förutsättning för allt arbete inom teknikområdet. Nu börjar du även använda verktygen du lärde dig i ettan på ett djupare plan, och breddar därmed dina kunskaper.
En viktig del av studierna handlar om att arbeta med projekt. Du lär dig därför att jobba i projektform, både enskilt och tillsammans med andra.
Eftersom många av projekten är knutna till företag får du utveckla de egenskaper som krävs när du kommer ut i arbetslivet.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        År 3</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">Under ditt sista år färgas din utbildning av vilken profil du väljer. Du kan välja mellan två spår.  Antingen att få en gedigen grund inom matematik, fysik och kemi och studera fler teoretiska ämnen. Eller så väljer du ett litet mer praktiskt spår. Då fortsätter du att utveckla dina kompetenser inom digitalt skapande och gränssnittsdesign.
I ditt gymnasiearbete fördjupar du dig ytterligare inom ett område som intresserar dig. Nu får du använda de kunskaper och kompetenser du utvecklat under tre år, i ett skarpt projekt kopplat till exempelvis ett företag.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        Sen då? År 4 eller jobb?</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">Gymnasieingenjör med profilen Informationsteknik mjukvarudesign är en ettårig påbyggnadsutbildning för dig som har läst Teknik på gymnasiet. När du har avslutat studierna är du gymnasieingenjör, en titel som efterfrågas av näringslivet.
Det fjärde teknikåret innefattar mjukvarudesign, gränssnittsdesign, programmering, mobila appar och webbteknik, samt att du kommer att göra ett examensarbete. Du kommer också att spendera en hel del tid ute hos våra samarbetsföretag där du tränar på att jobba i skarpa projekt.<br><br>
Eller också kan du jobba som:<br>
Spel- och webbutvecklare, Programmerare.<br><br>

Eller efter vidare studier kan du jobba som:<br>

Apputvecklare, Gränssnittsdesigner, Systemvetare, Spelutvecklare, Civilingenjör, Högskoleingenjör.
</div>
    </div>
  </div>
</div>
      
      
      <br><a href="#contact" title="Kontakt"><button class="btn btn-default btn-lg">Kontakt</button></a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Vad får du som elev?</h2><br>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<!-- Container (Ämnen Section) -->
<div id="amnen" class="container-fluid text-center">
  <h2>Ämnen & Inriktningar</h2>
  <h4>Gör det roligt - Lär på riktigt.</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-superscript logo-small"></span>
      <h4>Matematik</h4>
        <p> Obligatoriska: Matematik 1c, 2c, 3c. Möjliga tillval: Matematik 4, 5 och Matematik - Specialisering. </p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4>Teknikämnen</h4>
        <p> Obligatoriska: Teknik 1. Möjliga tillval: Teknik 2, Teknik - Specialisering. </p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-menu-left logo-small"></span><span class="glyphicon glyphicon-menu-right logo-small"></span>
      <h4>Web & Programmering</h4>
        <p> Obligatoriska: Programmering 1, Webbutveckling 1, Dator- och nätverksteknik. Möjliga tillval: Programmering 2, Webbutveckling 2, Webbserverprogrammering 1. </p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-dashboard logo-small"></span>
      <h4>Fysik</h4>
        <p> Obligatoriska: Fysik 1a, Kemi 1. Möjliga tillval: Fysik 2, Kemi 2. </p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo-small"></span>
      <h4>Språk</h4>
        <p> Obligatoriska: Engelska 5 och 6. Svenska 1, 2 och 3. Möjliga tillval: Engelska 7. </p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-link logo-small"></span>
      <h4 style="color:#303030;">Entreprenörskap</h4>
        <p> Obligatoriska: Entreprenörskap. Möjliga tillval: Entreprenörskap och Företagande. </p>
    </div>
  </div>
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

<!-- Container (Orter i Sverige) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Hur kan jag söka till teknikprogrammet på Real,</h2>
    <h4>och vad kan jag göra sen?</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>GÄVLE</h3>
        </div>
        <div class="panel-body">
          <p>textextextext</p>
          <p>textextextext</p>
          <p>textextextext</p>
          <p>textextextext</p>
          <p>textextextext</p>
        </div>
        <div class="panel-footer">
          <h3>Kontakt</h3>
          <h4>för mer frågor</h4>
          <button class="btn btn-lg">Fråga</button>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>LINKÖPING</h3>
        </div>
        <div class="panel-body">
          <p>textextextext</p>
          <p>textextextext</p>
          <p>textextextext</p>
          <p>textextextext</p>
          <p>textextextext</p>
        </div>
        <div class="panel-footer">
          <h3>Kontakt</h3>
          <h4>för mer frågor</h4>
          <button class="btn btn-lg">Fråga</button>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3>NORRKÖPING</h3>
        </div>
        <div class="panel-body">
          <p>textextextext</p>
          <p>textextextext</p>
          <p>textextextext</p>
          <p>textextextext</p>
          <p>textextextext</p>
        </div>
        <div class="panel-footer">
          <h3>Kontakt</h3>
          <h4>för mer frågor</h4>
          <button class="btn btn-lg">Fråga</button>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center">
    <h2>Vad kan jag göra efter tre år på teknikprogrammet?</h2>
    <h4>Börja jobba - Plugga vidare</h4>
  </div>
</div>

<!-- Container (Kontakt Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">KONTAKT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Kontakta oss via formuläret och svarar dig inom 24 timmar eller ring.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Realgymnasiet i Gävle. 
      <span class="glyphicon glyphicon-phone"></span> 0150-151515</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Realgymnasiet i Linköping.
      <span class="glyphicon glyphicon-phone"></span> 0150- 151515</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Realgymnasiet i Norrköping.
      <span class="glyphicon glyphicon-phone"></span> 0150- 151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@realgymnasiet.se</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Namn" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Epost" type="email" required>
        </div>
        <!--div class="col-sm-6 form-group">
          <input class="form-control" id="skola" name="skola" placeholder="Skola som jag är intresserad av:" type="text" required>
        </div-->
        <div class="col-sm-6 form-group">
        <select class="form-control" id="skola" name="skola">
          <option value="Gävle">Ort jag är intresserad av: &nbsp;&nbsp;Gävle</option>
          <option value="Linköping">Ort jag är intresserad av: &nbsp;&nbsp;Linköping</option>
          <option value="Norrköping">Ort jag är intresserad av: &nbsp;&nbsp;Norrköping</option>
  
</select></div>
        
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Fråga eller kommentar" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Skicka</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="map" style="height:400px;width:100%;"></div>
<script>
      function initMap() {
        var norrk = 
			{lat: 58.58886949999999, lng: 16.177890700000034};
		var gavle =
			{lat: 60.67560899999999, lng: 17.14703600000007};
		var linkoping =
			{lat: 58.41793379999999, lng: 15.616758000000004};
		var centrum =
			{lat: 59.32932349999999, lng: 18.068580800000063};
		
		
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: centrum
        });
        var marker = new google.maps.Marker({
          position: norrk,
          map: map
        });
		var marker = new google.maps.Marker({
          position: gavle,
          map: map
        });
		var marker = new google.maps.Marker({
          position: linkoping,
          map: map
        });
      }
    </script>
    

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


