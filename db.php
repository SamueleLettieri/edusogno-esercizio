<?php 
require __DIR__ .  '/datiDB.php' ;
$host="127.0.0.1";
$username="root";
$password = $passwordDB ;
$database="ls_login";

$connessione = new mysqli($host, $username, $password, $database);

if($connessione === false){
    die("Errore di connesiione:" . $connessione->error);
}


/* $sql = "CREATE TABLE IF NOT EXISTS utenti (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(45),
    cognome varchar(45),
    email varchar(255) UNIQUE,
    password varchar(255) UNIQUE,
    PRIMARY KEY (id)
)";

 $sql = "CREATE TABLE IF NOT EXISTS eventi (
    id int NOT NULL AUTO_INCREMENT,
    attendees text,
    nome_evento varchar(255),
    data_evento datetime,
    PRIMARY KEY (id)
)"; */

/*$sql = " INSERT INTO eventi (`attendees`, `nome_evento`, `data_evento`) VALUES 
('ulysses200915@varen8.com,qmonkey14@falixiao.com,mavbafpcmq@hitbase.net','Test Edusogno 1', '2022-10-13 14:00'), 
('dgipolga@edume.me,qmonkey14@falixiao.com,mavbafpcmq@hitbase.net','Test Edusogno 2', '2022-10-15 19:00'), 
('dgipolga@edume.me,ulysses200915@varen8.com,mavbafpcmq@hitbase.net','Test Edusogno 2', '2022-10-15 19:00')";  */ 

$sql = " INSERT INTO utenti (`nome`, `cognome`, `email`, `password`) VALUES 
(?, ?, ?, ?)";


if($statement = $connessione->prepare($sql)){
    $statement->bind_param("ssss", $nome, $cognome, $email, $password);

    $nome =$_REQUEST['nome'];
    $cognome = $_REQUEST['cognome'];
    $email = $_REQUEST['email'];
    $password = md5($_REQUEST['password']);
    $statement->execute();

    header("location: /edusogno-esercizio/index.php");

}else{
    echo "Errore: non è possibile inserire la query: $sql," . $connessione->error;
}

$statement->close();  

$connessione->close();

?>