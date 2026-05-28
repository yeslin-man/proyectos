const mapaUno = document.getElementById('mapaUno');
const mapaDos = document.getElementById('mapaDos');
const mapaTres = document.getElementById('mapaTres');

const mostrarUno = document.getElementById('mostrarUno');
const mostrarDos = document.getElementById('mostrarDos');
const mostrarTres = document.getElementById('mostrarTres');

mapaUno.addEventListener('click', function(){
    mostrarUno.style.display = 'block';
    mostrarDos.style.display = 'none';
    mostrarTres.style.display = 'none';
});
mapaDos.addEventListener('click', function(){
    mostrarDos.style.display = 'block';
    mostrarUno.style.display = 'none';
    mostrarTres.style.display = 'none';
});
mapaTres.addEventListener('click', function(){
    mostrarTres.style.display = 'block';
    mostrarDos.style.display = 'none';
    mostrarUno.style.display = 'none';
});