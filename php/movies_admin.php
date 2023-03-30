<?php 
session_start(); 

if(!($_SESSION['loggedin'])) {
header('Location: ../index.php');
exit(); }

require_once 'connect.php';
?>
<!doctype html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Logowanie | My Movie Rev</title>
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
                <?php 
                if((isset($_SESSION['loggedin']))&&($_SESSION['loggedin']==true)) {
                    echo '<li><a href="movies.php">Baza</a></li>';
                    echo '<li><a href="logout.php">Wyloguj</a></li>';
                }
                else {
                    echo '<li><a href="php/index.php">Logowanie</a></li>';
                    echo '<li><a href="php/index.php">Rejestracja</a></li>';
                }
                ?> 
                <li><div class="headerClock" id="clock"> </div></li>
			</ul>
		</div>
	</div>
    <br>
    
    
    
    
    
            <!-- BRRRRRRRRR MAIN -->
    <div class="title">
		<h1>Nasza baza filmów</h1>
		<hr>
		<img class="banner" src="../images/banner2.jpg" alt="banner about">
	</div>
    
    <div class="imaged">
        <div style="text-align: center;">
            <?php 
                $connection = @new mysqli($host,$db_user,$db_password,$db_name);
                if($connection->connect_errno != 0) {
                    echo "Error: ".$connection->connect_errno;
                }
                else {
                    $sql = "SELECT * FROM movies";
                    if($result = @$connection->query($sql)) {
                        $movies = $result->num_rows;

                        if($movies>0) {
                            $movie = $result->fetch_all();
                            $result->free_result();
                        }
                        else {echo "Nie ma w bazie filmów";}
                    }
                $connection->close();
                }
            ?>
            
            <table>
                <thead>
                    <tr><th colspan="6">Łącznie wyników: <?= $movies; ?></th></tr>
                    <tr><th>ID</th><th>Nazwa</th><th>Rok powstania</th><th>Opis</th><th>Z napisami</th></tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($movie as $boy) {
                            if($boy[4]==true){$boy[4]="Tak";}
                            else{$boy[4]="Nie";}
                            echo "<tr>
                            <td>{$boy[0]}</td>
                            <td>{$boy[1]}</td>
                            <td>{$boy[2]}</td>
                            <td>{$boy[3]}</td>
                            <td>{$boy[4]}</td>";
                        }?>
                </tbody>
            </table>
            
            <form method="post">
                <br><br>
                <label for="remove">ID filmu do usunięcia: </label>
                <input type="number" name="id" placeholder="ID.." />
                <input type="submit" name="remove" value="Usuń" />
                <br><br>
            </form>
            
            <form method="post">
                <br><br>
                <label for="remove">Tytuł: </label>
                <input type="text" name="name" placeholder="Nazwa.." />
                <br><br>
                <label for="remove">Rok powstania: </label>
                <input type="number" name="year" placeholder="Rok.." />
                <br><br>
                <label for="remove">Opis: </label>
                <input type="text" name="desc" placeholder="Opis.." />
                <br><br>
                <label for="remove">Czy są napisy: </label>
                <input type="checkbox" name="sub" placeholder="Napisy.." />
                <br><br>
                <input type="submit" name="add" value="Dodaj" />
                <br><br>
            </form>
            
            </div>
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
<?php 
if(isset($_POST['remove'])) {
    $connection = @new mysqli($host,$db_user,$db_password,$db_name);
    if($connection->connect_errno != 0) {
        echo "Error: ".$connection->connect_errno;
    }
    else {
        $id = $_POST['id'];
        $sql = "DELETE FROM `movies` WHERE `id` = '$id'";
        if($result = @$connection->query($sql)) {
            $movies = $result->num_rows;
            if($movies>0) {
                echo "Coś poszło nie tak";
                $result->free_result();
            }
            else {echo "Film usunięty";}
        }
    $connection->close();
    }
    
}

if(isset($_POST['add'])) {
    $connection = @new mysqli($host,$db_user,$db_password,$db_name);
    if($connection->connect_errno != 0) {
        echo "Error: ".$connection->connect_errno;
    }
    else {
        $name = $_POST['name'];
        $year = $_POST['year'];
        $description = $_POST['desc'];
        $sub = $_POST['sub'];
        
        $sql = "INSERT INTO `movies`(`id`, `name`, `year`, `description`, `sub`, `rezyser`) VALUES ('NULL','$name','$year','$description','$sub','NULL')";
        if($result = @$connection->query($sql)) {
            $movies = $result->num_rows;
            
            if($movies>0) {
                $result->free_result();
            }
            else {echo "Coś nie teges";}
        }
    $connection->close();
    }
}
?>