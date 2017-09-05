<?php

require_once ('conec.php');
$mensajeOk = false;
$mensajeError = "El sistema no se encuentra disponible";
if (isset($_POST["email"]) && isset($_POST["contrasena"])) {
  if ($_POST["email"] != '') {
    if ($_POST["contrasena"] != '') {
      $email = $_POST["email"];
      $contrasena = $_POST["contrasena"];
//      $consulta = pg_query($conect, ("SELECT * FROM usuarios WHERE correo='$email' AND contrasena='$contrasena'"));
//      var_dump(isset($_POST["email"]) && isset($_POST["contrasena"]));
      $conect->prepare("SELECT * FROM usuarios WHERE correo = ':correo' AND contrasena = ':contrasena'");
      $conect->bindParam(':email',  $email);
      $conect->bindParam(':contrasena',  $contrasena);
      $stm = $conect->execute();
      $resultado = $stm->fetchAll();
      var_dump($resultado);

      
//      if (pg_num_rows($consulta > 0)):
//        $mensajeOk = true;
//        $usua = pg_fetch_array($consulta);
//        session_start();
//        $_SESSION['id'] = $usua[0];
//        $_SESSION['usuario'] = $usua[1];
//        $mensajeError = 'Logueado correctamente';
//      else:
//        $mensajeError = 'Email y/o contraseña incorrecto';
//      endif;
    } else {
      $mensajeError = 'Email y/o contraseña incorrecto';
    }
  } else {
    $mensajeError = 'Email y/o contraseña incorrecto';
  }
} else {
  $mensajeError = 'Todos los campos son requeridos';
}
$salidaJson = array('respuesta' => $mensajeOk, 'mensaje' => $mensajeError);
echo json_encode($salidaJson);
