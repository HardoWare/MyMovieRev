<?php session_start(); ?>
<!doctype html>
<html lang="pl">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width-device-width, initial-scale=1">
  <title>My Movie Rev</title>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  </head>
  <body onload="startTime()">

    <div class="header">
      <h3>My Movie Rev</h3>
     <div class="header-right">
       <ul>
        <li><a class="active" href="index.php">Home</a>  </li>&nbsp;&nbsp;
        <li><a href="contact.html">Contact</a></li>
        <li><a href="about.html">About</a></li>
        <?php 
        if((isset($_SESSION['loggedin']))&&($_SESSION['loggedin']==true)) {
            echo '<li><a href="php/movies.php">Baza</a></li>';
            echo '<li><a href="php/logout.php">Wyloguj</a></li>';
        }
        else {
            echo '<li><a href="php/index.php">Logowanie</a></li>';
            echo '<li><a href="php/index_register.php">Rejestracja</a></li>';
        }
        ?> 
        <li><div class="headerClock" id="clock"> </div></li>
       </ul>
     </div>
   </div>

  <div class="align">
  <div class="single-item">
    <div>
	  <img src="images/1.jpg" alt="egzorcysta">
      <div class="mytitle"><a href="movie1.html">egzorcysta  <i>(2017)</i></a></div>
	 <div class="btn-trailer"><a href="https://www.youtube.com/watch?v=Dc6uuAH1S5A" target="_blank">zobacz trailer</a></div>
    </div>
    <div>
	  <img src="images/2.jpg" alt="shrek">
      <div class="mytitle"><a href="movie2.html">shrek  <i>(2001)</i></a></div>
	<div class="btn-trailer"><a href="https://www.youtube.com/watch?v=seUURVsRCD4" target="_blank">zobacz trailer</a></div>
    </div>
    <div>
	  <img src="images/3.jpg" alt="avengers">
      <div class="mytitle"><a href="movie3.html">The Avengers: Infinity War  <i>(2018)</i></a></div>
	<div class="btn-trailer"><a href="https://www.youtube.com/watch?v=DjNQq0iXJYY" target="_blank">zobacz trailer</a></div> 
    </div>
    <div>
	  <img src="images/4.jpg" alt="godfather">
      <div class="mytitle"><a href="movie4.html">The Godfather  <i>(1972)</i></a></div>
	<div class="btn-trailer"><a href="https://www.youtube.com/watch?v=sY1S34973zA" target="_blank">zobacz trailer</a></div>
    </div>
    <div>
	  <img src="images/5.jpg" alt="pirates of caribbean">
      <div class="mytitle"><a href="movie5.html">Lord of the Rings  <i>(2001)</i></a></div>
	<div class="btn-trailer"><a href="https://www.youtube.com/watch?v=V75dMMIW2B4" target="_blank">zobacz trailer</a></div>
    </div>
  </div></div>

	  <div class="movie-list">
		  
		  <h3>Latest Movies</h3>
	  	<div class="movie-img-container">
    		<img src="images/latest1.jpg" alt="l movie 1"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt0816692/" target="_blank">View On IMDB</a>
          </div>
		  <div class="movie-img-container">
    		<img src="images/latest2.jpg" alt="l movie 2"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt0110912/" target="_blank">View On IMDB</a>
		</div>
		  <div class="movie-img-container">
    		<img src="images/latest3.jpg" alt="l movie 3"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt7286456/" target="_blank">View On IMDB</a>
		</div>
		  <div class="movie-img-container">
    		<img src="images/latest4.jpg" alt="l movie 4"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt3460252/" target="_blank">View On IMDB</a>
		</div>
		  
	  </div>
	  
	  <div class="movie-list">
		  
		  <h3>Trending Series</h3>
	  	<div class="movie-img-container">
    		<img src="images/trend1.jpg" alt="t movie 1"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt0290988/" target="_blank">View On IMDB</a>
		</div>
		  <div class="movie-img-container">
    		<img src="images/trend2.jpg" alt="t movie 2"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt2261227/" target="_blank">View On IMDB</a>
		</div>
		  <div class="movie-img-container">
    		<img src="images/trend3.jpg" alt="t movie 3"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt0903747/" target="_blank">View On IMDB</a>
		</div>
		  <div class="movie-img-container">
    		<img src="images/trend4.jpg" alt="t movie 4"/>
    		<a class="spbutton" href="https://www.imdb.com/title/tt2467372/" target="_blank">View On IMDB</a>
		</div>
		 
		  
	  </div>
      
  <footer class="footer-distributed">
 
		<div class="footer-left">
		<h3>My Move <span>Rev</span></h3>
		<p class="footer-links">
		<a href="index.html">Home</a> |
		<a href="about.html">About</a> |
		<a href="contact.html">Contact</a>
		</p>
		</div>
 
		<div class="footer-center">
		<div>
		<i class="fa fa-map-marker"></i>
		<p><span>Politechnika Opolska</span> Opole, Polska</p>
		</div>
 
		<div>
		<i class="fa fa-phone"></i>
		<p>+49 123 123 123</p>
		</div>
 
		<div>
		<i class="fa fa-envelope"></i>
		<p><a href="mailto:contact@fantasycinema.com">contact@mymovierev.com</a></p>
		</div>
		</div>
 
		<div class="footer-right">
            
		<p class="footer-company-about">
		<span>O nas</span>
            My Move Rev to strona stworzona na potrzebę zalinienia technologii internetowych, oferująca przeglądanie starszych oraz najnowszych filmów i seriali.
		</p>
 
		<div class="footer-icons">
		<a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
		<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
		</div>
		</div>
    </footer>
    
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="js/slick.min.js"></script>
  <script type="text/javascript" src="js/clock.js"></script>
  <script type="text/javascript">
    $('.single-item').slick({
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 5000,
      fade: true,
  });
  </script>
      
  </body>
  </html>