<?
 include("includes.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>CCDB - SERVICIOS</title>
<meta name="description" content="Pagina web centro de capacitación Don Bosco">
<meta name="keywords" content="Capacitación, Comunidad Salesiana, CCDB, Don Bosco, Barrio el Diamante">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="SHORTCUT ICON" href="images/favicon.ico">

<script language="javascript" src="files/functions.js"></script>

<!-- Menu Responsive -->
<link rel="stylesheet" href="Scripts/menuVertical/css/style.css">
<link rel="stylesheet" href="Scripts/menuVertical/css/reset.css">
<script src="Scripts/menuVertical/js/modernizr.js"></script>
<script src="Scripts/menuVertical/js/jquery-2.1.4.js"></script>
<script src="Scripts/menuVertical/js/main.js"></script> 
<!-- Fin Menu Responsive -->

<link href="Scripts/style.css" rel="stylesheet" type="text/css">

</head>

<body>
<?
 include("barTop.php");
 include("header.php");
?>
 <section id="cuerpoContenido">
 
 	 <? echo utf8_encode(abrir_idioma('pagina_servicios')); ?>
     
 </section>
<?
 include("menuAlterno.php"); 
 include("footer.php");
?>

</body>
</html>