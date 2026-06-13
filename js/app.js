setTimeout(() => {
    document.getElementById('splash').style.display = 'none';
    document.getElementById('contenido').style.display = 'block';
    // document.getElementById('contenidoX').style.display = 'block';
}, 6000);


// animacion con scroll
const elementos = document.querySelectorAll('.animar');

const mostrarElementos = () => {
    const alturaPantalla = window.innerHeight;

    elementos.forEach(el => {
        const distancia = el.getBoundingClientRect().top;

        if (distancia < alturaPantalla - 100) {
            el.classList.add('activo');
        }
    });
};

window.addEventListener('scroll', mostrarElementos);
window.addEventListener('load', mostrarElementos);