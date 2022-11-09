<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>Edusogno</title>
</head>

<body>
    <header class="ms_p30 ms_background-white">
        <div class=""><img class="ms_image" src="./assets/img/logo-black.svg" alt=""></div>
    </header>

    <main class="ms_mt110">
        <div class="ms_container ms_pt100">
            <div class="">
                <h1 class="ms_title ms_tc">Crea il tuo account</h1>

                <div class="ms_box ms_p30 ms_background-white ms_mt40">
                    <form action="">
                    <div class="ms_mt40">
                            <label for="" class="ms_d_blok ms_w_100">Inserisci il nome</label>
                            <input type="text" class="ms_mt10 ms_w_100 ms_p_tb" placeholder="Mario" required maxlength="45">
                            <small></small>
                        </div>
                        <div class="ms_mt40">
                            <label for="" class="ms_d_blok ms_w_100">Inserisci il cognome</label>
                            <input type="text" class="ms_mt10 ms_w_100 ms_p_tb" placeholder="Rossi" required maxlength="45">
                            <small></small>
                        </div>
                        <div class="ms_mt40">
                            <label for="" class="ms_d_blok ms_w_100">Inserisci l'e-mail</label>
                            <input type="email" class="ms_mt10 ms_w_100 ms_p_tb" placeholder="name@example.com" maxlength="255" required autocomplete="email">
                            <small></small>
                        </div>
                        <div class="ms_mt40">
                            <label for="" class="ms_d_blok ms_w_100">Inserisci la password</label>
                            <input type="password" class="ms_mt10 ms_w_100 ms_p_tb" placeholder="Scrivi qui" maxlenght="255" required autocomplete="new-password">
                            <small></small>
                        </div>
                        <button class="ms_mt40 ms_d_blok ms_w_100 ms_p_tb">ACCEDI</button>
                    </form>
                    <small class="ms_mt40 ms_tc ms_d_blok">Non hai ancora un profilo? <a href="#"><strong>Registrati</strong></a></small>
                </div>
            </div>
        </div>
    </main>
</body>

</html>