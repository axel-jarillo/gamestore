

const cantidad = document.getElementById("cantidad");

function sumar(){

    cantidad.value = parseInt(cantidad.value) + 1;

}

function restar(){

    if(parseInt(cantidad.value) > 1){

        cantidad.value = parseInt(cantidad.value) - 1;

    }

}

function cerrarSesion(){

    if(confirm("¿Deseas cerrar sesión?")){

        window.location="php/cerrarSesion.php";

    }

}


window.addEventListener("load",function(){

    if(localStorage.getItem("daltonismo")=="activo"){

        document.body.classList.add("daltonismo");

    }

});

function cambiarDaltonismo(){

    if(document.body.classList.contains("daltonismo")){

        document.body.classList.remove("daltonismo");

        localStorage.removeItem("daltonismo");

    }else{

        document.body.classList.add("daltonismo");

        localStorage.setItem("daltonismo","activo");

    }

}