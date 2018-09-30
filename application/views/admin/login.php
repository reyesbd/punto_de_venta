<!doctype html>
<html lang="es">
  <head>
    <base href="<?php echo base_url(); ?>">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">

    <title>Hello, world!</title>
  </head>
  <body>
     <div class="container">
         <div class="row justify-content-center">
             <div id="login" class="col-4 shadow-lg p-3 mb-5 bg-white rounded">
                 <span id="titulo">Iniciar sesión</span>
                 <form action="index.php/login/validar" method="POST">
                     <input type="text" name="email" placeholder="Correo electrónico">
                     <input type="password" name="cve" placeholder="Clave">
                     <input type="submit" name="Validar">
                 </form>
             </div>
         </div>
     </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>