const form = document.getElementById('register-form');
const nome = document.getElementById('nome');
const cognome = document.getElementById('cognome');
const email = document.getElementById('email');
const password = document.getElementById('password');

function setSuccessFor(input) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    small.classList.add('d-none');
    formControl.className = 'success';
}

function setErrorFor(input, message) {
    //seleziono il fratello dell'input small
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    input.className = 'error';
    small.innerText = message;
    //rimuovi la classe d-none da small e aggiungi la classe d-block
    small.classList.remove('d-none');
}

function checkInputs() {
    const nomeValue = nome.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();


    if(nomeValue === '') {
        setErrorFor(nome, 'Il nome del ristorante non può essere vuoto');
        result = true;
    } else {
        setSuccessFor(nome);
        result = false;
    }

    if(cognomeValue === '') {
        setErrorFor(cognome, 'Il nome del ristorante non può essere vuoto');
        result = true;
    } else {
        setSuccessFor(cognome);
        result = false;
    }
    

    if(emailValue === '') {
        setErrorFor(email, 'L\'email del ristorante non può essere vuoto');
        result = true;
    } else {
        setSuccessFor(email);
        result = false;
    }

    if(passwordValue === '') {
        setErrorFor(password, 'La password del ristorante non può essere vuota');
        result = true;
    } else {
        setSuccessFor(password);
        result = false;
    }
}

form.addEventListener('submit', (e) => {
    setSuccessFor();
    setErrorFor();
    checkInputs();
});