const botonEd = document.getElementById('botonEd');

botonEd.addEventListener('click', function(e){
    e.preventDefault();

    const frmAgenda = document.getElementById('frmAgendaEditar');
    
    let datos = new FormData(frmAgenda);
    
    const url = 'controller/Agendas.php?operacion=EditarAgenda';

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
                text: "Datos Actualizados",
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