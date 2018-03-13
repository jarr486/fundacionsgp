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
 <section id="cuerpoContenidoNoticias">
     <br />
     <h1>Noticias</h1>
     <?
		$secciones=query("SELECT * FROM noticias WHERE tipo='1' ORDER BY id DESC");
		while($seccion=mysql_fetch_array($secciones)){
	?>
     <div id="noticiaContainer">
     	  <a href="detalle-noticia.php?id=<?=$seccion['id'];?>"><img src="<?=substr($seccion['imagen'],1,250);?>" border="0"></a>
     	  <h2><a href="detalle-noticia.php?id=<?=$seccion['id'];?>"><?=utf8_encode($seccion['titulo']);?></a></h2>
     	  <p><?=strip_tags(substr(utf8_encode($seccion['texto_peq']),0,180));?>...</p>
     	  <a href="detalle-noticia.php?id=<?=$seccion['id'];?>"><img src="images/btnleerMas.png" border="0" align="right" style="width:80px; height:24px;"></a>
     </div>
     <?
		}
	 ?>

     <div style="width: 100%; height: 150px; float: left;">&nbsp;</div>
 </section>
<?
 include("menuAlterno.php"); 
 include("footer.php");
?>

</body>
</html>