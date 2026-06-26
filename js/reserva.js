const servicio = document.getElementById('servicio');
const mostrarServicio = document.getElementById('mostrarServicio');
const empleado = document.getElementById('empleado');
const mostrarEmpleado = document.getElementById('mostrarEmpleado');

mostrarServicio.addEventListener('click', function(){
    if(servicio.style.display==='none'){
        servicio.style.display='block';
        servicio.checked = true;
        mostrarServicio.style.border='1px solid blue';
    }else{
        servicio.style.display='none';
        servicio.checked = false;
        mostrarServicio.style.border='0';
    }
});

mostrarEmpleado.addEventListener('click', function(){
    if(empleado.style.display==='none'){
        empleado.style.display='block';
        empleado.checked = true;
        mostrarEmpleado.style.border='1px solid blue';
    }else{
        empleado.style.display='none';
        empleado.checked = false;
        mostrarEmpleado.style.border='0';
    }
});