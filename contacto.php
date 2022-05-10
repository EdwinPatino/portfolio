<?php 

  $pg = "contacto";

  if($_POST){
    $nombre = $_POST("txtNombre");
    $correo = $_POST("txtCorreo");
    $telefono = $_POST("txtTelefono");
    $mensaje = $_POST("txtMensaje");

    $para = "epatio654@hotmail.com";
    $titulo = "Recibiste mensaje desde tu web portfolio";

    $cuerpo= "
    Nombre: $nombre <br>
    Correo: $correo <br>
    Telefono: $telefono <br>
    Mensaje: $mensaje";

      // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Cabeceras adicionales
    $cabeceras .= 'To: epatio654@hotmail.com' . "\r\n";
    $cabeceras .= 'From:' . "\r\n";
    $cabeceras .= 'Cc: alexanderpatinogaray@gmail.com' . "\r\n";
    //$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

    // Enviarlo
    //mail($para, $título, $cuerpo, $cabeceras);
    header("Location: gracias.php");
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto">
  <?php include_once "header.php" ?>  
  <main class="container">
      <div class="row">
          <div class="col-12 pt-3 pb-5">
              <h1>Contacto</h1>
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
                      <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono" class="form-control">
                  </div>
                  <div class="mb-3">
                      <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje" class="form-control"></textarea>
                  </div>
                  <div class="mb-3">
                      <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-blanco px-4">ENVIAR</button>
                  </div>
              </form>
          </div>
      </div>

  </main>
  <?php include_once "footer.php" ?>
</body>

</html>