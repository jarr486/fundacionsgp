<?php 
header('Content-Type: text/html; charset=iso-8859-1');
include("includes.php");


if(isset($_GET['id']) && $_GET['id']!=''){

    $ident =strip_tags($_GET['id']);
    $ciudades=query("SELECT * FROM cuidades WHERE departamento='$ident'");
    while($ciudad=mysql_fetch_array($ciudades)){
?>
        <option value="<?=$ciudad['ciudad']?>"><?=$ciudad['ciudad']?></option>
<?
    }
}

?>