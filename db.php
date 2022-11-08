<?php 
$host="127.0.0.1";
$username="root";
$password="root";
$database="ls_login";

$connessione = new mysqli($host, $username, $password, $database);

if($connessione === false){
    die("Errore di connesiione:" . $connessione->connection_aborted);
}

echo "connessione avvenuta con successo: " . $connessione->host_info;

$connessione->close();

?>