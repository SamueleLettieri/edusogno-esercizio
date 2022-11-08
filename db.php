<?php 
$host="127.0.0.1";
$username="root";
$password="root";
$database="ls_login";

$connessione = new mysqli($host, $username, $password, $database);

if($connessione === false){
    die("Errore di connesiione:" . $connessione->connection_aborted);
}

$sql = "CREATE TABLE IF NOT EXISTS utenti (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(45),
    cognome varchar(45),
    email varchar(255),
    password varchar(255),
    PRIMARY KEY (id)
)";

$sql = "CREATE TABLE IF NOT EXISTS eventi (
    id int NOT NULL AUTO_INCREMENT,
    attendees text,
    nome_evento varchar(255),
    data_evento datetime,
    PRIMARY KEY (id)
)";

$sql = " INSERT INTO eventi (`attendees`, `nome_evento`, `data_evento`) VALUES 
('ulysses200915@varen8.com,qmonkey14@falixiao.com,mavbafpcmq@hitbase.net','Test Edusogno 1', '2022-10-13 14:00'), 
('dgipolga@edume.me,qmonkey14@falixiao.com,mavbafpcmq@hitbase.net','Test Edusogno 2', '2022-10-15 19:00'), 
('dgipolga@edume.me,ulysses200915@varen8.com,mavbafpcmq@hitbase.net','Test Edusogno 2', '2022-10-15 19:00')";

if($connessione->query($sql) === true){
    echo "Tabbella creata con successo!";
}else{
    echo "Errore durante creazione tabella" . $connessione->error;
}

$connessione->close();

?>