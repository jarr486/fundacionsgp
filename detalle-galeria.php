<?
include("includes.php");

$idAlbum=mysql_real_escape_string(htmlspecialchars(htmlentities($_GET['id'])));


$fotos=query("SELECT * FROM fotos WHERE album='$idAlbum'");
$album=query("SELECT * FROM albunes WHERE id='$idAlbum'",1);
$cant_fotos=query("SELECT count(*) FROM fotos WHERE album=$idAlbum",1);
$cant_fotos=$cant_fotos[0];
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


<script type="text/javascript" src="Scripts/js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="Scripts/css/jquery.lightbox-0.5.css" media="screen" />
 <!-- Ativando o jQuery lightBox plugin -->
    <script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
</script>

</head>

<body>
<?
 include("barTop.php");
 include("header.php");
?>
 <section id="cuerpoContenido">
 
 	 <h2>Galería de imagenes <?=$album['nombre']?> (<?=$cant_fotos?>)</h2>
 	 <div id="gal" style="width:100%; height:600px;">
     <div id="gallery" style="float: left; margin: 0 0 0 0;">
          <ul>
              <?
                $cont=0;
                $i=$cant*$pag;
                while($foto=mysql_fetch_array($fotos)){
                  if($foto['ancho']>$foto['alto']){
                      $tamano="width='100'";
                  }else{
                      $tamano="height='70'";
                  }
                  if($foto['thumbnail']!=""){
                  $imagen_album=$foto['thumbnail'];                 
                  }
              ?>
              <li>
                  <a href="<?=$foto['imagen']?>" title="<?=$foto['nombre']?>"><img src="<?=$foto['thumbnail']?>" border="0" class="borde" <?=$tamano?>></a>
              </li>
              <?
                  $i++;
                  $cont++;
                }
              ?>
          </ul>
      </div>
      </div>
     
 </section>
<?
 include("menuAlterno.php"); 
 include("footer.php");
?>

</body>
</html>