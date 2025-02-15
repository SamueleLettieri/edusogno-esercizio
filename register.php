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
    <header class="ms_p30 ms_background-white">
        <div class=""><img class="ms_image" src="./assets/img/logo-black.svg" alt=""></div>
    </header>

    <main class="ms_mt110">
        <div class="ms_container ms_pt100">
            <div>
                <h1 class="ms_title ms_tc">Crea il tuo account</h1>

                <div class="ms_box ms_p30 ms_background-white ms_mt40">
                    <form action="db.php" method="POST" id="register-form">
                    <div class="ms_mt40">
                            <label for="nome" class="ms_d_blok ms_w_100">Inserisci il nome</label>
                            <input type="text" name="nome" id="nome" class="ms_mt10 ms_w_100 ms_p_tb" placeholder="Mario" required maxlength="45">
                            <small>Max: 45 caratteri</small>
                        </div>
                        <div class="ms_mt40">
                            <label for="cognome" class="ms_d_blok ms_w_100">Inserisci il cognome</label>
                            <input type="text" name="cognome" id="cognome" class="ms_mt10 ms_w_100 ms_p_tb" placeholder="Rossi" required maxlength="45">
                            <small>Max: 45 caratteri</small>
                        </div>
                        <div class="ms_mt40">
                            <label for="email" class="ms_d_blok ms_w_100">Inserisci l'e-mail</label>
                            <input type="email" name="email" id="email" class="ms_mt10 ms_w_100 ms_p_tb" placeholder="name@example.com" maxlength="255" required autocomplete="email">
                            <small>Max: 255 caratteri</small>
                        </div>
                        <div class="ms_mt40">
                            <label for="password" class="ms_d_blok ms_w_100">Inserisci la password</label>
                            <input type="password" name="password" id="password" class="ms_mt10 ms_w_100 ms_p_tb" placeholder="Scrivi qui" maxlenght="255" required autocomplete="new-password">
                            <small>Max: 255 caratteri</small>
                        </div>
                        <button class="ms_link ms_mt40 ms_d_blok ms_w_100 ms_p_tb" name="button">REGISTRATI</button>
                    </form>
                    <small class="ms_mt40 ms_tc ms_d_blok">Non hai ancora un profilo? <a href="index.php" class="ms_c_b"><strong>Accedi</strong></a></small>
                </div>
            </div>
        </div>
    </main>
    <script src="./assets/js/script.js"></script>
</body>

</html>