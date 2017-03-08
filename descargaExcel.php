<?php
	ob_start();
  //variable donde ingresaremos la tabla que queremos se muestre en nuestro documento
	$mostrar = '';
	echo $mostrar;

  //Cabeceras para obligar documento a descargarse en XLS
	header('Content-type: application/vnd.ms-excel');
	header("Content-Disposition: attachment; filename="NOMBRE DE TU ARCHIVO");
	header("Pragma: no-cache");
	header("Expires: 0");
	ob_end_flush();
?>
