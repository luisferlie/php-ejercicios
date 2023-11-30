<?php

if (isset($_POST["enviar"])) {
    echo "mamon";
    $nombre = htmlspecialchars($_POST["nombre"]) ?? 'anonimo';
    $correo = htmlspecialchars($_POST["correo"]) ?? 'desconocido';
    $password = htmlspecialchars($_POST["password"]) ?? 'unknown';
    $error = "";




    /*     $nombre = filter_input(INPUT_POST, $nombre, FILTER_DEFAULT);
    $correo = filter_input(INPUT_POST, $correo, FILTER_DEFAULT);
    $password = filter_input(INPUT_POST, $password, FILTER_VALIDATE_EMAIL); */

    echo "$nombre,$password,$correo";
    function validar_usuario($nombre, $password, $correo, &$error = "")
    {

        if (strlen($nombre) <= 5) {
            $error .= "<br>nombre debe tener mas de 8 caracter   ;  ";
        }
        if (strlen($password) <= 5) {
            $error .= "<br> la contraseña debe tener mas de 5 caracter  ;  ";
        }

        if (!preg_match('/(a-zA-Z|@#|[0-9]{2,})+/', $password)) {
            $error .= "<br>la contraseña debe contener almenos 2 numeros y un caracter especial";
        }
        return $error;
    }


    $error = validar_usuario($nombre, $password, $correo);

    echo "\n los errores son: \n$error";
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">

    </script>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-light bg-primary" id="navbar">
        <div class="container-fluid bg-transparent">
            <a class="navbar-brand" href="#">primary</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarID">
                <div class="navbar-nav ">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link active" aria-current="page" href="#">Home</a>

                </div>
            </div>
        </div>
    </nav>

    <form action="" method="post" class="row g-3  ml-5 p-5">
        <div class="col-md-6">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="validationCustom01" value="Mark" required>

            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">password</label>
                <input type="text" name="password" class="form-control" id="validationCustom02" value="Otto" required>

            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">usuario</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required name="correo">

                </div>
            </div>



            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck" name="grpd">
                        Agree to terms and conditions
                    </label>

                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="enviar" value=enviar>Submit form</button>
            </div>
        </div>
        <div class="col-md-6">
            <h6>Formulario --> errores</h6>
            <div class="col-md-6">
                <p><?php

                    if ($error != '') {
                        echo $error;
                    } else {
                        echo "estas registrado correctamente";
                    } ?></p>
            </div>
        </div>

    </form>
</body>

</html>