<?php 
session_start();

if(!isset($_SESSION['loggato']) || $_SESSION['loggato'] !== true){
    header("location: /edusogno-esercizio/index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/mystyle.css">
    <title>Edusogno</title>
</head>

<body>
    <header class="ms_p30 ms_background-white ms_d_flex">
        <div><img class="ms_image" src="./assets/img/logo-black.svg" alt=""></div>
        <div class="ms_te ms_d_flex ms_flex_end ms_w_100">
            <a href="logout.php" class="ms_t-decoration ms_tc ms_link ms_mt10 ms_d_blok ms_p_tb">Logout</a>
        </div>
    </header>

    <main class="ms_mt110">
        <div class="ms_container_pg ms_pt100">
            <div class="ms_tc">
                <h1 class="ms_title ms_tc">Ciao <?php echo $_SESSION["nome"]  ?> ecco i tuoi eventi</h1>

                <div class="ms_mt40"> 

                    <?php 
                    $i = 1;
                    while ($i < count($_SESSION["row"])){ 
                    ?>

                    <div class="ms_box ms_card ms_p30 ms_background-white ms_mt10">
                        <h1> <?php echo $_SESSION["row"]["nome_evento"];  ?> </h1>
                        <div class="ms_date" > <?php echo $_SESSION["row"]["data_evento"];  ?> </div>
                        <a href="" class="ms_t-decoration ms_tc ms_link ms_mt10 ms_d_blok  ms_p_tb">ACCEDI</a>
                    </div>

                    <?php 
                    $i++;
                        } 
                    ?>

                </div>
            </div>
        </div>
    </main>
</body>

</html>