<?
 include("includes.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>CCDB</title>
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
     <br />
     <h1>Contáctenos</h1>
      <p align="justify">
         <? echo utf8_encode(abrir_idioma('texto_contacto')); ?>
      </p>

      <form name="Cotización" method="post" action="enviarContacto.php" enctype="multipart/form-data" id="Form1">
          
          <h2>Datos personales</h2><br />

          <div id="labelText">Nombre *</div>
          <div id="labelInput">
               <input type="text" id="nombre" name="nombre" value="" placeholder="Nombre" autofocus required>
          </div>

          <div id="labelText">Apellido *</div>
          <div id="labelInput">
               <input type="text" id="apellido" name="apellido" value="" placeholder="Apellido" required>
          </div>

          <div id="labelText">Ciudad</div>
          <div id="labelInput">
               <input type="text" id="ciudad" name="ciudad" value="" placeholder="Ciudad">
          </div>
          
          <div id="labelText">Teléfono *</div>
          <div id="labelInput">
               <input type="text" id="telefono" name="telefono" value="" maxlength="10" tabindex="4" placeholder="Teléfono" required>
          </div>
          
          <div id="labelText">E-Mail *</div>
          <div id="labelInput">
               <input type="email" id="correo" name="correo" pattern="^[a-zA-Z0-9.!#$%'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" value="" placeholder="E-Mail" required>
               <input name="action" type="hidden" id="action" value="contacto">
          </div>
          
          <div id="labelText">&nbsp;</div>
          <div id="labelInput">
               &nbsp;
          </div>
          
          Comentarios<br />
          <textarea id="comentarios" name="comentarios" rows="4" tabindex="25" style="width:80%;"></textarea><br /><br />
          <input type="submit" id="Button1" name="Button1" value="Enviar" accesskey="28" style="background:#A21C26; color:#FFF; border:none; font-size: 14px;  padding: 10px; ">
          <input type="reset" id="Button2" name="Button2" value="Borrar" tabindex="27" style="background:#CCC; color:#333; border:none; font-size: 14px;  padding: 10px; ">
          
      </form>
     <br /><br /><br />
 </section>
<?
 include("footer.php");
?>

</body>
</html>