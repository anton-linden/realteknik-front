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

<div class="jumbotron text-center">
  <h1 style="font-family: myFirstFont;">"Projek-Namn"</h1>
  <p style="font-family: myFirstFont; font-size:24px;">"Elevernas-Namn"</p>
</div>

<div style="padding: 60px 50px;" id="about" class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2>Liten Projekt Beskrivning</h2><br>
            <h4>Projektets Syfte</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at iaculis nibh. Mauris ornare metus ac enim consequat sollicitudin. Aenean pretium molestie dui, vel ultrices ipsum dictum non. Donec congue sapien eget vehicula maximus. Integer at risus nec nunc mattis volutpat non et urna. Vivamus vitae mollis massa, ut aliquam arcu. Nam vel neque varius, viverra lorem sit amet, gravida odio. Nulla varius nisi sit amet dui venenatis, quis pulvinar orci convallis. Suspendisse pretium orci id nunc gravida tincidunt. Pellentesque ornare ut elit et sodales. Maecenas scelerisque viverra enim vel dignissim. Duis mollis pretium dui, a molestie libero convallis vitae. Aliquam pharetra eu nibh quis consectetur. <br> <br>

            Nam id mi gravida, laoreet metus congue, pharetra nulla. Ut porta tempus diam consequat vehicula. Ut ac eros quam. Integer metus risus, lacinia id tortor eu, cursus bibendum ex. Mauris eget lacus quis eros ultricies tristique quis vel lacus. Proin sed laoreet leo, quis gravida nibh. Proin in metus mattis, maximus nisi nec, accumsan magna.</p><br>
        </div>
        <div class="col-sm-4">
            <img style="width:100%;" src="https://vignette4.wikia.nocookie.net/joke-battles/images/5/5a/Black.jpg/revision/latest?cb=20161223050425"/>
            <h2 style="top:130px; right:200px; position:absolute; color:white;">EN BILD / VidEO</h2>

        </div>
        
    </div>
</div>
    


<div style="padding: 60px 50px;" class="container-fluid bg-grey">
    <div class="row">
        <div class="col-sm-4">
          <img style="width: 100%;" src="http://www.solidbackgrounds.com/images/2560x1440/2560x1440-black-solid-color-background.jpg">
            <h2 style="top:130px; right:200px; position:absolute; color:white;">EN BILD / VidEO</h2>
        </div>
        <div class="col-sm-8">
              <h2>Elevenas upplevelse </h2><br>
              <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
              <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
</div>

    
    
    
    <!--
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
    -->
    
</body>
</html>
