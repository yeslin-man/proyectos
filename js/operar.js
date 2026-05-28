document.querySelectorAll('.operar').forEach(boton => {

    boton.addEventListener('click', function(e){

        e.preventDefault(); // evita recargar la página

        let id = this.dataset.id;
        let servicio = this.dataset.servicio;
        let fecha = this.dataset.fecha;
        let hora = this.dataset.hora;

        fetch('cita.php?id_cita=' + id +
              '&servicio=' + servicio +
              '&fecha=' + fecha +
              '&hora=' + hora +
              '&operacion=Cita')
        .then(response => response.text())
        .then(data => {

            // console.log(data);

            // Mostrar en formulario

            document.getElementById('formulario').style.display = 'block';
            document.getElementById('id_cita').value = id;
            document.getElementById('servicio').value = servicio;
            document.getElementById('fecha').value = fecha;
            document.getElementById('hora').value = hora;

            // aquí puedes actualizar el HTML
            // document.getElementById("resultado").innerHTML = data;

        });

    });

});
