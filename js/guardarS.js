const botonS = document.getElementById('botonS');

botonS.addEventListener('click', function(e){
    e.preventDefault();

    const frmAgenda = document.getElementById('frmServicio');

    // Validación básica de campos vacíos
    let servicio = document.getElementById('servicio').value;
    let descripcion = document.getElementById('descripcion').value;
    let precio = document.getElementById('precio').value;
    let usuario = document.getElementById('idusuario').value;

    if (servicio === "" || descripcion === "" || precio === "" || usuario === "") {
      // alert("Por favor, complete todos los campos.");

      Swal.fire({
        icon: "error",
        title: "Aviso",
        text: "Por favor, complete todos los campos."
      });

      return;
    }
    
    let datos = new FormData(frmAgenda);
    
    const url = 'controller/Servicios.php?operacion=GuardarServicio';

    fetch(url,{
        method: 'POST',
        body: datos
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
        if(data === 'ok'){
            Swal.fire({
                title: "Exitoso",
                text: "Datos Guardados",
                icon: "success"
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "servicio.php"; 
                }
            });
        }else{
           Swal.fire({
                title: "Algo salio mal",
                text: "Datos Guardados",
                icon: "error"
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "servicio.php"; // Redirige a la página deseada
                }
            }); 
        }

          // data.window.location = 'clientes.php';
    })
})