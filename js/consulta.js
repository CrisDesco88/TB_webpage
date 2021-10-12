"use strict";

let btnSubmit = window.document.getElementById("btnSubmit");
btnSubmit.addEventListener('click',()=>{
    let nombre = window.document.getElementById('nombreApellido').value;
    let empresa = window.document.getElementById('inputEmpresa').value;
    let email = window.document.getElementById('emailInput').value;
    let telefono = window.document.getElementById('telefonoInput').value;
    let mensaje = window.document.getElementById('mensajeInput').value;
    let contactar = window.document.getElementById('gridCheck').value;
    
    
    fetch('mail.php?nombre=' + nombre + '&empresa=' + empresa + '&email=' + email + '&telefono=' + telefono + '&mensaje=' + mensaje + '&contactar=' + contactar,{ method: 'GET',
    headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json',
        }
    }).then(e => {
        alert(e)
    });

});
