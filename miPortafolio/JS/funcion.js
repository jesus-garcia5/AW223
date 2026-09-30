function cambiarTexto() {
    document.getElementById("bienvenida").innerHTML =
    "Gracias por visitar mi portafolio";
}

function cambiarColor() {

    let cajas =
    document.querySelectorAll(".lista-habilidades li");

    cajas.forEach(function(caja){
        caja.style.backgroundColor = "green";
    });

}

function cambiarFuente() {

    let habilidades =
    document.querySelectorAll(".lista-habilidades li");

    habilidades.forEach(function(caja) {
        caja.style.fontFamily = "Courier New";
    });
}

function validarFormulario(event){

    event.preventDefault();

    let nombre =
    document.getElementById("nombre").value;

    let correo =
    document.getElementById("email").value;

    if(nombre == ""){
        alert("Escribe tu nombre");
    }
    else if(correo == ""){
        alert("Escribe tu correo");
    }
    else{
        alert("Formulario enviado correctamente");
    }

}