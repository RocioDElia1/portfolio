
<?php

$pg = "contacto";
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
     <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Contacto</title>
</head>

<body id="contacto">
    <?php include_once "header.php"?>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h4>Contacto</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="" placeholder="Escribe aqui tu mensaje"
                            class="form-control"></textarea>
                    </div class="mb-3">
                    <div><button type="submit" id="btnEnviar" name="btnEnviar"
                            class="btn btn-blanco px-4">ENVIAR</button></div>
            </div>
            </form>
        </div>
        </div>
    </main>
    <footer class="container">
        <div class="row mt-5 pb-3">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com/RocioDElia1" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/rocio-d-elia-4775b6193/" target="_blank" title="Linkedin"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
                Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-sm-start  pt-2 p-sm-0">
                <a href="mailto:rociodelia8@gmail.com">rociodelia8@gmail.com</a>
            </div>
        </div>
    </footer>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=1164422649" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>

    </footer>
</body>

</html>