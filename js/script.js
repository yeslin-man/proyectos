const botonUno = document.getElementById('botonUno');
const botonDos = document.getElementById('botonDos');
const botonTres = document.getElementById('botonTres');
const botonCuatro = document.getElementById('botonCuatro');
const botonCinco = document.getElementById('botonCinco');
const botonSeis = document.getElementById('botonSeis');

botonUno.addEventListener('click', function(){
    window.location = 'agenda.php';
});
botonDos.addEventListener('click', function(){
    window.location = 'servicio.php';
});
botonTres.addEventListener('click', function(){
    window.location = 'ventas.php';
});
botonCuatro.addEventListener('click', function(){
    window.location = 'spac.php';
});
botonCinco.addEventListener('click', function(){
    window.location = 'clientes.php';
});
botonSeis.addEventListener('click', function(){
    window.location = 'publicidad.php';
});

