const hora = document.getElementById('hora');
const botonAg = document.getElementById('botonAg');

hora.addEventListener('change', (e) =>{
    let horario =  e.target.value;
    // console.log('hora:'+horario);

    fetch('../model/change.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'hora=' + horario
    })
    .then(response => response.text())
    .then(data => {
        // console.log(data);  
        document.getElementById('resultado').innerHTML = data;
        if(data == "<span style='color:red;'>Horario ocupado</span>"){
            botonAg.style.display='none';
        }else{
            botonAg.style.display='block';
        }
    })
    .catch(error => console.log(error));

    
})