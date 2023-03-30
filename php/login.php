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
    
    $login = htmlentities($login, ENT_QUOTES, "UTF-8");
    $passwd = htmlentities($passwd, ENT_QUOTES, "UTF-8");
    
    $sql = "SELECT * FROM `users` WHERE `user` = '$login' AND `passwd` = '$passwd'";
    
    if($result = @$connection->query($sql)) {
        $users_num = $result->num_rows;
        
        if($users_num>0) {
            $_SESSION['loggedin'] = true;
            
            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            $_SESSION['user'] = $row['user'];
            $_SESSION['admin'] = $row['admin'];
            
            unset($_SESSION['error']);
            $result->free_result();
            header('Location: index.php');
        }
        else {
            $_SESSION['error'] = "Nie prawidłowy login lub hasło";
            header('Location: index.php');
        }
    }
    $connection->close();
}
?>