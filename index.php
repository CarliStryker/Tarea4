<?php
    $host = 'localhost';
    $usuario = 'root';    
    $clave = '';
    $db = 'formulario_iacc';

    $conexion = mysqli_connect($host,$usuario,$clave,$db);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <style>
        .material-icons {vertical-align:-14%}
        </style>
        <!--    \\----------------CSS --------------------------// -->
        <!--link rel="stylesheet" href="css/estilos.css"-->

        <title>Formulario</title>
        <link rel="stylesheet" href="estilo.css"/>
        <script src='main.js'></script>
    </head>
    <body>
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary mt-4">
            <div class="container">
                <a class= "navbar-brand active colorenlacebarra"  href="#">Instituto Andres Bello</a>
    
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active colorenlacebarra" href="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-success">
            <div class="container">
                <a class= "navbar-brand"  ></a> <i class="material-icons">home</i>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formulario.html">Formulario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carreras.html">Carreras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Instituto Andres Bello capacita</a>
                    </li>
                </ul>
            </div>
        </nav>
    
        <div class="background-image">
            <div class="encabezado">
                <h1>Formulario de registro estudiantil</h1>
                <p>Para registrarte, completa el formulario siguiente:</p>
            </div>

            <div class="formulario">
                <form method="post" action="process_form.php" id="formulario">
                    <div class="en-linea">
                        <div>
                            <label for="rut">RUT:</label> 
                        </div>
                        <div>
                             <input type="text" id="rut" name="rut" required pattern="\d{7,8}-[0-9Kk]">
                        </div>
                        <div>
                            <label for="nombre">Nombre:</label>
                        </div>
                        <div>
                            <input type="text" id="nombre" name="nombre" required>
                        </div>

                        <div>
                            <label for="apellido">Apellido:</label>
                        </div>
                        <div>
                            <input type="text" id="apellido" name="apellido" required>
                        </div>

                        <div>
                            <label for="direccion">Direeción:</label>
                        </div>
                        <div>
                            <input type="text" id="direccion" name="direccion" required>
                        </div>

                        <div>
                            <label for="email">Correo Electrónico:</label>
                        </div>
                        <div>                        
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div>
                            <label for="telefono">Teléfono:</label>
                        </div>
                        <div>
                            <input type="tel" id="telefono" name="telefono" required >
                        </div>
                        <div>
                            <label for="numero_caso">Número de Caso:</label>
                        </div>
                        <div>
                            <input type="text" id="numeroCaso" name="numeroCaso" required>
                        </div>
                        <div>
                            <label for="descripcion_caso">Descripción del Caso:</label>
                        </div>
                        <div>
                        <textarea id="descripcionCaso" name="descripcionCaso" required></textarea>
                        </div>
                        <div>
                            <label for="fecha_inicio">Fecha de Inicio del Caso:</label>
                        </div>
                        <div>
                            <input type="date" id="fechaInicioCaso" name="fechaInicioCaso" required>
                        </div>
                        <div>
                            <label for="estado">Estado del Caso:</label>
                        </div>
                        <div>
                            <select id="estadoCaso" name="estadoCaso" required>
                                <option value="activo">Activo</option>
                                <option value="en_proceso">En Proceso</option>
                                <option value="cerrado">Cerrado</option>
                            </select>
                        </div>
                        <div>
                            <label for="descripcion_sentencia">Descripción de Sentencia:</label>
                        </div>
                        <div>
                            <textarea id="descripcionSentencia" name="descripcionSentencia"></textarea>
                        </div>
                        <div>
                            <label for="fecha_cierre">Fecha de Cierre del Caso:</label>
                        </div>
                        <div>
                            <input type="date" id="fechaCierreCaso" name="fechaCierreCaso">
                        </div>
                        <div>
                            <input type="submit" value="Enviar">
                        </div>
                </form>
            </div>

            <div class="botones">
                <button id="boton-mostrar-datos" disabled>Mostrar datos</button>
            </div>

            <div class="division-tabla" id="division-tabla" hidden>
                <table id="tabla-datos-guardados">
                    <thead>
                        <tr>
                            <th>RUT</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Dirección</th>
                            <th>Correo Electrónico</th>
                            <th>Telefono</th>
                            <th>Número de Caso:</th>
                            <th>Descripción del Caso:</th>
                            <th>Fecha de Inicio del Caso:</th>
                            <th>Estado del Caso:</th>
                            <th>Descripción de Sentencia:</th>
                            <th>Fecha de Cierre del Caso:</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>

        <footer>
            <p>&copy; 2024 Instituto Andrés Bello - Santiago de Chile</p>
        </footer>
        
        <script src="script.js"></script>
         <!-- jQuery first, then Tether, then Bootstrap JS. --> 
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>

    <?php 
        if(isset($_POST['registro'])){

            $rut= $_POST['rut'];
            $nombre= $_POST['nombre'];
            $apellido= $_POST['apellido'];
            $direccion= $_POST['direccion'];
            $email= $_POST['email'];
            $telefono= $_POST['telefono'];
            $numeroCaso= $_POST['numeroCaso'];
            $descripcionCaso= $_POST['descripcionCaso'];
            $fechaInicioCaso= $_POST['fechaInicioCaso'];
            $estadoCaso= $_POST['estadoCaso'];
            $descripcionSentencia= $_POST['descripcionSentencia'];
            $fechaCierreCaso= $_POST['fechaCierreCaso'];

            $insertarDatos = "INSERT INTO clientes  VALUES ('$rut','$nombre','$apellido','$direccion','$email','$telefono','$numeroCaso','$descripcionCaso','$fechaInicioCaso','$estadoCaso','$descripcionSentencia','$fechaCierreCaso')";
        }
    ?>

</html>

