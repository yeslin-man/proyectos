// const ctx = document.getElementById('miGrafico');
// let cantidad = document.getElementById('cantidad').value;

// new Chart(ctx, {
//     type: 'pie',
//     data: {
//         // labels: ['Ventas', 'Gastos', 'Ganancias'],
//         labels: ['Ventas', 'Meta'],
//         datasets: [{
//             // data: [50, 30, 20],
//             data: [cantidad, 30],
//             backgroundColor: [
//                 '#d4af37',
//                 '#1e293b'
//                 // '#f1f1f1'
//             ]
//         }]
//     }
// });



// const ctx = document.getElementById('miGrafico').getContext('2d');

// // función para cargar datos por usuario
// function cargarGrafico() {

//     // fetch('datos.php?id=' + id)
//     fetch('model/VentasGrafica.php')
//     .then(res => res.json())
//     .then(data => {

//         let fechas = data.map(item => item.fecha);
//         let cantidades = data.map(item => item.total);

//         grafico = new Chart(ctx, {
//             type: 'pie', // puedes cambiar a 'bar' si quieres mejor visualización
//             data: {
//                 // labels: fechas, // 🔥 ahora son fechas
//                 labels: ['Ventas', 'Meta'], // 🔥 ahora son fechas
//                 datasets: [{
//                     data: cantidades, // 🔥 cantidades por fecha
//                     backgroundColor: [
//                         '#d4af37',
//                         '#1e293b',
//                         '#f87171',
//                         '#60a5fa',
//                         '#34d399'
//                     ]
//                 }]
//             }
//         });

//     });
// }

// // cargar al inicio
// cargarGrafico(document.getElementById('miGrafico').value);



document.querySelectorAll(".grafica").forEach(contenedor => {

    const total = contenedor.getAttribute("data-total");

    // crear canvas dentro de cada tarjeta
    const canvas = document.createElement("canvas");
    contenedor.appendChild(canvas);

    const ctx = canvas.getContext("2d");

    new Chart(ctx, {
        type: 'pie', // mejor visual para 1 dato
        data: {
            labels: ['Servicios', 'Meta'],
            datasets: [{
                data: [total,250],
                backgroundColor: [
                        '#d4af37',
                        '#1e293b',
                        '#f87171',
                        '#60a5fa',
                        '#34d399'
                    ]
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });

});