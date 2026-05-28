// ELIMINAR
document.getElementById('formOperar').addEventListener('submit', function(e){

    e.preventDefault();

    Swal.fire({
        title: "Desea actualizar ese dato?",
        // text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si"
    }).then((result) => {
        if (result.isConfirmed) {

    let formData = new FormData(this);

    fetch('../controller/operar.php?operacion=Editar', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {

      if(data == 'ok'){
          Swal.fire({
            title: "Dato actualizado con éxito!",
            icon: "success"
          }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "cita.php"; // Redirige a la página deseada
            }
          });
        }else{
            Swal.fire({
                title: "Algo salio mal",
                text: "Intenta de nuevo",
                icon: "error"
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "cita.php"; // Redirige a la página deseada
                }
            }); 
        }

        // limpiar formulario
        document.getElementById('formOperar').reset();

    });
    }
  });
});







// function eliminarCita(id_usuario){
//     Swal.fire({
//         title: "Desea eliminar la cita?",
//         // text: "You won't be able to revert this!",
//         icon: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#3085d6",
//         cancelButtonColor: "#d33",
//         confirmButtonText: "Si"
//     }).then((result) => {
//         if (result.isConfirmed) {
//       const url = 'controller/Usuarios.php?id_usuario='+id_usuario+'&operacion=Eliminar';
  
//         fetch(url,{
//           method: 'POST',
//           body: id_usuario
//       })
//       .then(response => response.text())
//       .then(data => {
//         //   console.log(data);
//         if(data == 'ok'){
//           Swal.fire({
//             title: "Eliminado!",
//             icon: "success"
//           }).then((result) => {
//             if (result.isConfirmed) {
//                 window.location.href = "spac.php"; // Redirige a la página deseada
//             }
//           });
//         }else{
//             Swal.fire({
//                 title: "Algo salio mal",
//                 text: "Intenta de nuevo",
//                 icon: "error"
//               }).then((result) => {
//                 if (result.isConfirmed) {
//                     window.location.href = "spac.php"; // Redirige a la página deseada
//                 }
//             }); 
//         }

//         })
//       }
//     });
// }