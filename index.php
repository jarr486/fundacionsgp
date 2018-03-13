<?
 include("includes.php");
 $slideActivo="home";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Fundación Social Gestores de Paz</title>
<meta name="description" content="Fundación Social Gestores de Paz, entidad sin animo de lucro dedicada desde 2013 a orientar y enseñar a la población infantil y juvenil en las comunas de Cali, en trabajos grupales en área de educación, deporte, artistica, y promoción de la convivencia familiar">
<meta name="keywords" content="Fundación Social Gestores de Paz, Gestores de Paz, orientar población infantil, orientacion enseñanza a población infantil, orientar población juvenil, orientacion enseñanza a población juvenil, comunas de Cali, promoción de la convivencia familiar. ">
<meta name="author" content="Jimmy Ramirez Rangel">
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

<link rel='stylesheet' id='camera-css' href='Scripts/slideshow/camera.css' type='text/css' media='all'>
<script type='text/javascript' src='Scripts/slideshow/jquery.min.js'></script>
<script type='text/javascript' src='Scripts/slideshow/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='Scripts/slideshow/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='Scripts/slideshow/camera.js'></script>


<script>
    jQuery(function(){
        
        jQuery('#camera_wrap_1').camera({
            thumbnails: true
        });

    });
</script>


<script type="text/javascript">
/*Noticias Plugin JARR*/

var ejecucion=1;
var ejecucionMenuAlterno=1;
var contadorNoticias = 0;

function pararRotador(){
    ejecucion=0;    
}

function iniciaRotador(){
    ejecucion=1;
}

setInterval('cambioNoticia()', 5000);    
setInterval('containerChange()', 1000);

function containerChange(){
    if(screen.availWidth<1024){
        if(ejecucionMenuAlterno==1){
            contenido="<iframe src='menuAlternoResponsive.php' width='100%' height='auto' frameborder='0' allowfullscreen style='border:0;  top:0; left: 0; width: 100%; height: 100%;' ></iframe>";
            document.getElementById('container').innerHTML=contenido;

            ejecucionMenuAlterno=0;
        }
    }
        
} 

function cambioNoticia(){
    if(ejecucion==1){
        contadorNoticias++;
        
        var contenido     =document.getElementById('noticiaCuerpo'+contadorNoticias).innerHTML;
        var contenidoText =document.getElementById('noticiaCuerpoa'+contadorNoticias).innerHTML;
        if(contadorNoticias>1){
           var calculo=contadorNoticias-1;
           document.getElementById('noticiaPanel'+calculo).className="noticiaPanel";
        }
        document.getElementById('noticiaPanel'+contadorNoticias).className="noticiaPanelActive";
        
        document.getElementById('noticiaB').innerHTML=contenido;
        document.getElementById('textoNoticia').innerHTML=contenidoText;
        if(contadorNoticias==4){
           //document.getElementById('noticiaPanel'+contadorNoticias).className="invisible"; 
           contadorNoticias=0;
        }
        
    }
} 

function cambioNoticiasA(numero){

        contadorNoticias=numero;
        
        var contenido     =document.getElementById('noticiaCuerpo'+contadorNoticias).innerHTML;
        var contenidoText =document.getElementById('noticiaCuerpoa'+contadorNoticias).innerHTML;

        document.getElementById('noticiaPanel1').className="noticiaPanel";
        document.getElementById('noticiaPanel2').className="noticiaPanel";
        document.getElementById('noticiaPanel3').className="noticiaPanel";
        document.getElementById('noticiaPanel4').className="noticiaPanel";

        document.getElementById('noticiaPanel'+contadorNoticias).className="noticiaPanelActive";
        
        document.getElementById('noticiaB').innerHTML=contenido;
        document.getElementById('textoNoticia').innerHTML=contenidoText;
        
}   

function cambiarVideo(ruta){
   document.getElementById('frameYoutube').src="https://www.youtube.com/embed/"+ruta;
} 

</script>

</head>

<body>
<?
 include("barTop.php");
 include("header.php");
 include("slideshow.php");
 include("panelAbout.php");
 include("panelNoticias.php");
 include("googleMaps.php");  
 include("footer.php");
?>

</body>
</html>