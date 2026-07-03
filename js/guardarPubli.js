const botonU = document.getElementById('botonP');

botonU.addEventListener('click', function(e){
    e.preventDefault();

    const frmAgenda = document.getElementById('frmPublic');

    // Validación básica de campos vacíos
    let titulo = document.getElementById('titulo').value.trim();
    let descripcion = document.getElementById('descripcion').value.trim();
    let foto = document.getElementById('foto').value.trim();
    let opcion = document.getElementById('opcion').value.trim();

    if (titulo === "" || descripcion === "" || foto === "" || opcion === "") {
      // alert("Por favor, complete todos los campos.");

      Swal.fire({
        icon: "error",
        title: "Aviso",
        text: "Por favor, complete todos los campos."
      });

      return;
    }
    
    let datos = new FormData(frmAgenda);
    
    const url = 'controller/Publicar.php?operacion=GuardarPublic';

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
                    window.location.href = "publicidad.php"; 
                }
            });
        }else{
           Swal.fire({
                title: "Algo salio mal",
                text: "Error",
                icon: "error"
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "publicidad.php"; // Redirige a la página deseada
                }
            }); 
        }

          // data.window.location = 'clientes.php';
    })
})