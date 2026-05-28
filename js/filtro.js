// document.addEventListener('keyup', (e)=>{
//     if(e.target.matches("#buscar")){
//         document.querySelectorAll(".articulo").forEach(fruta =>{
//             fruta.textContent.toLowerCase().includes(e.target.value.toLowerCase())
//             ?fruta.classList.remove("filtro")
//             :fruta.classList.add("filtro")
//         })
//     }
// })


document.addEventListener('keyup', (e) => {
    if (e.target.matches("#buscar")) {

        let coincidencias = 0;

        document.querySelectorAll(".articulo").forEach(item => {

            if (item.textContent.toLowerCase().includes(e.target.value.toLowerCase())) {
                item.classList.remove("filtro");
                coincidencias++;
            } else {
                item.classList.add("filtro");
            }

        });

        const mensaje = document.getElementById("mensaje");
        const tabla = document.getElementById("tabla");

        if (coincidencias === 0) {
            mensaje.style.display = "block";
            tabla.style.display = "none";
        } else {
            mensaje.style.display = "none";
            tabla.style.display = "block";
        }
    }
});