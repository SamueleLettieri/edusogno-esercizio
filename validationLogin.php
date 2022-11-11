<?php 
require  __DIR__ .  '/datiDB.php' ;
$host="127.0.0.1";
$username="root";
$password = $passwordDB ;
$database="ls_login";

/* connessione al DB */
$connessione = new mysqli($host, $username, $password, $database);

if($connessione === false){
    die("Errore di connesiione:" . $connessione->error);
}

/* Login */
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $sql = "SELECT * FROM  utenti WHERE email = '$email'";

    if($result = $connessione->query($sql)){
        if($result->num_rows == 1){
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(password_verify($password, $row['password'])){
                session_start();

                $_SESSION['loggato'] = true;
                $_SESSION['nome'] = $row['nome'];
                header("location: /edusogno-esercizio/personalPage.php");
            }else{
                echo "la password non è corretta";
            }
        }else{
            echo "non ci sono account";
        }
    }else{
        echo "errore in fase di login";
    }    
}

$connessione->close();

?>