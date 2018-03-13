<?php 
header('Content-Type: text/html; charset=iso-8859-1');
include("includes.php");


if(isset($_GET['id']) && $_GET['id']!=''){

    $ident =strip_tags($_GET['id']);
    $jornadas=query("SELECT * FROM jornadasProgramas WHERE programa='$ident'");
    while($jornada=mysql_fetch_array($jornadas)){
?>
        <option value="<?=$jornada['nombre']?>"><?=$jornada['nombre']?></option>
<?
    }
}

?>