<?php
session_start();

if((!isset($_POST['login']) || !isset($_POST['passwd']))){
    header('Location: index.php');
    exit();
}

require_once "connect.php";

$connection = @new mysqli($host,$db_user,$db_password,$db_name);

if($connection->connect_errno != 0) {
    echo "Error: ".$connection->connect_errno;
}
else{
    $login = $_POST['login'];
    $passwd = $_POST['passwd'];
    $email = $_POST['email'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    
    $login = htmlentities($login, ENT_QUOTES, "UTF-8");
    $passwd = htmlentities($passwd, ENT_QUOTES, "UTF-8");
    
    $sql = "INSERT INTO `users`(`id`, `user`, `passwd`, `email`, `imie`, `nazwisko`, `admin`) VALUE 
    ('NULL','$login','$passwd','$email','$imie','$nazwisko','0')";
    
    
    
    if($result = @$connection->query($sql)) {
        $users_num = $result->num_rows;
        
        if($users_num>0) {
            $_SESSION['loggedin'] = true;
            
            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            $_SESSION['user'] = $row['user'];
            $_SESSION['passwd'] = $row['passwd'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['imie'] = $row['imie'];
            $_SESSION['nazwisko'] = $row['nazwisko'];
            
            $_SESSION['id'];
            $_SESSION['user'];
            $_SESSION['passwd'];
            $_SESSION['email'];
            $_SESSION['imie'];
            echo '$_SESSION['nazwisko']';
            
            
            unset($_SESSION['error']);
            $result->free_result();
            header('Location: index.php');
        }
        else {
            $_SESSION['error'] = "Nie prawidłowe dane wejściowe";
            header('Location: index.php');
        }
    }
    $connection->close();
}
?>