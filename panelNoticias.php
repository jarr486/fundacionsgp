<?
$seccion=query("SELECT * FROM noticias WHERE tipo='1' ORDER BY id DESC",1);
?>
<section id="noticias">
    
    <div id="noticiaB" onmouseover="pararRotador();" onmouseout="iniciaRotador();">
         <div class="fade-in">
             <h1>&nbsp;</h1>
             <a href="detalle-noticia.php?id=<?=$seccion['id'];?>"><img src="images/mask.png" style="background-image:url(<?=substr($seccion['imagen'],1,250);?>);" width="98%" height="70%" border="0" /></a>
         </div>
    </div>

    <div id="noticiaA">
         <div id="textoNoticia">
             <h1>&nbsp;</h1>
             <h2><a href="detalle-noticia.php?id=<?=$seccion['id'];?>"><?=utf8_encode($seccion['titulo']);?></a></h2>
             <?=strip_tags(substr(utf8_encode($seccion['texto_peq']),0,180));?>...      
         </div>
         
         <?
			$contador=1;
			$secciones=query("SELECT * FROM noticias WHERE tipo='1' ORDER BY id DESC LIMIT 4");
			while($seccion=mysql_fetch_array($secciones)){
		 ?>
         <div id="noticiaPanel<?=$contador?>" class="noticiaPanel">
              <a href="Javascript:void(0);" onclick="cambioNoticiasA('<?=$contador?>');"><img src="<?=substr($seccion['imagen'],1,250);?>" border="0"></a>

              <div id="noticiaCuerpo<?=$contador?>" class="invisible">
                   <div class="fade-in">
                     <h1>&nbsp;</h1>
                     <a href="detalle-noticia.php?id=<?=$seccion['id'];?>"><img src="images/mask.png" style="background-image:url(<?=substr($seccion['imagen'],1,250);?>);" width="98%" height="70%" border="0" /></a>
                   </div>
              </div>
              <div id="noticiaCuerpoa<?=$contador?>" class="invisible">
                   <div class="fade-in">
                     <h1>&nbsp;</h1>
                     <h2><a href="detalle-noticia.php?id=<?=$seccion['id'];?>"><?=utf8_encode($seccion['titulo']);?></a></h2>
                     <?=strip_tags(substr(utf8_encode($seccion['texto_peq']),0,180));?>...   
                   </div>
              </div>              
         </div>
         <?
		    $contador++;
			}
		 ?>

    </div>
    
</section>