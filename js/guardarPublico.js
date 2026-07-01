const botonU = document.getElementById('botonP');
botonU.addEventListener('click', function(e){
    e.preventDefault();
    const frmAgenda = document.getElementById('frmPublic');
    // Validación básica de campos vacíos    
    let titulo = document.getElementById('titulo').value.trim();
    let descripcion = document.getElementById('descripcion').value.trim();
    if (descripcion === "") {
      Swal.fire({
        icon: "error",
        title: "Aviso",
        text: "Por favor, complete todos los campos."
      });
      return;
    }
    let datos = new FormData(frmAgenda);
    const url = '../controller/Publicar.php?operacion=GuardarPublico';
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
                    window.location.href = "testimonio.php"; 
                }
            });
        }else{
           Swal.fire({
                title: "Algo salio mal",
                text: "Datos Guardados",
                icon: "error"
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "testimonio.php"; // Redirige a la página deseada
                }
            }); 
        }

          // data.window.location = 'clientes.php';
    })
})