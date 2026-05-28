function eliminar(id_usuario){
    Swal.fire({
        title: "Desea eliminar el registro?",
        // text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si"
    }).then((result) => {
        if (result.isConfirmed) {
      const url = 'controller/Usuarios.php?id_usuario='+id_usuario+'&operacion=Eliminar';
  
        fetch(url,{
          method: 'POST',
          body: id_usuario
      })
      .then(response => response.text())
      .then(data => {
        //   console.log(data);
        if(data == 'ok'){
          Swal.fire({
            title: "Eliminado!",
            icon: "success"
          }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "spac.php"; // Redirige a la página deseada
            }
          });
        }else{
            Swal.fire({
                title: "Algo salio mal",
                text: "Intenta de nuevo",
                icon: "error"
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "spac.php"; // Redirige a la página deseada
                }
            }); 
        }

        })
      }
    });
}

function eliminarSer(id_servicio){
    Swal.fire({
        title: "Desea eliminar el registro?",
        // text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si"
    }).then((result) => {
        if (result.isConfirmed) {
      const url = 'controller/Servicios.php?id_servicio='+id_servicio+'&operacion=EliminarServi';
  
        fetch(url,{
          method: 'POST',
          body: id_servicio
      })
      .then(response => response.text())
      .then(data => {
        //   console.log(data);
        if(data == 'ok'){
          Swal.fire({
            title: "Eliminado!",
            icon: "success"
          }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "servicio.php"; // Redirige a la página deseada
            }
          });
        }else{
            Swal.fire({
                title: "Algo salio mal",
                text: "Intenta de nuevo",
                icon: "error"
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "servicio.php"; // Redirige a la página deseada
                }
            }); 
        }

        })
      }
    });
}