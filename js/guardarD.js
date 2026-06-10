const botonU = document.getElementById('botonD');

botonU.addEventListener('click', function(e){
    e.preventDefault();

    const frmAgenda = document.getElementById('frmSpa');

    // Validación básica de campos vacíos
    let nombre = document.getElementById('nombre').value.trim();
    let apellido = document.getElementById('apellido').value.trim();
    let telefono = document.getElementById('telefono').value.trim();
    let email = document.getElementById('correo').value.trim();
    let clave = document.getElementById('clave').value.trim();
    let sucursal = document.getElementById('sucursal').value.trim();

    if (nombre === "" || apellido === "" || telefono === "" || email === "" || clave === "" || sucursal === "") {
      // alert("Por favor, complete todos los campos.");

      Swal.fire({
        icon: "error",
        title: "Aviso",
        text: "Por favor, complete todos los campos."
      });

      return;
    }
    
    let datos = new FormData(frmAgenda);
    
    const url = 'controller/Usuarios.php?operacion=GuardarUsuarioDos';

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
                text: "Usuario Registrado",
                icon: "success"
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "index.php"; 
                }
            });
        }else{
           Swal.fire({
                title: "Algo salio mal",
                text: "Datos Guardados",
                icon: "error"
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "index.php"; // Redirige a la página deseada
                }
            }); 
        }

          // data.window.location = 'clientes.php';
    })
})