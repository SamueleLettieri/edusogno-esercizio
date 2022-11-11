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

$sql = "SELECT * FROM  eventi";

if($result = $connessione->query($sql)){
    if($result->num_rows > 0){
        $row = $result->fetch_array(MYSQLI_ASSOC);


        
        session_start();
        $_SESSION["row"] = $row; 

        @var_dump( $_SESSION["row"]);
        
        
        header("location: /edusogno-esercizio/personalPage.php");   
    }else{
        echo "non ci sono eventi";
    }
}else{
    echo "errore in fase di caricamento";
}    

$connessione->close();

?>