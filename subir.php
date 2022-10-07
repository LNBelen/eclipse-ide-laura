<?php
include ("conexion.php");
 
if (isset ($_POST [ 'name' ])) {
      $nombre = $_POST [ 'name' ];
      $email  = $_POST [ 'email' ];
      $contra = $_POST [ 'contra' ];
      $fechaU = date ('m-d-Y h:i:s a' ,time());
      $fechaC = date ('m-d-Y h:i:s a',time());
 
  $consulta = "INSERT INTO user ('id, mail, password, created_at, updated_at') VALUES"
 
 
}
