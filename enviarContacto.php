<?php 
include("includes.php");

$nombre=addslashes(htmlspecialchars($_POST['nombre']));
$apellido=addslashes(htmlspecialchars($_POST['apellido']));
$ciudad=addslashes(htmlspecialchars($_POST['ciudad']));
$telefono=addslashes(htmlspecialchars($_POST['telefono']));
$correo=addslashes(htmlspecialchars($_POST['correo']));
$comentarios=addslashes(htmlspecialchars($_POST['comentarios']));
$destinatario=strip_tags(abrir_idioma('correo_contacto'));

$asunto="Contacto pagina web CCDB";
$msn="Mensaje escrito: ".date("d-m-y")."Nombre: ".$nombre." ".$apellido." Ciudad: ".$ciudad." , Telefono: ".$telefono." , Correo electronico: ".$correo." , redacto el siguiente mensaje: ".$comentarios ;
mail($destinatario,$asunto,$msn);
mail($correo,$asunto,$msn);

?>
<script language="javascript" type="text/javascript"> 
alert("se envio su mensaje, pronto atenderemos su inquietud.");
window.location="index.php";
</script>
