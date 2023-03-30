<?php session_start(); 
if((isset($_SESSION['loggedin']))&&($_SESSION['loggedin']==true)) {
    header('Location: ../index.php');
    exit();}
?>
<!doctype html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Rejestracja | My Movie Rev</title>
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
	<link href="../css/indexphppg.css" rel="stylesheet" type="text/css">
	<link href="../css/footer.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../js/clock.js"></script>
</head>

<body onload="startTime()">
	<div class="header">
 		<h3>My Movie Rev</h3>
		<div class="header-right">
			<ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../contact.html">Contact</a></li>
                <li><a class="active" href="../about.html">About</a></li>
                <li><a href="../php/index.php">Logowanie</a></li>
                <li><a href="../php/index_register.php">Rejestracja</a></li>
                <li><div class="headerClock" id="clock"> </div></li>
			</ul>
		</div>
	</div>
    <br>
    
    
    
    
    
            <!-- BRRRRRRRRR MAIN -->
	<div class="title">
		<h1>Logowanie</h1>
        
		<p>Zaloguj się aby korzystać z funkcji strony</p>
	</div>
    
    <div class="imaged">
        <form action="register.php" method="post">
            <label for="login">Login: </label>
            <input type="text" name="login" placeholder="Twój login.." />
            <br><br>
            <label for="passwd">Hasło: </label>
            <input type="password" name="passwd" placeholder="Twoje hasło.." />
            <br><br>
            <label for="emial">E-mail: </label>
            <input type="email" name="email" placeholder="Twój E-mail.." />
            <br><br>
            <label for="emial">Imie: </label>
            <input type="text" name="imie" placeholder="Twoje Imie.." />
            <br>
            <label>(Nie obowiązkowe)</label>
            <br><br>
            <label for="emial">Nazwisko: </label>
            <input type="text" name="nazwisko" placeholder="Twoje Nazwisko.." />
            <br>
            <label>(Nie obowiązkowe)</label>
            <br><br>
            <label>
                <input type="checkbox" name="" /> Akceptuję regulamin
            </label>
            <br><br>
            <input type="submit" name="log_in" value="Rejestruj" />
            <br><br>
            <p style="color:red; font-size: 30px;">
            <?php 
                if(isset($_SESSION['error']))
                    echo $_SESSION['error'];
            ?>
            </p>
        </form>
        
        <img src="../images/ourstory.jpg" alt="our story">
        <p class="paratwo"></p>
    </div>
    
    
    
    
    
    
            <!-- BRRRRRRRRR STOPKI -->
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
</body>
</html>