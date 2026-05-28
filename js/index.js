// const botonLogin = document.getElementById('botonLogin');
const botonDiez = document.getElementById('botonDiez');
const botonOnce = document.getElementById('botonOnce');
const botonDoce = document.getElementById('botonDoce');


// redirccion desde el index
const botones = document.querySelectorAll('.botonLogin');

botones.forEach(boton => {
    boton.addEventListener('click', () => {
        let valor = boton.getAttribute('data-valor');
        window.location.href = "sesion/all.php?valor="+ valor;
        // window.location.href = "registro.php?valor="+ valor;
    });
});


botonDiez.addEventListener('click', function(){
    window.location = 'ubicacion.php';
});


// botonOnce.addEventListener('click', function(){
//     window.location = "https://wa.me/573001234567?text=Hola%20%F0%9F%91%8B%2C%20buen%20d%C3%ADa.%20Me%20gustar%C3%ADa%20agendar%20una%20cita.%20%C2%BFPodr%C3%ADan%20indicarme%20los%20horarios%20disponibles%2C%20por%20favor%3F";
// });
// botonDoce.addEventListener('click', function(){
//     window.location = 'login.php';
// });
