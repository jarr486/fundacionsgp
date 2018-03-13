<?
session_start();
require("files/connection.php");
require("files/functions.php");
require("files/autenticacion.php");

@unlink($_GET['file']);
?>
<script language="javascript">
	alert('El archivo fue borrado');
	window.location="lista_imagenes.php?objeto=document.form1.src.value&mostrar_dominio=true";
</script>
