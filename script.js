// Este evento se ejecutará al estar listo el documento.
window.addEventListener("load", function load(event) {
    "use strict";

    // Remueve la función que maneja el evento anterior. Ya no es necesaria.
    window.removeEventListener("load", load);
    
    // Constructor de Usuario.
    function Usuario() {

        // Define las propiedades para cada objeto Usuario.
        this.rut = undefined;
        this.nombre = undefined;
        this.apellido = undefined;
        this.email = undefined;
        this.telefono = undefined;
        this.numeroCaso = undefined;
        this.descripcionCaso = undefined;
        this.fechaInicioCaso = undefined;
        this.estadoCaso = undefined;
        this.descripcionSentencia = undefined;
        this.fechaCierreCaso= undefined;
    }

    // A continuación se obtiene una serie de elementos de la página, y se
    // crea algunas variables que se usarán en los eventos de envío del
    // formulario, y de pulsación del botón para mostrar datos.
    var botonMostrarDatos = document.getElementById("boton-mostrar-datos");
    var mensaje = document.getElementById("mensaje");

    var campoRut = document.getElementById("rut");
    var campoNombre = document.getElementById("nombre");
    var campoApellido = document.getElementById("apellido");
    var campoEmail = document.getElementById("email");
    var campoTelefono = document.getElementById("telefono");
    var campoNumeroCaso= document.getElementById("numeroCaso");
    var campoDescripcionCaso= document.getElementById("descripcionCaso");
    var campoFechaInicioCaso= document.getElementById("fechaInicioCaso");
    var campoEstadoCaso= document.getElementById("estadoCaso");
    var campoDescripcionCaso= document.getElementById("descripcionSentencia");
    var campoFechaCierreCaso= document.getElementById("fechaCierreCaso");

    var divisionTabla = document.getElementById("division-tabla");
    var cuerpoTabla = document.getElementById("tabla-datos-guardados").getElementsByTagName("tbody")[0];

    var datosGuardados = [];
    var i;

    var usuario;
    var nuevaFila;
    var nuevaCelda;
    var nuevoTexto;

    // Evento de envío del formulario. Ya que este formulario no
    // se enviará a ningún servidor, se procesará en la página.
    document.getElementById("formulario").addEventListener("submit", function (event) {

        // Previene el comportamiento definido por defecto para
        // el evento.
        event.preventDefault();

        // Compara las dos contraseñas ingresadas. Si son iguales,
        // procede con el almacenamiento de datos. Sino, muestra un error.
        if (usuario !== null) {

            // Crea un nuevo objeto Usuario y le asigna los valores ingresados
            // por el usuario.
            usuario = new Usuario();
            usuario.rut = campoRut.value;
            usuario.nombre = campoNombre.value;
            usuario.apellido = campoApellido.value;
            usuario.email = campoEmail.value;
            usuario.telefono = campoTelefono.value;
            usuario.numeroCaso = numeroCaso.value;
            usuario.descripcionCaso = campoDescripcionCaso.value;
            usuario.fechaInicioCaso = campoFechaInicioCaso.value;
            usuario.estadoCaso = estadoCaso.value;
            usuario.descripcionSentencia = descripcionSentencia.value;
            usuario.fechaCierreCaso = campoFechaCierreCaso.value;

            // Ingresa el objeto recién creado a un arreglo de objetos.
            // Luego, activa el botón para mostrar datos.
            datosGuardados.push(usuario);
            botonMostrarDatos.disabled = false;

            // Muestra un mensaje de éxito.
            mensaje.innerHTML = "Datos ingresados exitosamente";
        }
        else {
            // Muestra un mensaje de error.
            mensaje.innerHTML = "Los datos ingresadas estan incompletos";
        }
    });


    // Evento de click del botón para mostrar datos.
    botonMostrarDatos.addEventListener("click", function (event) {

        // Muestra la división que contiene la tabla con los datos ingresados.
        divisionTabla.hidden = false;

        // Elimina el contenido del mensaje del formulario.
        mensaje.innerHTML = "";

        // Elimina todas las filas de la tabla.
        while (cuerpoTabla.firstChild) {
            cuerpoTabla.removeChild(cuerpoTabla.firstChild);
        }

        // Itera a través de todos los objetos Usuario que están dentro
        // del array datosGuardados.
        for (i = 0; i < datosGuardados.length; i++) {

            // Asigna el usuario actual de la lista a la variable usuario.
            // Luego crea una fila nueva.
            usuario = datosGuardados[i];
            nuevaFila = cuerpoTabla.insertRow(cuerpoTabla.rows.length);

            // Crea una columna nueva para cada dato y las rellena con el
            // texto ingresado por el usuario en el formulario.

            nuevaCelda = nuevaFila.insertCell(0);
            nuevoTexto = document.createTextNode(usuario.rut);
            nuevaCelda.appendChild(nuevoTexto);

            nuevaCelda = nuevaFila.insertCell(1);
            nuevoTexto = document.createTextNode(usuario.nombre);
            nuevaCelda.appendChild(nuevoTexto);

            nuevaCelda = nuevaFila.insertCell(2);
            nuevoTexto = document.createTextNode(usuario.apellido);
            nuevaCelda.appendChild(nuevoTexto);

            nuevaCelda = nuevaFila.insertCell(3);
            nuevoTexto = document.createTextNode(usuario.email);
            nuevaCelda.appendChild(nuevoTexto);

            nuevaCelda = nuevaFila.insertCell(4);
            nuevoTexto = document.createTextNode(usuario.telefono);
            nuevaCelda.appendChild(nuevoTexto);

            nuevaCelda = nuevaFila.insertCell(5);
            nuevoTexto = document.createTextNode(usuario.numeroCaso);
            nuevaCelda.appendChild(nuevoTexto);

            nuevaCelda = nuevaFila.insertCell(6);
            nuevoTexto = document.createTextNode(usuario.descripcionCaso);
            nuevaCelda.appendChild(nuevoTexto);

            nuevaCelda = nuevaFila.insertCell(7);
            nuevoTexto = document.createTextNode(usuario.fechaInicioCaso);
            nuevaCelda.appendChild(nuevoTexto);

            nuevaCelda = nuevaFila.insertCell(8);
            nuevoTexto = document.createTextNode(usuario.estadoCaso);
            nuevaCelda.appendChild(nuevoTexto);

            nuevaCelda = nuevaFila.insertCell(9);
            nuevoTexto = document.createTextNode(usuario.descripcionSentencia);
            nuevaCelda.appendChild(nuevoTexto);

            nuevaCelda = nuevaFila.insertCell(10);
            nuevoTexto = document.createTextNode(usuario.fechaCierreCaso);
            nuevaCelda.appendChild(nuevoTexto);
        }
    });
});