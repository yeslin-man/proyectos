

let sucursalSeleccionada = "";
let servicioSeleccionado = "";

const cards = document.querySelectorAll(".cardServicio");


// FILTRO SUCURSALES
document.querySelectorAll(".filtroSucursal").forEach(boton => {

    boton.addEventListener("click", function(e){

        e.preventDefault();

        sucursalSeleccionada =
            this.dataset.sucursal.toLowerCase();

        filtrar();

    });

});


// FILTRO SERVICIOS
document.querySelectorAll(".filtroServicio").forEach(boton => {

    boton.addEventListener("click", function(e){

        e.preventDefault();

        servicioSeleccionado =
            this.dataset.servicio.toLowerCase();

        filtrar();

    });

});


// filtrar

function filtrar(){

    let textoBusqueda =
        document.getElementById("buscar")
        .value
        .toLowerCase();




    cards.forEach(card => {

        let sucursal =
            card.dataset.sucursal;

        let servicio =
            card.dataset.servicio;

        let texto =
            card.innerText.toLowerCase();




        let cumpleSucursal =
            sucursalSeleccionada === "" ||
            sucursal === sucursalSeleccionada;




        let cumpleServicio =
            servicioSeleccionado === "" ||
            servicio === servicioSeleccionado;




        let cumpleBusqueda =
            texto.includes(textoBusqueda);





        if(
            cumpleSucursal &&
            cumpleServicio &&
            cumpleBusqueda
        ){

            card.style.display = "block";

        }else{

            card.style.display = "none";

        }

    });

}



// document.querySelectorAll('.sucursal').forEach(boton => {

//     boton.addEventListener('click', function(e){

//         e.preventDefault(); // evita recargar la página

//         let id_servicio = this.dataset.id_servicio;
//         let sucursal = this.dataset.sucursal;
//         let servicio = this.dataset.servicio;

//         fetch('servicios.php?id_servicio=' + id_servicio +
//             'sucursal=' + sucursal +
//               '&servicio=' + servicio +
//               '&operacion=servicio')
//         .then(response => response.text())
//         .then(data => {

//             // console.log(data);

//             // Mostrar en formulario

//             // document.getElementById('formulario').style.display = 'block';
//             document.getElementById('sucursal').value = sucursal;
//             document.getElementById('servicio').value = servicio;
//             // document.getElementById('fecha').value = fecha;
//             // document.getElementById('hora').value = hora;

//             // aquí puedes actualizar el HTML
//             // document.getElementById("respuesta").innerHTML = data;

//         });

//     });

// });

