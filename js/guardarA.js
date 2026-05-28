const botonS = document.getElementById('botonAg');

botonS.addEventListener('click', function(e){
    e.preventDefault();

    const frmAgenda = document.getElementById('frmAgendaC');

    // Validación básica de campos vacíos
    let cliente = document.getElementById('cliente').value.trim();
    let servicio = document.getElementById('servicio').value.trim();
    let fecha = document.getElementById('fecha').value.trim();
    let hora = document.getElementById('hora').value.trim();
    let usuario = document.getElementById('idusuario').value.trim();

    if (cliente == "" || servicio === "" || fecha === "" || hora === "" || usuario === "") {
      // alert("Por favor, complete todos los campos.");

      Swal.fire({
        icon: "error",
        title: "Aviso",
        text: "Por favor, complete todos los campos."
      });

      return;
    }
    
    let datos = new FormData(frmAgenda);
    
    const url = 'controller/Agendas.php?operacion=GuardarAgenda';

    fetch(url,{
        method: 'POST',
        body: datos
    })
    .then(response => response.text())
    .then(data => {
        // console.log(data);
        if(data === 'ok'){
            Swal.fire({
                title: "Exitoso",
                text: "Datos Guardados",
                icon: "success"
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "agenda.php"; 
                }
            });
        }else{
           Swal.fire({
                title: "Algo salio mal",
                text: "Intenta de nuevo",
                icon: "error"
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "agenda.php"; // Redirige a la página deseada
                }
            }); 
        }

          // data.window.location = 'clientes.php';
    })
})