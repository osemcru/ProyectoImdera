<?php
$mysqli=new mysqli('localhost','root','','imdera');
if ($mysqli->connect_errno) {
  echo "Error al conectarse con My SQL debido al error".$mysqli->connect_error;
}
 ?>
