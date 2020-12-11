<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <title>Listar Alumnos</title>
    <meta name="viewport">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.5/examples/starter-template/starter-template.css">
    <script src="sub.js?rev=<?php echo time(); ?>"></script>
    <script name="clear-browser-cache" src='clear-browser-cache.js' value="true"></script>
</head>

<body onload="listarCalificaciones('tablaDatos')">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="03ListarAlumnos.html">Alumnos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <form class="form-inline my-2 my-lg-0">
            </form>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="logout()">Cerrar Sesión</a>
                </li>
            </ul>

        </div>
    </nav>
    <div class="row">
        <div class="col" align="center">
            <button id="btnCapturar" onclick="mostrarCaptura()" class="btn btn-primary btn-sm">Capturar Calificacion</button>
        </div>
    </div>

    <script type="text/javascript">
        function mostrarCaptura() {
            var formularioCalificaciones = document.getElementById('formularioCalificaciones');
            var listadoCalificaciones = document.getElementById('listadoCalificaciones');

            formularioCalificaciones.style.display = "block";
            listadoCalificaciones.style.display = "none";
        }
    </script>
    <div id="formularioCalificaciones" class="container" align="center" style="display: none;">
        <h1 align="center">Formulario de Captura</h1>
        <div class="row">
            <div class="col-sm-6">
                <select class="form-control" id="Clave_mat">
                    <option value="1000">RELIGION</option>
                    <option value="10001">ESPA</option>
                    <option value="10002">MATEMATICAS I</option>
                    <option value="10003">ASIGNATURA ESTATAL</option>
                    <option value="10004">ARTES</option>
                    <option value="10008">EDUCACION FISICA I</option>
                    <option value="10015">GEOGRAFIA DE MEXICO Y DEL MUND</option>
                    <option value="10020">CIENCIAS I</option>
                    <option value="10033">INGLES I</option>
                    <option value="10199">TECNOLOGIA I</option>
                    <option value="1400">MATEMATICAS IV</option>
                    <option value="1401">FISICA III</option>
                    <option value="1402">LENGUA ESPA</option>
                    <option value="1403">HISTORIA UNIVERSAL III</option>
                    <option value="1404">LOGICA</option>
                </select>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" value="" id="calificacion" min="1" max="10">
            </div>
            <div class="col-sm-1">
                <a class="btn btn-primary btn-sm" onclick="setEvaluaciones()">EVALUAR</a>
            </div>
        </div>

    </div>

    <main role="main" class="container" id="listadoCalificaciones">
        <div class="starter-template" id="main-container">
            <table id="tablaDatos" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th width="30%">Nombre</th>
                        <th width="20%">Clave</th>
                        <th width="25%">Calificacion</th>
                        <th width="25%">Detalle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>