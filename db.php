<?php 
require __DIR__ .  '/datiDB.php' ;
$host="127.0.0.1";
$username="root";
$password = $passwordDB ;
$database="ls_login";

/* connessione al DB */
$connessione = new mysqli($host, $username, $password, $database);

if($connessione === false){
    die("Errore di connesiione:" . $connessione->error);
}

/* Inserimento di tabbelle e dati nel DB */

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


if($_SERVER["REQUEST_METHOD"] === "POST"){


    $nome = htmlentities($_POST['nome'], ENT_HTML5);
    $cognome =  htmlentities($_POST['cognome'], ENT_HTML5);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $button =$_POST['button'];

    $nomeCount = strlen($nome);
    $cognomeCount = strlen($cognome);
    if(isset($button)){
        if($nomeCount < 5 ){
            $nomeCeck = $nome;
        }else{
            $erroreNome = "il nome non puo contenere piu si 45 caratteri";

            $_SESSION["erroreNome"] = $erroreNome;
        };

        if($cognomeCount > 45 ){
            $cognomeCeck = $cognome;
        }else{
            $erroreCognome = "il cognome non puo contenere piu si 45 caratteri";

            $_SESSION["erroreCognome"] = $erroreCognome;
        };
    }

    
        

    $sql = " INSERT INTO utenti (`nome`, `cognome`, `email`, `password`) VALUES 
    (?, ?, ?, ?)";
    if($statement = $connessione->prepare($sql)){
        $statement->bind_param("ssss", $nomececk, $cognome, $email, $password);

        $nomececk;
        $cognomececk;

        /* $statement->execute(); */

        header("location: /edusogno-esercizio/register.php"); 

    }else{
        echo "Errore: non è possibile inserire la query: $sql," . $connessione->error;
    }
}

$statement->close();  

$connessione->close();

?>