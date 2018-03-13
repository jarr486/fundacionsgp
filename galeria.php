<?
include("includes.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>CCDB - GALERÍA IMÁGENES</title>
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
 
 	 <h2>Galería de imagenes</h2>
     <? echo utf8_encode(abrir_idioma('pagina_galeria')); ?><br /><br />
     <div id="gal" style="width:100%; height:400px;">
     <div id="gallery" style="float: left;  margin: 0 0 0 0;">
          
              <?
                $cont=0;
                $i=$cant*$pag;
                $fotos=query("SELECT * FROM albunes WHERE id!='1'");
                while($foto=mysql_fetch_array($fotos)){
                  if($foto['ancho']>$foto['alto']){
                      $tamano="width='100'";
                  }else{
                      $tamano="height='70'";
                  }
                  if($foto['thumbnail']!=""){
                     $imagen_album=$foto['thumbnail'];                 
                  }
                  $cant_fotos=query("SELECT count(*) FROM fotos WHERE album=$foto[id]",1);
              ?>
                  <div id="gallery" style="float: left;  margin: 0 10px 0 0; border: 10px solid #52a7c9; text-align:center;">
                  
                  <a href="detalle-galeria.php?id=<?=$foto['id']?>" title="<?=$foto['nombre']?>"><img src="<?=substr($foto['imagen'],1,250)?>" border="0" class="borde" <?=$tamano?>></a>
                   <br><b><?=$foto['nombre']?></b><br>Fotos(<?=$cant_fotos[0]?>)
                  </div>
              
              <?
                  $i++;
                  $cont++;
                }
              ?>
          
      </div>
      </div>
      <br /><br />
 </section>
<?
 include("menuAlterno.php"); 
 include("footer.php");
?>

</body>
</html>