<?
session_start();
require("files/connection.php");
require("files/functions.php");
require("files/autenticacion.php");

@unlink($_GET['file']);
?>
<script language="javascript">
	alert('El archivo fue borrado');
	window.location="multimedia.php?objeto=<?=$_GET['objeto']?>&show=<?=$_GET['show']?>";
</script>
