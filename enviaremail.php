<?php 
header('Content-Type: text/html; charset=iso-8859-1');
include("includes.php");
include("files/phpmailer/class.phpmailer.php");


if(isset($_POST['action']) && $_POST['action']=='cotizar'){

    $nombre                 =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['nombre'])))));
    $apellido               =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['apellido'])))));
    $tipo                   =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['tipo'])))));
    $documento              =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['documento'])))));
    $fechaexpedicion        =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['fechaexpedicion'])))));
    $lugarexpedicion        =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['lugarexpedicion'])))));
    $fechanacimiento        =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['fechanacimiento'])))));
    $lugarnacimiento        =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['lugarnacimiento'])))));
    $tiposangre             =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['tiposangre'])))));
    $sexo                   =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['sexo'])))));
	$telefono               =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['telefono'])))));
    $celular                =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['celular'])))));
    $direccion              =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['direccion'])))));

    
    $barrio                 =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['barrio'])))));
    $comuna                 =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['comuna'])))));
    $ciudad                 =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['ciudad'])))));
    $departamento           =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['departamento'])))));
    $estrato                =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['estrato'])))));
    $escolaridad            =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['escolaridad'])))));
    $tipopoblacion          =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['tipopoblacion'])))));
    $correo                 =addslashes(htmlspecialchars(strip_tags(strtolower(utf8_decode($_POST['correo'])))));

    $estadocivil            =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['estadocivil'])))));
    $numhijos               =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['numhijos'])))));
    $libretamilitar         =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['libretamilitar'])))));
    $pase                   =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['pase'])))));
    $eps                    =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['eps'])))));
    $convenio               =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['convenio'])))));
    $programa               =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['programa'])))));
    $jornada                =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['jornada'])))));
    $contacto               =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['contacto'])))));
    $parentesco             =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['parentesco'])))));
    $telefonoContacto       =addslashes(htmlspecialchars(strip_tags(ucfirst(utf8_decode($_POST['telefonoContacto'])))));

    query("INSERT INTO preinscripcion (nombre,apellido,tipo,documento,fechaexpedicion,lugarexpedicion,fechanacimiento,lugarnacimiento,tiposangre,sexo,telefono,celular,direccion,barrio,comuna,ciudad,departamento,estrato,escolaridad,tipopoblacion,correo,estadocivil,numhijos,libretamilitar,pase,eps,convenio,programa,jornada,contacto,parentesco,telefonoContacto) VALUES('$nombre','$apellido','$tipo','$documento','$fechaexpedicion','$lugarexpedicion','$fechanacimiento','$lugarnacimiento','$tiposangre','$sexo','$telefono','$celular','$direccion','$barrio','$comuna','$ciudad','$departamento','$estrato','$escolaridad','$tipopoblacion','$correo','$estadocivil','$numhijos','$libretamilitar','$pase','$eps','$convenio','$programa','$jornada','$contacto','$parentesco','$telefonoContacto')");

	$destinatario           =addslashes(htmlspecialchars(strip_tags("coordinaciongeneral@ccdonbosco.org")));

	$asunto                 ="Pre inscripción Web";
	
    $nuevaplantilla ="<br /><br /><a href='http://www.ccdonbosco.org/site/'><img src='http://www.ccdonbosco.org/site/images/logo-centro-de-capacitacion-don-bosco.png' border='0' align='left'></a><br /><br />";  

    $nuevaplantilla.="<br /><br /><h2>Datos personales</h2><br /><strong>Nombre:</strong> ".utf8_decode($nombre);  
    $nuevaplantilla.="<br /><strong>Apellido:</strong> ".utf8_decode($apellido);
    $nuevaplantilla.="<br /><strong>Tipo de Identificacion:</strong> ".utf8_decode($tipo);
    $nuevaplantilla.="<br /><strong>No Documento Identidad:</strong> ".utf8_decode($documento);
    $nuevaplantilla.="<br /><strong>Fecha de expedición:</strong> ".$fechaexpedicion;
    $nuevaplantilla.=utf8_decode("<br /><strong>Lugar de expedición:</strong> ").$lugarexpedicion;
    $nuevaplantilla.="<br /><strong>Fecha Nacimiento:</strong> ".$fechanacimiento;
    $nuevaplantilla.="<br /><strong>Lugar de Nacimiento:</strong> ".utf8_decode($lugarnacimiento);
    $nuevaplantilla.="<br /><strong>Tipo de sangre:</strong> ".utf8_decode($tiposangre);
    $nuevaplantilla.="<br /><strong>Genero:</strong> ".utf8_decode($sexo);
    $nuevaplantilla.="<br /><strong>Teléfono Fijo:</strong> ".utf8_decode($telefono);
    $nuevaplantilla.="<br /><strong>Celular:</strong> ".utf8_decode($celular);
    $nuevaplantilla.="<br /><strong>Dirección:</strong> ".utf8_decode($direccion);
    $nuevaplantilla.="<br /><strong>Barrio:</strong> ".utf8_decode($barrio);
    $nuevaplantilla.="<br /><strong>Comuna:</strong> ".utf8_decode($comuna);
    $nuevaplantilla.="<br /><strong>Ciudad:</strong> ".utf8_decode($ciudad);
    $nuevaplantilla.="<br /><strong>Departamento:</strong> ".utf8_decode($departamento);
    $nuevaplantilla.="<br /><strong>Estrato:</strong> ".utf8_decode($estrato);
    $nuevaplantilla.="<br /><strong>Grado escolaridad:</strong> ".utf8_decode($escolaridad);
    $nuevaplantilla.="<br /><strong>Tipo Población:</strong> ".utf8_decode($tipopoblacion);
    $nuevaplantilla.="<br /><strong>E-Mail:</strong> ".utf8_decode($correo);
    $nuevaplantilla.="<br /><strong>Estado Civil:</strong> ".utf8_decode($estadocivil);
    $nuevaplantilla.="<br /><strong>Número de hijos:</strong> ".utf8_decode($numhijos);
    $nuevaplantilla.="<br /><strong>Libreta Militar:</strong> ".utf8_decode($libretamilitar);
    $nuevaplantilla.="<br /><strong>Pase:</strong> ".utf8_decode($pase);
    $nuevaplantilla.="<br /><strong>Eps:</strong> ".utf8_decode($eps);
    $nuevaplantilla.="<br /><strong>Convenio:</strong> ".utf8_decode($convenio);
  
    

    $nuevaplantilla.="<br /><h2>Programas Ofertados:</h2>";
    $nuevaplantilla.="<br /><strong>Programas Tecnicos:</strong> ".utf8_decode($programa);
    $nuevaplantilla.="<br /><strong>Jornada:</strong> ".utf8_decode($jornada);

    $nuevaplantilla.="<br /><h2>Datos del Acudiente:</h2>";
    $nuevaplantilla.="<br /><strong>Nombre Contacto:</strong> ".utf8_decode($contacto);
    $nuevaplantilla.="<br /><strong>Parentesco:</strong> ".utf8_decode($parentesco);
    $nuevaplantilla.="<br /><strong>Telefono Contacto:</strong> ".utf8_decode($telefonoContacto);
         


    //PHP MAILER
    $mail = new PHPMailer(); 
	
	$mail->Host = "localhost"; 
	$mail->From = "coordinaciongeneral@ccdonbosco.org"; 
	$mail->FromName = "Centro de Capacitación Don Bosco";
	$mail->IsHTML(true);			 
	$mail->Subject = $asunto; 
	$mail->AddAddress("coordinaciongeneral@ccdonbosco.org","Centro de Capacitación Don Bosco"); 
	$mail->AddAddress($correo,$nombre); 
	
	$mail->WordWrap = 50; 
	
	$body  = "Apreciado ".utf8_decode($nombre);
	$body .= $nuevaplantilla;
	$body .= utf8_decode("<p align=\"justify\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#943634; text-align:justify;\">\"Aviso de confidencialidad: Este mensaje es para el uso exclusivo de la persona o entidad a la que se encuentra dirigido y puede contener información privilegiada o confidencial de propiedad de Centro de Capacitación Don Bosco (CCDB) Cualquier revisión, copia, difusión y/o retransmisión a personas diferentes al destinatario no se encuentra autorizada y por lo tanto, se prohíbe. Si usted ha recibido por error esta comunicación, sírvase notificarnos de inmediato telefónicamente al (57-2) 4373531 - 4373541 - 4373530 o vía e-mail, borrar de inmediato el mensaje y abstenerse de divulgar su contenido.</p><p align=\"justify\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#943634; text-align:justify;\">Confidentiality notice: This message is intended only for the use of the individual or entity to which it is addressed and may contain information that is privileged or confidential property of Don Bosco Training Center (DBTC) Any review, copy, diffusion, retransmission, dissemination or other use of by different people than the intended recipient is not authorized and therefore, is forbidden. If you received this communication in error, please notify us immediately by telephone (57-2) 4373531 - 4373541 - 4373530 or by e-mail, delete the e-mail and do not disclose its content to any person.\"  </p><p align=\"justify\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#008000; text-align:justify;\">Antes de imprimir este correo, piense si realmente es necesario hacerlo, Considere su aporte a la conservación del Medio Ambiente con la reducción de consumo de Papel</p>");			
	$body .= utf8_decode("<p><a href=\"http://www.fundacionserca.org/no-mas-emailer.php?email=$correoelectronico\">No volver a recibir este correo</a></p>");			
	
	$mail->Body = $body;
	$mail->AltBody = strip_tags($nuevaplantilla); 

	$mail->Send(); 

}

?>
<script language="javascript" type="text/javascript"> 
   window.location="responseInscripcion.php";
</script>
