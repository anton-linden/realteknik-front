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
      <link href="Css/style_a.css" rel="stylesheet" type="text/css"/>  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<?php include_once("analyticstracking.php") ?>
    
    <!-- Background Image -->
<div class="bg-img"><img class="img-responsive" src="img/Norrkoping.jpg">

<!--NavBar-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a href="index.php#myPage" class="navbar-brand" href="#myPage" style="font-family:myFirstFont;">REAL - TEKNIK</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="font-family: myFirstFont;">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php#about">OM</a></li>
        <li><a href="index.php#amnen">ÄMNEN</a></li>
        <li><a href="index.php#portfolio">COOLA PROJEKT</a></li>
        <li><a href="index.php#pricing">ANSÖK</a></li>
        <li><a href="index.php#contact">KONTAKT</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--Header med text-->
<div class="jumbotron text-center">
    <img style="max-width: 100%; display: block;" src= "http://eunivercitiesnetwork.com/wp-content/uploads/2013/05/det-goda-livet-071_2008_hans-eklundh.jpg">
      <p id="stad-text" style="font-family:myFirstFont; font-size: 64px">REAL - TEKNIK</p>
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


