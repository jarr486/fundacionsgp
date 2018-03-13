
<?
 include("includes.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

<script type="text/javascript">
function recargarS2(val){
 
   //esperando la carga...
   $('#jornada').html('<option value="">Cargando...valores</option>'); 
   //realizo la call via jquery ajax
   $.ajax({
        url: 'procesar.php',
        data: 'id='+val,
        success: function(resp){
         $('#jornada').html(resp) 
         }
    });
}
</script>
<!-- Fin Menu Responsive -->

<link href="Scripts/style.css" rel="stylesheet" type="text/css">

</head>

<body>
<?
 include("barTop.php");
 include("header.php");
?>



<br /> <br /><br /><br /><br /><br /><br />


 <section id="cuerpoContenido">
     

     <!-- <p align="justify">
     
    <h1 style="line-height: 25px;">En este momento las convocatorias han sido cerradas, debes estar pendiente de las próximas inscripciones en el 2017, muchas gracias por contar con nosotros.</h1>
       
       <br /><br /><br />

   </p> -->




 <!-- inicio de formulario de inscripcion  -->




     <h1>Formulario De Inscripción</h1>
   
     <p align="justify">
        Este formulario debe ser diligenciado por aquellas personas que esten interesadas en iniciar una formacion tecnica laboral en el Centro de Capacitacion Don Bosco. <br /><br /><br />

         Los campos marcados con * son obligatorios.
      </p>

      <form name="Inscripcion" method="post" action="enviaremail.php" enctype="multipart/form-data" id="Form1">
          
          <h2>Datos Personales</h2><br />

          <div id="labelText">Nombre *</div>
          <div id="labelInput">
               <input type="text" id="nombre" name="nombre" value="" placeholder="Nombre" autofocus required>
          </div>

          <div id="labelText">Apellido *</div>
          <div id="labelInput">
               <input type="text" id="apellido" name="apellido" value="" placeholder="Apellido" required>
          </div>


          <div id="labelText">Tipo de Identificacion *</div>
          <div id="labelInput">
               <select id="tipo" name="tipo" required>
                      <option selected="">Seleccione Uno</option>
                      <option value ="Registro civil">Registro civil</option>
                      <option value ="Tarjeta de identidad">Tarjeta de identidad</option>
                      <option value ="Cedula">Cedula</option>
                      <option value ="Extranjero">Extranjero</option>
                      
               </select>
          </div>
      

          <div id="labelText">No Documento Identidad *</div>
          <div id="labelInput">
               <input type="text" id="documento" name="documento" value="" placeholder="Documento" required>
          </div>


        
          <div id="labelText">Fecha de expedición *</div>
          <div id="labelInput">
               <input type="date" id="fechaexpedicion" name="fechaexpedicion" value="" placeholder="Fecha de expedición" required>
          </div>


          <div id="labelText">Lugar de expedición</div>
          <div id="labelInput">
               <input type="text" id="lugarexpedicion" name="lugarexpedicion" value="" placeholder="lugar">
          </div>

       
           <div id="labelText">Fecha Nacimiento *</div>
           <div id="labelInput">
              
           <input type="date" id="fechanacimiento" name="fechanacimiento" value="" placeholder="Fecha Nacimiento" required>
           </div>



           <div id="labelText">Lugar de Nacimiento *</div>
           <div id="labelInput">
              
           <input type="text" id="lugarnacimiento" name="lugarnacimiento" value="" placeholder="Lugar Nacimiento" required>
           </div>


       
           <div id="labelText">Tipo de sangre *</div>
               <div id="labelInput">
               <select id="tiposangre" name="tiposangre" required>

                      <option selected="">Seleccione Uno</option>

                      <option value="O+">O+</option>
                      <option value="O-">O-</option>
                      <option value="A+">A+</option>
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>


                      
               </select>
          </div>


          <div id="labelText">Genero *</div>
               <div id="labelInput">
               <select id="sexo" name="sexo" required>
                      <option selected="">Seleccione Uno</option>
                      <option value="Femenino">Femenino</option>
                      <option value="Masculino">Masculino</option>
                      
               </select>
          </div>


          <div id="labelText">Teléfono Fijo *</div>
          <div id="labelInput">
               <input type="text" id="telefono" name="telefono" value="" maxlength="10" placeholder="Teléfono" required>
          </div>

          <div id="labelText">Celular *</div>
          <div id="labelInput">
               <input type="text" id="celular" name="celular" value="" maxlength="10" placeholder="Celular" required>
          </div>


          <div id="labelText">Dirección *</div>
          <div id="labelInput">
               <input type="text" id="direccion" name="direccion" value="" placeholder="Dirección" required>
          </div>



          <div id="labelText">Barrio</div>
          <div id="labelInput">
               <input type="text" id="barrio" name="barrio" value="" placeholder="Barrio" >
          </div>

          <div id="labelText">Comuna</div>
          <div id="labelInput">
               <input type="text" id="comuna" name="comuna" value="" placeholder="comuna" >
          </div>

          
          
          <div id="labelText">Ciudad *</div>
               <div id="labelInput">
               <select id="ciudad" name="ciudad" required>
                      <option selected="">Seleccione Uno</option>
           
                      <option value="Abejorral">Abejorral</option>
                      <option value="Abrego">Abrego</option>
                      <option value="Abriaqui">Abriaqui</option>
                      <option value="Acacias">Acacias</option>
                      <option value="Acandi">Acandi</option>
                      <option value="Acevedo">Acevedo</option>
                      <option value="Achi">Achi</option>
                      <option value="Agrado">Agrado</option>
                      <option value="Agua de dios">Agua de dios</option>
                      <option value="Aguachica">Aguachica</option>
                      <option value="Aguada">Aguada</option>
                      <option value="Aguadas">Aguadas</option>
                      <option value="Aguazul">Aguazul</option>
                      <option value="Agustin codazzi">Agustin codazzi</option>
                      <option value="Aipe">Aipe</option>
                      <option value="Alban">Alban</option>
                      <option value="Alban">Alban</option>
                      <option value="Albania">Albania</option>
                      <option value="Albania">Albania</option>
                      <option value="Albania">Albania</option>
                      <option value="Alcala">Alcala</option>
                      <option value="Aldana">Aldana</option>
                      <option value="Alejandria">Alejandria</option>
                      <option value="Algarrobo">Algarrobo</option>
                      <option value="Algeciras">Algeciras</option>
                      <option value="Almaguer">Almaguer</option>
                      <option value="Almeida">Almeida</option>
                      <option value="Alpujarra">Alpujarra</option>
                      <option value="Altamira">Altamira</option>
                      <option value="Alto baudo (pie de pato)">Alto baudo (pie de pato)</option>
                      <option value="Altos del rosario">Altos del rosario</option>
                      <option value="Alvarado">Alvarado</option>
                      <option value="Amaga">Amaga</option>
                      <option value="Amalfi">Amalfi</option>
                      <option value="Ambalema">Ambalema</option>
                      <option value="Anapoima">Anapoima</option>
                      <option value="Ancuya">Ancuya</option>
                      <option value="Andalucia">Andalucia</option>
                      <option value="Andes">Andes</option>
                      <option value="Angelopolis">Angelopolis</option>
                      <option value="Angostura">Angostura</option>
                      <option value="Anolaima">Anolaima</option>
                      <option value="Anori">Anori</option>
                      <option value="Anserma">Anserma</option>
                      <option value="Ansermanuevo">Ansermanuevo</option>
                      <option value="Anza">Anza</option>
                      <option value="Anzoategui">Anzoategui</option>
                      <option value="Apartado">Apartado</option>
                      <option value="Apia">Apia</option>
                      <option value="Aquitania">Aquitania</option>
                      <option value="Aracataca">Aracataca</option>
                      <option value="Aranzazu">Aranzazu</option>
                      <option value="Aratoca">Aratoca</option>
                      <option value="Arauca">Arauca</option>
                      <option value="Arauquita">Arauquita</option>
                      <option value="Arbelaez">Arbelaez</option>
                      <option value="Arboleda">Arboleda</option>
                      <option value="Arboledas">Arboledas</option>
                      <option value="Arboletes">Arboletes</option>
                      <option value="Arcabuco">Arcabuco</option>
                      <option value="Arenal">Arenal</option>
                      <option value="Argelia">Argelia</option>
                      <option value="Argelia">Argelia</option>
                      <option value="Argelia">Argelia</option>
                      <option value="Ariguani">Ariguani</option>
                      <option value="Arjona">Arjona</option>
                      <option value="Armenia">Armenia</option>
                      <option value="Armenia">Armenia</option>
                      <option value="Armero (guayabal)">Armero (guayabal)</option>
                      <option value="Arroyohondo">Arroyohondo</option>
                      <option value="Astrea">Astrea</option>
                      <option value="Ataco">Ataco</option>
                      <option value="Atrato">Atrato</option>
                      <option value="Ayapel">Ayapel</option>
                      <option value="Bagado">Bagado</option>
                      <option value="Bahia solano (mutis)">Bahia solano (mutis)</option>
                      <option value="Bajo baudo (pizarro)">Bajo baudo (pizarro)</option>
                      <option value="Balboa">Balboa</option>
                      <option value="Balboa">Balboa</option>
                      <option value="Baranoa">Baranoa</option>
                      <option value="Baraya">Baraya</option>
                      <option value="Barbacoas">Barbacoas</option>
                      <option value="Barbosa">Barbosa</option>
                      <option value="Barbosa">Barbosa</option>
                      <option value="Barichara">Barichara</option>
                      <option value="Barranca de upia">Barranca de upia</option>
                      <option value="Barrancabermeja">Barrancabermeja</option>
                      <option value="Barrancas">Barrancas</option>
                      <option value="Barranco de loba">Barranco de loba</option>
                      <option value="Barranquilla">Barranquilla</option>
                      <option value="Becerril">Becerril</option>
                      <option value="Belalcazar">Belalcazar</option>
                      <option value="Belen">Belen</option>
                      <option value="Belen">Belen</option>
                      <option value="Belen andaquies">Belen andaquies</option>
                      <option value="Belen de umbria">Belen de umbria</option>
                      <option value="Bello">Bello</option>
                      <option value="Belmira">Belmira</option>
                      <option value="Beltran">Beltran</option>
                      <option value="Berbeo">Berbeo</option>
                      <option value="Betania">Betania</option>
                      <option value="Beteitiva">Beteitiva</option>
                      <option value="Betulia">Betulia</option>
                      <option value="Betulia">Betulia</option>
                      <option value="Bituima">Bituima</option>
                      <option value="Boavita">Boavita</option>
                      <option value="Bochalema">Bochalema</option>
                      <option value="Bogota d.c.">Bogota d.c.</option>
                      <option value="Bojaca">Bojaca</option>
                      <option value="Bojaya (bellavista)">Bojaya (bellavista)</option>
                      <option value="Bolivar">Bolivar</option>
                      <option value="Bolivar">Bolivar</option>
                      <option value="Bolivar">Bolivar</option>
                      <option value="Bolivar">Bolivar</option>
                      <option value="Bosconia">Bosconia</option>
                      <option value="Boyaca">Boyaca</option>
                      <option value="Briceño">Briceño</option>
                      <option value="Briceño">Briceño</option>
                      <option value="Bucaramanga">Bucaramanga</option>
                      <option value="Bucarasica">Bucarasica</option>
                      <option value="Buenaventura">Buenaventura</option>
                      <option value="Buenaventura">Buenaventura</option>
                      <option value="Buenaventura">Buenaventura</option>
                      <option value="Buenaventura">Buenaventura</option>
                      <option value="Buenavista">Buenavista</option>
                      <option value="Buenavista">Buenavista</option>
                      <option value="Buenavista">Buenavista</option>
                      <option value="Buenavista">Buenavista</option>
                      <option value="Buenos aires">Buenos aires</option>
                      <option value="Buesaco">Buesaco</option>
                      <option value="Buga">Buga</option>
                      <option value="Bugalagrande">Bugalagrande</option>
                      <option value="Buritica">Buritica</option>
                      <option value="Busbanza">Busbanza</option>
                      <option value="Cabrera">Cabrera</option>
                      <option value="Cabrera">Cabrera</option>
                      <option value="Cabuyaro">Cabuyaro</option>
                      <option value="Caceres">Caceres</option>
                      <option value="Cachipay">Cachipay</option>
                      <option value="Cachira">Cachira</option>
                      <option value="Cacota">Cacota</option>
                      <option value="Caicedo">Caicedo</option>
                      <option value="Caicedonia">Caicedonia</option>
                      <option value="Caimito">Caimito</option>
                      <option value="Cajamarca">Cajamarca</option>
                      <option value="Cajibio">Cajibio</option>
                      <option value="Cajica">Cajica</option>
                      <option value="Calamar">Calamar</option>
                      <option value="Calamar">Calamar</option>
                      <option value="Calarca">Calarca</option>
                      <option value="Caldas">Caldas</option>
                      <option value="Caldas">Caldas</option>
                      <option value="Caldono">Caldono</option>
                      <option value="Cali">Cali</option>
                      <option value="California">California</option>
                      <option value="Calima-darien">Calima-darien</option>
                      <option value="Caloto">Caloto</option>
                      <option value="Campamento">Campamento</option>
                      <option value="Campo de la cruz">Campo de la cruz</option>
                      <option value="Campoalegre">Campoalegre</option>
                      <option value="Campohermoso">Campohermoso</option>
                      <option value="Canalete">Canalete</option>
                      <option value="Candelaria">Candelaria</option>
                      <option value="Candelaria">Candelaria</option>
                      <option value="Cantagallo">Cantagallo</option>
                      <option value="Canton de san pablo">Canton de san pablo</option>
                      <option value="Cañasgordas">Cañasgordas</option>
                      <option value="Caparrapi">Caparrapi</option>
                      <option value="Capitanejo">Capitanejo</option>
                      <option value="Caqueza">Caqueza</option>
                      <option value="Caracoli">Caracoli</option>
                      <option value="Caramanta">Caramanta</option>
                      <option value="Carcasi">Carcasi</option>
                      <option value="Carepa">Carepa</option>
                      <option value="Carmen de apicala">Carmen de apicala</option>
                      <option value="Carmen de carupa">Carmen de carupa</option>
                      <option value="Carmen de viboral">Carmen de viboral</option>
                      <option value="Carmen del darien">Carmen del darien</option>
                      <option value="Carolina">Carolina</option>
                      <option value="Cartagena">Cartagena</option>
                      <option value="Cartagena del chaira">Cartagena del chaira</option>
                      <option value="Cartago">Cartago</option>
                      <option value="Caruru">Caruru</option>
                      <option value="Casabianca">Casabianca</option>
                      <option value="Castilla la nueva">Castilla la nueva</option>
                      <option value="Caucasia">Caucasia</option>
                      <option value="Cepita">Cepita</option>
                      <option value="Cerete">Cerete</option>
                      <option value="Cerinza">Cerinza</option>
                      <option value="Cerrito">Cerrito</option>
                      <option value="Cerro san antonio">Cerro san antonio</option>
                      <option value="Certegui">Certegui</option>
                      <option value="Chachagui">Chachagui</option>
                      <option value="Chaguani">Chaguani</option>
                      <option value="Chalan">Chalan</option>
                      <option value="Chameza">Chameza</option>
                      <option value="Chaparral">Chaparral</option>
                      <option value="Charala">Charala</option>
                      <option value="Charta">Charta</option>
                      <option value="Chia">Chia</option>
                      <option value="Chigorodo">Chigorodo</option>
                      <option value="Chima">Chima</option>
                      <option value="Chima">Chima</option>
                      <option value="Chimichagua">Chimichagua</option>
                      <option value="Chinacota">Chinacota</option>
                      <option value="Chinavita">Chinavita</option>
                      <option value="Chinchina">Chinchina</option>
                      <option value="Chinu">Chinu</option>
                      <option value="Chipaque">Chipaque</option>
                      <option value="Chipata">Chipata</option>
                      <option value="Chiquinquira">Chiquinquira</option>
                      <option value="Chiquiza">Chiquiza</option>
                      <option value="Chiriguana">Chiriguana</option>
                      <option value="Chiscas">Chiscas</option>
                      <option value="Chita">Chita</option>
                      <option value="Chitaga">Chitaga</option>
                      <option value="Chitaraque">Chitaraque</option>
                      <option value="Chivata">Chivata</option>
                      <option value="Chivolo">Chivolo</option>
                      <option value="Chivor">Chivor</option>
                      <option value="Choachi">Choachi</option>
                      <option value="Choconta">Choconta</option>
                      <option value="Cicuco">Cicuco</option>
                      <option value="Cienaga">Cienaga</option>
                      <option value="Cienaga de oro">Cienaga de oro</option>
                      <option value="Cienega">Cienega</option>
                      <option value="Cimitarra">Cimitarra</option>
                      <option value="Circasia">Circasia</option>
                      <option value="Cisneros">Cisneros</option>
                      <option value="Clemencia">Clemencia</option>
                      <option value="Cocorna">Cocorna</option>
                      <option value="Coello">Coello</option>
                      <option value="Cogua">Cogua</option>
                      <option value="Colombia">Colombia</option>
                      <option value="Colon">Colon</option>
                      <option value="Colon-genova">Colon-genova</option>
                      <option value="Coloso">Coloso</option>
                      <option value="Combita">Combita</option>
                      <option value="Concepcion">Concepcion</option>
                      <option value="Concepcion">Concepcion</option>
                      <option value="Concordia">Concordia</option>
                      <option value="Concordia">Concordia</option>
                      <option value="Condoto">Condoto</option>
                      <option value="Confines">Confines</option>
                      <option value="Consaca">Consaca</option>
                      <option value="Contadero">Contadero</option>
                      <option value="Contratacion">Contratacion</option>
                      <option value="Convencion">Convencion</option>
                      <option value="Copacabana">Copacabana</option>
                      <option value="Coper">Coper</option>
                      <option value="Cordoba">Cordoba</option>
                      <option value="Cordoba">Cordoba</option>
                      <option value="Cordoba">Cordoba</option>
                      <option value="Corinto">Corinto</option>
                      <option value="Coromoro">Coromoro</option>
                      <option value="Corozal">Corozal</option>
                      <option value="Corrales">Corrales</option>
                      <option value="Cota">Cota</option>
                      <option value="Cotorra">Cotorra</option>
                      <option value="Covarachia">Covarachia</option>
                      <option value="Coveñas">Coveñas</option>
                      <option value="Coyaima">Coyaima</option>
                      <option value="Cravo norte">Cravo norte</option>
                      <option value="Cuaspud-carlosama">Cuaspud-carlosama</option>
                      <option value="Cubara">Cubara</option>
                      <option value="Cubarral">Cubarral</option>
                      <option value="Cucaita">Cucaita</option>
                      <option value="Cucunuba">Cucunuba</option>
                      <option value="Cucuta">Cucuta</option>
                      <option value="Cucutilla">Cucutilla</option>
                      <option value="Cuitiva">Cuitiva</option>
                      <option value="Cumaral">Cumaral</option>
                      <option value="Cumaribo">Cumaribo</option>
                      <option value="Cumbal">Cumbal</option>
                      <option value="Cumbitara">Cumbitara</option>
                      <option value="Cunday">Cunday</option>
                      <option value="Curillo">Curillo</option>
                      <option value="Curiti">Curiti</option>
                      <option value="Curumani">Curumani</option>
                      <option value="Dabeiba">Dabeiba</option>
                      <option value="Dagua">Dagua</option>
                      <option value="Dibulla">Dibulla</option>
                      <option value="Distraccion">Distraccion</option>
                      <option value="Dolores">Dolores</option>
                      <option value="Don matias">Don matias</option>
                      <option value="Dosquebradas">Dosquebradas</option>
                      <option value="Duitama">Duitama</option>
                      <option value="Durania">Durania</option>
                      <option value="Ebejico">Ebejico</option>
                      <option value="El aguila">El aguila</option>
                      <option value="El bagre">El bagre</option>
                      <option value="El banco">El banco</option>
                      <option value="El cairo">El cairo</option>
                      <option value="El calvario">El calvario</option>
                      <option value="El carmen">El carmen</option>
                      <option value="El carmen">El carmen</option>
                      <option value="El carmen">El carmen</option>
                      <option value="El carmen de bolivar">El carmen de bolivar</option>
                      <option value="El castillo">El castillo</option>
                      <option value="El cerrito">El cerrito</option>
                      <option value="El charco">El charco</option>
                      <option value="El cocuy">El cocuy</option>
                      <option value="El colegio">El colegio</option>
                      <option value="El copey">El copey</option>
                      <option value="El doncello">El doncello</option>
                      <option value="El dorado">El dorado</option>
                      <option value="El dovio">El dovio</option>
                      <option value="El espino">El espino</option>
                      <option value="El guacamayo">El guacamayo</option>
                      <option value="El guamo">El guamo</option>
                      <option value="El molino">El molino</option>
                      <option value="El paso">El paso</option>
                      <option value="El paujil">El paujil</option>
                      <option value="El peñol">El peñol</option>
                      <option value="El peñon">El peñon</option>
                      <option value="El peñon">El peñon</option>
                      <option value="El peñon">El peñon</option>
                      <option value="El piñon">El piñon</option>
                      <option value="El playon">El playon</option>
                      <option value="El poblado">El poblado</option>
                      <option value="El reten">El reten</option>
                      <option value="El retorno">El retorno</option>
                      <option value="El roble">El roble</option>
                      <option value="El rosal">El rosal</option>
                      <option value="El rosario">El rosario</option>
                      <option value="El tablon">El tablon</option>
                      <option value="El tambo">El tambo</option>
                      <option value="El tambo">El tambo</option>
                      <option value="El tarra">El tarra</option>
                      <option value="El zulia">El zulia</option>
                      <option value="Elias">Elias</option>
                      <option value="Encino">Encino</option>
                      <option value="Enciso">Enciso</option>
                      <option value="Entrerrios">Entrerrios</option>
                      <option value="Envigado">Envigado</option>
                      <option value="Espinal">Espinal</option>
                      <option value="Estrella">Estrella</option>
                      <option value="Facatativa">Facatativa</option>
                      <option value="Falan">Falan</option>
                      <option value="Filadelfia">Filadelfia</option>
                      <option value="Filandia">Filandia</option>
                      <option value="Firavitoba">Firavitoba</option>
                      <option value="Flandes">Flandes</option>
                      <option value="Florencia">Florencia</option>
                      <option value="Florencia">Florencia</option>
                      <option value="Floresta">Floresta</option>
                      <option value="Florian">Florian</option>
                      <option value="Florida">Florida</option>
                      <option value="Floridablanca">Floridablanca</option>
                      <option value="Fomeque">Fomeque</option>
                      <option value="Fonseca">Fonseca</option>
                      <option value="Fortul">Fortul</option>
                      <option value="Fosca">Fosca</option>
                      <option value="Francisco pizarro">Francisco pizarro</option>
                      <option value="Fredonia">Fredonia</option>
                      <option value="Fresno">Fresno</option>
                      <option value="Frontino">Frontino</option>
                      <option value="Fuente de oro">Fuente de oro</option>
                      <option value="Fundacion">Fundacion</option>
                      <option value="Funes">Funes</option>
                      <option value="Funza">Funza</option>
                      <option value="Fuquene">Fuquene</option>
                      <option value="Fusagasuga">Fusagasuga</option>
                      <option value="Gachala">Gachala</option>
                      <option value="Gachancipa">Gachancipa</option>
                      <option value="Gachantiva">Gachantiva</option>
                      <option value="Gacheta">Gacheta</option>
                      <option value="Galan">Galan</option>
                      <option value="Galapa">Galapa</option>
                      <option value="Galeras">Galeras</option>
                      <option value="Gama">Gama</option>
                      <option value="Gamarra">Gamarra</option>
                      <option value="Gambita">Gambita</option>
                      <option value="Gameza">Gameza</option>
                      <option value="Garagoa">Garagoa</option>
                      <option value="Garzon">Garzon</option>
                      <option value="Genova">Genova</option>
                      <option value="Gigante">Gigante</option>
                      <option value="Ginebra">Ginebra</option>
                      <option value="Giraldo">Giraldo</option>
                      <option value="Girardot">Girardot</option>
                      <option value="Girardota">Girardota</option>
                      <option value="Giron">Giron</option>
                      <option value="Gomez plata">Gomez plata</option>
                      <option value="Gonzalez">Gonzalez</option>
                      <option value="Gramalote">Gramalote</option>
                      <option value="Granada">Granada</option>
                      <option value="Granada">Granada</option>
                      <option value="Granada">Granada</option>
                      <option value="Guaca">Guaca</option>
                      <option value="Guacamayas">Guacamayas</option>
                      <option value="Guacari">Guacari</option>
                      <option value="Guacheta">Guacheta</option>
                      <option value="Guachucal">Guachucal</option>
                      <option value="Guadalupe">Guadalupe</option>
                      <option value="Guadalupe">Guadalupe</option>
                      <option value="Guadalupe">Guadalupe</option>
                      <option value="Guaduas">Guaduas</option>
                      <option value="Guaitarilla">Guaitarilla</option>
                      <option value="Gualmatan">Gualmatan</option>
                      <option value="Guamal">Guamal</option>
                      <option value="Guamal">Guamal</option>
                      <option value="Guamo">Guamo</option>
                      <option value="Guapi">Guapi</option>
                      <option value="Guapota">Guapota</option>
                      <option value="Guaranda">Guaranda</option>
                      <option value="Guarne">Guarne</option>
                      <option value="Guasca">Guasca</option>
                      <option value="Guatape">Guatape</option>
                      <option value="Guataqui">Guataqui</option>
                      <option value="Guatavita">Guatavita</option>
                      <option value="Guateque">Guateque</option>
                      <option value="Guatica">Guatica</option>
                      <option value="Guavata">Guavata</option>
                      <option value="Guayabal de siquima">Guayabal de siquima</option>
                      <option value="Guayabetal">Guayabetal</option>
                      <option value="Guayata">Guayata</option>
                      <option value="Guepsa">Guepsa</option>
                      <option value="Guican">Guican</option>
                      <option value="Gutierrez">Gutierrez</option>
                      <option value="Hacari">Hacari</option>
                      <option value="Hatillo de loba">Hatillo de loba</option>
                      <option value="Hato">Hato</option>
                      <option value="Hato corozal">Hato corozal</option>
                      <option value="Hatonuevo">Hatonuevo</option>
                      <option value="Heliconia">Heliconia</option>
                      <option value="Herran">Herran</option>
                      <option value="Herveo">Herveo</option>
                      <option value="Hispania">Hispania</option>
                      <option value="Hobo">Hobo</option>
                      <option value="Honda">Honda</option>
                      <option value="Ibague">Ibague</option>
                      <option value="Icononzo">Icononzo</option>
                      <option value="Iles">Iles</option>
                      <option value="Imues">Imues</option>
                      <option value="Inza">Inza</option>
                      <option value="Ipiales">Ipiales</option>
                      <option value="Iquira">Iquira</option>
                      <option value="Isnos">Isnos</option>
                      <option value="Istmina">Istmina</option>
                      <option value="Itagui">Itagui</option>
                      <option value="Itagui">Itagui</option>
                      <option value="Ituango">Ituango</option>
                      <option value="Iza">Iza</option>
                      <option value="Jambalo">Jambalo</option>
                      <option value="Jamundi">Jamundi</option>
                      <option value="Jardin">Jardin</option>
                      <option value="Jenesano">Jenesano</option>
                      <option value="Jerico">Jerico</option>
                      <option value="Jerico">Jerico</option>
                      <option value="Jerusalen">Jerusalen</option>
                      <option value="Jesus maria">Jesus maria</option>
                      <option value="Jordan">Jordan</option>
                      <option value="Juan de acosta">Juan de acosta</option>
                      <option value="Junin">Junin</option>
                      <option value="Jurado">Jurado</option>
                      <option value="La apartada">La apartada</option>
                      <option value="La argentina">La argentina</option>
                      <option value="La belleza">La belleza</option>
                      <option value="La calera">La calera</option>
                      <option value="La capilla">La capilla</option>
                      <option value="La ceja">La ceja</option>
                      <option value="La celia">La celia</option>
                      <option value="La cruz">La cruz</option>
                      <option value="La cumbre">La cumbre</option>
                      <option value="La dorada">La dorada</option>
                      <option value="La esperanza">La esperanza</option>
                      <option value="La estrella">La estrella</option>
                      <option value="La florida">La florida</option>
                      <option value="La gloria">La gloria</option>
                      <option value="La jagua de ibirico">La jagua de ibirico</option>
                      <option value="La jagua del pilar">La jagua del pilar</option>
                      <option value="La llanada">La llanada</option>
                      <option value="La macarena">La macarena</option>
                      <option value="La merced">La merced</option>
                      <option value="La mesa">La mesa</option>
                      <option value="La montañita">La montañita</option>
                      <option value="La palma">La palma</option>
                      <option value="La paz">La paz</option>
                      <option value="La peña">La peña</option>
                      <option value="La pintada">La pintada</option>
                      <option value="La plata">La plata</option>
                      <option value="La playa">La playa</option>
                      <option value="La primavera">La primavera</option>
                      <option value="La salina">La salina</option>
                      <option value="La sierra">La sierra</option>
                      <option value="La tebaida">La tebaida</option>
                      <option value="La tola">La tola</option>
                      <option value="La union">La union</option>
                      <option value="La union">La union</option>
                      <option value="La union">La union</option>
                      <option value="La union">La union</option>
                      <option value="La uribe">La uribe</option>
                      <option value="La uvita">La uvita</option>
                      <option value="La vega">La vega</option>
                      <option value="La vega">La vega</option>
                      <option value="La victoria">La victoria</option>
                      <option value="La victoria">La victoria</option>
                      <option value="La virginia">La virginia</option>
                      <option value="Labateca">Labateca</option>
                      <option value="Labranzagrande">Labranzagrande</option>
                      <option value="Landazuri">Landazuri</option>
                      <option value="Lebrija">Lebrija</option>
                      <option value="Leiva">Leiva</option>
                      <option value="Lejanias">Lejanias</option>
                      <option value="Lenguazaque">Lenguazaque</option>
                      <option value="Lerida">Lerida</option>
                      <option value="Leticia">Leticia</option>
                      <option value="Libano">Libano</option>
                      <option value="Liborina">Liborina</option>
                      <option value="Linares">Linares</option>
                      <option value="Litoral del san juan">Litoral del san juan</option>
                      <option value="Lloro">Lloro</option>
                      <option value="Lopez">Lopez</option>
                      <option value="Lorica">Lorica</option>
                      <option value="Los andes">Los andes</option>
                      <option value="Los cordobas">Los cordobas</option>
                      <option value="Los palmitos">Los palmitos</option>
                      <option value="Los patios">Los patios</option>
                      <option value="Los santos">Los santos</option>
                      <option value="Lourdes">Lourdes</option>
                      <option value="Luruaco">Luruaco</option>
                      <option value="Macanal">Macanal</option>
                      <option value="Macaravita">Macaravita</option>
                      <option value="Maceo">Maceo</option>
                      <option value="Macheta">Macheta</option>
                      <option value="Madrid">Madrid</option>
                      <option value="Magangue">Magangue</option>
                      <option value="Magui-payan">Magui-payan</option>
                      <option value="Mahates">Mahates</option>
                      <option value="Maicao">Maicao</option>
                      <option value="Majagual">Majagual</option>
                      <option value="Malaga">Malaga</option>
                      <option value="Malambo">Malambo</option>
                      <option value="Mallama">Mallama</option>
                      <option value="Manati">Manati</option>
                      <option value="Manaure">Manaure</option>
                      <option value="Manaure">Manaure</option>
                      <option value="Mani">Mani</option>
                      <option value="Manizales">Manizales</option>
                      <option value="Manta">Manta</option>
                      <option value="Manzanares">Manzanares</option>
                      <option value="Mapiripan">Mapiripan</option>
                      <option value="Margarita">Margarita</option>
                      <option value="Maria la baja">Maria la baja</option>
                      <option value="Marinilla">Marinilla</option>
                      <option value="Maripi">Maripi</option>
                      <option value="Mariquita">Mariquita</option>
                      <option value="Marmato">Marmato</option>
                      <option value="Marquetalia">Marquetalia</option>
                      <option value="Marsella">Marsella</option>
                      <option value="Marulanda">Marulanda</option>
                      <option value="Matanza">Matanza</option>
                      <option value="Medellin">Medellin</option>
                      <option value="Medina">Medina</option>
                      <option value="Medio atrato">Medio atrato</option>
                      <option value="Medio baudo">Medio baudo</option>
                      <option value="Medio san juan">Medio san juan</option>
                      <option value="Melgar">Melgar</option>
                      <option value="Mercaderes">Mercaderes</option>
                      <option value="Mesetas">Mesetas</option>
                      <option value="Milan">Milan</option>
                      <option value="Miraflores">Miraflores</option>
                      <option value="Miraflores">Miraflores</option>
                      <option value="Miranda">Miranda</option>
                      <option value="Mistrato">Mistrato</option>
                      <option value="Mitu">Mitu</option>
                      <option value="Mocoa">Mocoa</option>
                      <option value="Mogotes">Mogotes</option>
                      <option value="Molagavita">Molagavita</option>
                      <option value="Momil">Momil</option>
                      <option value="Mompos">Mompos</option>
                      <option value="Mongua">Mongua</option>
                      <option value="Mongui">Mongui</option>
                      <option value="Moniquira">Moniquira</option>
                      <option value="Montebello">Montebello</option>
                      <option value="Montecristo">Montecristo</option>
                      <option value="Montelibano">Montelibano</option>
                      <option value="Montenegro">Montenegro</option>
                      <option value="Monteria">Monteria</option>
                      <option value="Monterrey">Monterrey</option>
                      <option value="Moñitos">Moñitos</option>
                      <option value="Morales">Morales</option>
                      <option value="Morales">Morales</option>
                      <option value="Morelia">Morelia</option>
                      <option value="Morroa">Morroa</option>
                      <option value="Mosquera">Mosquera</option>
                      <option value="Mosquera">Mosquera</option>
                      <option value="Motavita">Motavita</option>
                      <option value="Murillo">Murillo</option>
                      <option value="Murindo">Murindo</option>
                      <option value="Mutata">Mutata</option>
                      <option value="Mutiscua">Mutiscua</option>
                      <option value="Muzo">Muzo</option>
                      <option value="Nariño">Nariño</option>
                      <option value="Nariño">Nariño</option>
                      <option value="Nariño">Nariño</option>
                      <option value="Nataga">Nataga</option>
                      <option value="Natagaima">Natagaima</option>
                      <option value="Nechi">Nechi</option>
                      <option value="Necocli">Necocli</option>
                      <option value="Neira">Neira</option>
                      <option value="Neiva">Neiva</option>
                      <option value="Nemocon">Nemocon</option>
                      <option value="Nilo">Nilo</option>
                      <option value="Nimaima">Nimaima</option>
                      <option value="Nobsa">Nobsa</option>
                      <option value="Nocaima">Nocaima</option>
                      <option value="Norcasia">Norcasia</option>
                      <option value="Novita">Novita</option>
                      <option value="Nueva granada">Nueva granada</option>
                      <option value="Nuevo colon">Nuevo colon</option>
                      <option value="Nunchia">Nunchia</option>
                      <option value="Nuqui">Nuqui</option>
                      <option value="Obando">Obando</option>
                      <option value="Ocamonte">Ocamonte</option>
                      <option value="Ocaña">Ocaña</option>
                      <option value="Oiba">Oiba</option>
                      <option value="Oicata">Oicata</option>
                      <option value="Olaya">Olaya</option>
                      <option value="Olaya herrera">Olaya herrera</option>
                      <option value="Onzaga">Onzaga</option>
                      <option value="Oporapa">Oporapa</option>
                      <option value="Orito">Orito</option>
                      <option value="Orocue">Orocue</option>
                      <option value="Ortega">Ortega</option>
                      <option value="Ospina">Ospina</option>
                      <option value="Otanche">Otanche</option>
                      <option value="Ovejas">Ovejas</option>
                      <option value="Pachavita">Pachavita</option>
                      <option value="Pacho">Pacho</option>
                      <option value="Pacora">Pacora</option>
                      <option value="Padilla">Padilla</option>
                      <option value="Paez">Paez</option>
                      <option value="Paez">Paez</option>
                      <option value="Paicol">Paicol</option>
                      <option value="Pailitas">Pailitas</option>
                      <option value="Paime">Paime</option>
                      <option value="Paipa">Paipa</option>
                      <option value="Pajarito">Pajarito</option>
                      <option value="Palermo">Palermo</option>
                      <option value="Palestina">Palestina</option>
                      <option value="Palestina">Palestina</option>
                      <option value="Palmar">Palmar</option>
                      <option value="Palmar de varela">Palmar de varela</option>
                      <option value="Palmas del socorro">Palmas del socorro</option>
                      <option value="Palmira">Palmira</option>
                      <option value="Palmito">Palmito</option>
                      <option value="Palocabildo">Palocabildo</option>
                      <option value="Pamplona">Pamplona</option>
                      <option value="Pamplonita">Pamplonita</option>
                      <option value="Pandi">Pandi</option>
                      <option value="Panqueba">Panqueba</option>
                      <option value="Paramo">Paramo</option>
                      <option value="Paratebueno">Paratebueno</option>
                      <option value="Pasca">Pasca</option>
                      <option value="Pasto">Pasto</option>
                      <option value="Patia (el bordo)">Patia (el bordo)</option>
                      <option value="Pauna">Pauna</option>
                      <option value="Paya">Paya</option>
                      <option value="Paz de ariporo">Paz de ariporo</option>
                      <option value="Paz del rio">Paz del rio</option>
                      <option value="Pedraza">Pedraza</option>
                      <option value="Pelaya">Pelaya</option>
                      <option value="Pensilvania">Pensilvania</option>
                      <option value="Peñol">Peñol</option>
                      <option value="Peque">Peque</option>
                      <option value="Pereira">Pereira</option>
                      <option value="Pesca">Pesca</option>
                      <option value="Piamonte">Piamonte</option>
                      <option value="Piedecuesta">Piedecuesta</option>
                      <option value="Piedras">Piedras</option>
                      <option value="Piendamo">Piendamo</option>
                      <option value="Pijao">Pijao</option>
                      <option value="Pijiño del carmen">Pijiño del carmen</option>
                      <option value="Pinchote">Pinchote</option>
                      <option value="Pinillos">Pinillos</option>
                      <option value="Piojo">Piojo</option>
                      <option value="Pisba">Pisba</option>
                      <option value="Pital">Pital</option>
                      <option value="Pitalito">Pitalito</option>
                      <option value="Pivijay">Pivijay</option>
                      <option value="Planadas">Planadas</option>
                      <option value="Planeta rica">Planeta rica</option>
                      <option value="Plato">Plato</option>
                      <option value="Policarpa">Policarpa</option>
                      <option value="Polo nuevo">Polo nuevo</option>
                      <option value="Ponedera">Ponedera</option>
                      <option value="Popayan">Popayan</option>
                      <option value="Pore">Pore</option>
                      <option value="Potosi">Potosi</option>
                      <option value="Pradera">Pradera</option>
                      <option value="Prado">Prado</option>
                      <option value="Providencia">Providencia</option>
                      <option value="Providencia">Providencia</option>
                      <option value="Pueblo bello">Pueblo bello</option>
                      <option value="Pueblo nuevo">Pueblo nuevo</option>
                      <option value="Pueblo rico">Pueblo rico</option>
                      <option value="Pueblorrico">Pueblorrico</option>
                      <option value="Puebloviejo">Puebloviejo</option>
                      <option value="Puente nacional">Puente nacional</option>
                      <option value="Puerres">Puerres</option>
                      <option value="Puerto asis">Puerto asis</option>
                      <option value="Puerto berrio">Puerto berrio</option>
                      <option value="Puerto boyaca">Puerto boyaca</option>
                      <option value="Puerto carreño">Puerto carreño</option>
                      <option value="Puerto caycedo">Puerto caycedo</option>
                      <option value="Puerto colombia">Puerto colombia</option>
                      <option value="Puerto concordia">Puerto concordia</option>
                      <option value="Puerto escondido">Puerto escondido</option>
                      <option value="Puerto gaitan">Puerto gaitan</option>
                      <option value="Puerto guzman">Puerto guzman</option>
                      <option value="Puerto inirida">Puerto inirida</option>
                      <option value="Puerto leguizamo">Puerto leguizamo</option>
                      <option value="Puerto libertador">Puerto libertador</option>
                      <option value="Puerto lleras">Puerto lleras</option>
                      <option value="Puerto lopez">Puerto lopez</option>
                      <option value="Puerto nare">Puerto nare</option>
                      <option value="Puerto nariño">Puerto nariño</option>
                      <option value="Puerto parra">Puerto parra</option>
                      <option value="Puerto rico">Puerto rico</option>
                      <option value="Puerto rico">Puerto rico</option>
                      <option value="Puerto rondon">Puerto rondon</option>
                      <option value="Puerto salgar">Puerto salgar</option>
                      <option value="Puerto santander">Puerto santander</option>
                      <option value="Puerto tejada">Puerto tejada</option>
                      <option value="Puerto triunfo">Puerto triunfo</option>
                      <option value="Puerto wilches">Puerto wilches</option>
                      <option value="Puli">Puli</option>
                      <option value="Pupiales">Pupiales</option>
                      <option value="Purace">Purace</option>
                      <option value="Purificacion">Purificacion</option>
                      <option value="Purisima">Purisima</option>
                      <option value="Quebradanegra">Quebradanegra</option>
                      <option value="Quetame">Quetame</option>
                      <option value="Quibdo">Quibdo</option>
                      <option value="Quimbaya">Quimbaya</option>
                      <option value="Quinchia">Quinchia</option>
                      <option value="Quipama">Quipama</option>
                      <option value="Quipile">Quipile</option>
                      <option value="Rafael reyes">Rafael reyes</option>
                      <option value="Ragonvalia">Ragonvalia</option>
                      <option value="Ramiriqui">Ramiriqui</option>
                      <option value="Raquira">Raquira</option>
                      <option value="Recetor">Recetor</option>
                      <option value="Regidor">Regidor</option>
                      <option value="Remedios">Remedios</option>
                      <option value="Remolino">Remolino</option>
                      <option value="Repelon">Repelon</option>
                      <option value="Restrepo">Restrepo</option>
                      <option value="Restrepo">Restrepo</option>
                      <option value="Retiro">Retiro</option>
                      <option value="Ricaurte">Ricaurte</option>
                      <option value="Ricaurte">Ricaurte</option>
                      <option value="Rio de oro">Rio de oro</option>
                      <option value="Rio iro">Rio iro</option>
                      <option value="Rio quito">Rio quito</option>
                      <option value="Rio viejo">Rio viejo</option>
                      <option value="Rioblanco">Rioblanco</option>
                      <option value="Riofrio">Riofrio</option>
                      <option value="Riohacha">Riohacha</option>
                      <option value="Rionegro">Rionegro</option>
                      <option value="Rionegro">Rionegro</option>
                      <option value="Riosucio">Riosucio</option>
                      <option value="Riosucio">Riosucio</option>
                      <option value="Risaralda">Risaralda</option>
                      <option value="Rivera">Rivera</option>
                      <option value="Roberto payan">Roberto payan</option>
                      <option value="Robles (la paz)">Robles (la paz)</option>
                      <option value="Roldanillo">Roldanillo</option>
                      <option value="Roncesvalles">Roncesvalles</option>
                      <option value="Rondon">Rondon</option>
                      <option value="Rosas">Rosas</option>
                      <option value="Rovira">Rovira</option>
                      <option value="Sabana de torres">Sabana de torres</option>
                      <option value="Sabanagrande">Sabanagrande</option>
                      <option value="Sabanalarga">Sabanalarga</option>
                      <option value="Sabanalarga">Sabanalarga</option>
                      <option value="Sabanalarga">Sabanalarga</option>
                      <option value="Sabanas de san angel">Sabanas de san angel</option>
                      <option value="Sabaneta">Sabaneta</option>
                      <option value="Saboya">Saboya</option>
                      <option value="Sacama">Sacama</option>
                      <option value="Sachica">Sachica</option>
                      <option value="Sahagun">Sahagun</option>
                      <option value="Saladoblanco">Saladoblanco</option>
                      <option value="Salamina">Salamina</option>
                      <option value="Salamina">Salamina</option>
                      <option value="Salazar">Salazar</option>
                      <option value="Saldaña">Saldaña</option>
                      <option value="Salento">Salento</option>
                      <option value="Salgar">Salgar</option>
                      <option value="Samaca">Samaca</option>
                      <option value="Samana">Samana</option>
                      <option value="Samaniego">Samaniego</option>
                      <option value="Sampues">Sampues</option>
                      <option value="San  antonio del  tequendama">San  antonio del  tequendama</option>
                      <option value="San  vicente del caguan">San  vicente del caguan</option>
                      <option value="San agustin">San agustin</option>
                      <option value="San alberto">San alberto</option>
                      <option value="San andres">San andres</option>
                      <option value="San andres">San andres</option>
                      <option value="San andres">San andres</option>
                      <option value="San andres sotavento">San andres sotavento</option>
                      <option value="San antero">San antero</option>
                      <option value="San antonio">San antonio</option>
                      <option value="San benito">San benito</option>
                      <option value="San benito abad">San benito abad</option>
                      <option value="San bernardo">San bernardo</option>
                      <option value="San bernardo">San bernardo</option>
                      <option value="San bernardo viento">San bernardo viento</option>
                      <option value="San calixto">San calixto</option>
                      <option value="San carlos">San carlos</option>
                      <option value="San carlos">San carlos</option>
                      <option value="San carlos de guaroa">San carlos de guaroa</option>
                      <option value="San cayetano">San cayetano</option>
                      <option value="San cayetano">San cayetano</option>
                      <option value="San cristobal">San cristobal</option>
                      <option value="San diego">San diego</option>
                      <option value="San eduardo">San eduardo</option>
                      <option value="San estanislao">San estanislao</option>
                      <option value="San fernando">San fernando</option>
                      <option value="San francisco">San francisco</option>
                      <option value="San francisco">San francisco</option>
                      <option value="San francisco">San francisco</option>
                      <option value="San gil">San gil</option>
                      <option value="San jacinto">San jacinto</option>
                      <option value="San jacinto del cauca">San jacinto del cauca</option>
                      <option value="San jeronimo">San jeronimo</option>
                      <option value="San joaquin">San joaquin</option>
                      <option value="San jose">San jose</option>
                      <option value="San jose de fragua">San jose de fragua</option>
                      <option value="San jose de la montaña">San jose de la montaña</option>
                      <option value="San jose de miranda">San jose de miranda</option>
                      <option value="San jose de pare">San jose de pare</option>
                      <option value="San jose del guaviare">San jose del guaviare</option>
                      <option value="San jose del palmar">San jose del palmar</option>
                      <option value="San juan de arama">San juan de arama</option>
                      <option value="San juan de betulia">San juan de betulia</option>
                      <option value="San juan de nepomuceno">San juan de nepomuceno</option>
                      <option value="San juan de rioseco">San juan de rioseco</option>
                      <option value="San juan de uraba">San juan de uraba</option>
                      <option value="San juan del cesar">San juan del cesar</option>
                      <option value="San juanito">San juanito</option>
                      <option value="San lorenzo">San lorenzo</option>
                      <option value="San luis">San luis</option>
                      <option value="San luis">San luis</option>
                      <option value="San luis de gaceno">San luis de gaceno</option>
                      <option value="San luis de palenque">San luis de palenque</option>
                      <option value="San marcos">San marcos</option>
                      <option value="San martin">San martin</option>
                      <option value="San martin">San martin</option>
                      <option value="San martin de loba">San martin de loba</option>
                      <option value="San mateo">San mateo</option>
                      <option value="San miguel">San miguel</option>
                      <option value="San miguel">San miguel</option>
                      <option value="San miguel de sema">San miguel de sema</option>
                      <option value="San onofre">San onofre</option>
                      <option value="San pablo">San pablo</option>
                      <option value="San pablo">San pablo</option>
                      <option value="San pablo de borbur">San pablo de borbur</option>
                      <option value="San pedro">San pedro</option>
                      <option value="San pedro">San pedro</option>
                      <option value="San pedro">San pedro</option>
                      <option value="San pedro de cartago">San pedro de cartago</option>
                      <option value="San pedro de uraba">San pedro de uraba</option>
                      <option value="San pelayo">San pelayo</option>
                      <option value="San rafael">San rafael</option>
                      <option value="San roque">San roque</option>
                      <option value="San sebastian">San sebastian</option>
                      <option value="San sebastian de buenavista">San sebastian de buenavista</option>
                      <option value="San vicente">San vicente</option>
                      <option value="San vicente de chucuri">San vicente de chucuri</option>
                      <option value="San zenon">San zenon</option>
                      <option value="Sandona">Sandona</option>
                      <option value="Santa ana">Santa ana</option>
                      <option value="Santa barbara">Santa barbara</option>
                      <option value="Santa barbara">Santa barbara</option>
                      <option value="Santa barbara">Santa barbara</option>
                      <option value="Santa barbara de pinto">Santa barbara de pinto</option>
                      <option value="Santa catalina">Santa catalina</option>
                      <option value="Santa fe de antioquia">Santa fe de antioquia</option>
                      <option value="Santa helena">Santa helena</option>
                      <option value="Santa isabel">Santa isabel</option>
                      <option value="Santa lucia">Santa lucia</option>
                      <option value="Santa maria">Santa maria</option>
                      <option value="Santa maria">Santa maria</option>
                      <option value="Santa marta">Santa marta</option>
                      <option value="Santa rosa">Santa rosa</option>
                      <option value="Santa rosa">Santa rosa</option>
                      <option value="Santa rosa de cabal">Santa rosa de cabal</option>
                      <option value="Santa rosa de osos">Santa rosa de osos</option>
                      <option value="Santa rosa de viterbo">Santa rosa de viterbo</option>
                      <option value="Santa rosa del sur">Santa rosa del sur</option>
                      <option value="Santa rosalia">Santa rosalia</option>
                      <option value="Santa sofia">Santa sofia</option>
                      <option value="Santacruz">Santacruz</option>
                      <option value="Santana">Santana</option>
                      <option value="Santander de quilichao">Santander de quilichao</option>
                      <option value="Santiago">Santiago</option>
                      <option value="Santiago">Santiago</option>
                      <option value="Santiago de Cali">Santiago de Cali</option>
                      <option value="Santo domingo">Santo domingo</option>
                      <option value="Santo tomas">Santo tomas</option>
                      <option value="Santuario">Santuario</option>
                      <option value="Santuario">Santuario</option>
                      <option value="Sapuyes">Sapuyes</option>
                      <option value="Saravena">Saravena</option>
                      <option value="Sardinata">Sardinata</option>
                      <option value="Sasaima">Sasaima</option>
                      <option value="Sativanorte">Sativanorte</option>
                      <option value="Sativasur">Sativasur</option>
                      <option value="Segovia">Segovia</option>
                      <option value="Sesquile">Sesquile</option>
                      <option value="Sevilla">Sevilla</option>
                      <option value="Siachoque">Siachoque</option>
                      <option value="Sibate">Sibate</option>
                      <option value="Sibundoy">Sibundoy</option>
                      <option value="Silos">Silos</option>
                      <option value="Silvania">Silvania</option>
                      <option value="Silvia">Silvia</option>
                      <option value="Simacota">Simacota</option>
                      <option value="Simijaca">Simijaca</option>
                      <option value="Simiti">Simiti</option>
                      <option value="Since">Since</option>
                      <option value="Sincelejo">Sincelejo</option>
                      <option value="Sipi">Sipi</option>
                      <option value="Sitionuevo">Sitionuevo</option>
                      <option value="Soacha">Soacha</option>
                      <option value="Soata">Soata</option>
                      <option value="Socha">Socha</option>
                      <option value="Socorro">Socorro</option>
                      <option value="Socota">Socota</option>
                      <option value="Sogamoso">Sogamoso</option>
                      <option value="Solano">Solano</option>
                      <option value="Soledad">Soledad</option>
                      <option value="Solita">Solita</option>
                      <option value="Somondoco">Somondoco</option>
                      <option value="Sonson">Sonson</option>
                      <option value="Sopetran">Sopetran</option>
                      <option value="Soplaviento">Soplaviento</option>
                      <option value="Sopo">Sopo</option>
                      <option value="Sora">Sora</option>
                      <option value="Soraca">Soraca</option>
                      <option value="Sotaquira">Sotaquira</option>
                      <option value="Sotara">Sotara</option>
                      <option value="Suaita">Suaita</option>
                      <option value="Suan">Suan</option>
                      <option value="Suarez">Suarez</option>
                      <option value="Suarez">Suarez</option>
                      <option value="Suaza">Suaza</option>
                      <option value="Subachoque">Subachoque</option>
                      <option value="Sucre">Sucre</option>
                      <option value="Sucre">Sucre</option>
                      <option value="Sucre">Sucre</option>
                      <option value="Suesca">Suesca</option>
                      <option value="Supata">Supata</option>
                      <option value="Supia">Supia</option>
                      <option value="Surata">Surata</option>
                      <option value="Susa">Susa</option>
                      <option value="Susacon">Susacon</option>
                      <option value="Sutamarchan">Sutamarchan</option>
                      <option value="Sutatausa">Sutatausa</option>
                      <option value="Sutatenza">Sutatenza</option>
                      <option value="Tabio">Tabio</option>
                      <option value="Tado">Tado</option>
                      <option value="Talaigua nuevo">Talaigua nuevo</option>
                      <option value="Tamalameque">Tamalameque</option>
                      <option value="Tamara">Tamara</option>
                      <option value="Tame">Tame</option>
                      <option value="Tamesis">Tamesis</option>
                      <option value="Taminango">Taminango</option>
                      <option value="Tangua">Tangua</option>
                      <option value="Taraira">Taraira</option>
                      <option value="Taraza">Taraza</option>
                      <option value="Tarqui">Tarqui</option>
                      <option value="Tarso">Tarso</option>
                      <option value="Tasco">Tasco</option>
                      <option value="Tauramena">Tauramena</option>
                      <option value="Tausa">Tausa</option>
                      <option value="Tello">Tello</option>
                      <option value="Tena">Tena</option>
                      <option value="Tenerife">Tenerife</option>
                      <option value="Tenjo">Tenjo</option>
                      <option value="Tenza">Tenza</option>
                      <option value="Teorama">Teorama</option>
                      <option value="Teruel">Teruel</option>
                      <option value="Tesalia">Tesalia</option>
                      <option value="Tibacuy">Tibacuy</option>
                      <option value="Tibana">Tibana</option>
                      <option value="Tibasosa">Tibasosa</option>
                      <option value="Tibirita">Tibirita</option>
                      <option value="Tibu">Tibu</option>
                      <option value="Tierralta">Tierralta</option>
                      <option value="Timana">Timana</option>
                      <option value="Timbio">Timbio</option>
                      <option value="Timbiqui">Timbiqui</option>
                      <option value="Tinjaca">Tinjaca</option>
                      <option value="Tipacoque">Tipacoque</option>
                      <option value="Tiquisio">Tiquisio</option>
                      <option value="Titiribi">Titiribi</option>
                      <option value="Toca">Toca</option>
                      <option value="Tocaima">Tocaima</option>
                      <option value="Tocancifa">Tocancifa</option>
                      <option value="Tocancipa">Tocancipa</option>
                      <option value="Togui">Togui</option>
                      <option value="Toledo">Toledo</option>
                      <option value="Toledo">Toledo</option>
                      <option value="Tolu">Tolu</option>
                      <option value="Toluviejo">Toluviejo</option>
                      <option value="Tona">Tona</option>
                      <option value="Topaga">Topaga</option>
                      <option value="Topaipi">Topaipi</option>
                      <option value="Toribio">Toribio</option>
                      <option value="Toro">Toro</option>
                      <option value="Tota">Tota</option>
                      <option value="Totoro">Totoro</option>
                      <option value="Trinidad">Trinidad</option>
                      <option value="Trujillo">Trujillo</option>
                      <option value="Tubara">Tubara</option>
                      <option value="Tulua">Tulua</option>
                      <option value="Tumaco">Tumaco</option>
                      <option value="Tunja">Tunja</option>
                      <option value="Tunungua">Tunungua</option>
                      <option value="Tuquerres">Tuquerres</option>
                      <option value="Turbaco">Turbaco</option>
                      <option value="Turbana">Turbana</option>
                      <option value="Turbo">Turbo</option>
                      <option value="Turmeque">Turmeque</option>
                      <option value="Tuta">Tuta</option>
                      <option value="Tutasa">Tutasa</option>
                      <option value="Ubala">Ubala</option>
                      <option value="Ubaque">Ubaque</option>
                      <option value="Ubate">Ubate</option>
                      <option value="Ulloa">Ulloa</option>
                      <option value="Umbita">Umbita</option>
                      <option value="Une">Une</option>
                      <option value="Unguia">Unguia</option>
                      <option value="Union panamericana">Union panamericana</option>
                      <option value="Uramita">Uramita</option>
                      <option value="Uribia">Uribia</option>
                      <option value="Urrao">Urrao</option>
                      <option value="Urumita">Urumita</option>
                      <option value="Usiacuri">Usiacuri</option>
                      <option value="Utica">Utica</option>
                      <option value="Valdivia">Valdivia</option>
                      <option value="Valencia">Valencia</option>
                      <option value="Valle de s juan">Valle de s juan</option>
                      <option value="Valle del guamuez">Valle del guamuez</option>
                      <option value="Valle san jose">Valle san jose</option>
                      <option value="Valledupar">Valledupar</option>
                      <option value="Valparaiso">Valparaiso</option>
                      <option value="Valparaiso">Valparaiso</option>
                      <option value="Vegachi">Vegachi</option>
                      <option value="Velez">Velez</option>
                      <option value="Venadillo">Venadillo</option>
                      <option value="Venecia">Venecia</option>
                      <option value="Venecia (ospina perez)">Venecia (ospina perez)</option>
                      <option value="Ventaquemada">Ventaquemada</option>
                      <option value="Vergara">Vergara</option>
                      <option value="Versalles">Versalles</option>
                      <option value="Vetas">Vetas</option>
                      <option value="Viani">Viani</option>
                      <option value="Victoria">Victoria</option>
                      <option value="Vigia del fuerte">Vigia del fuerte</option>
                      <option value="Vijes">Vijes</option>
                      <option value="Villa de leyva">Villa de leyva</option>
                      <option value="Villa del rosario">Villa del rosario</option>
                      <option value="Villa rica">Villa rica</option>
                      <option value="Villacaro">Villacaro</option>
                      <option value="Villagarzon">Villagarzon</option>
                      <option value="Villagomez">Villagomez</option>
                      <option value="Villagorgona">Villagorgona</option>
                      <option value="Villahermosa">Villahermosa</option>
                      <option value="Villamaria">Villamaria</option>
                      <option value="Villanueva">Villanueva</option>
                      <option value="Villanueva">Villanueva</option>
                      <option value="Villanueva">Villanueva</option>
                      <option value="Villanueva">Villanueva</option>
                      <option value="Villapinzon">Villapinzon</option>
                      <option value="Villarrica">Villarrica</option>
                      <option value="Villavicencio">Villavicencio</option>
                      <option value="Villavieja">Villavieja</option>
                      <option value="Villeta">Villeta</option>
                      <option value="Viota">Viota</option>
                      <option value="Viracacha">Viracacha</option>
                      <option value="Vista hermosa">Vista hermosa</option>
                      <option value="Yacopi">Yacopi</option>
                      <option value="Yacuanquer">Yacuanquer</option>
                      <option value="Yaguara">Yaguara</option>
                      <option value="Yali">Yali</option>
                      <option value="Yarumal">Yarumal</option>
                      <option value="Yolombo">Yolombo</option>
                      <option value="Yondo">Yondo</option>
                      <option value="Yopal">Yopal</option>
                      <option value="Yotoco">Yotoco</option>
                      <option value="Yumbo">Yumbo</option>
                      <option value="Zambrano">Zambrano</option>
                      <option value="Zapatoca">Zapatoca</option>
                      <option value="Zapayan">Zapayan</option>
                      <option value="Zaragoza">Zaragoza</option>
                      <option value="Zarzal">Zarzal</option>
                      <option value="Zetaquira">Zetaquira</option>
                      <option value="Zipacon">Zipacon</option>
                      <option value="Zipaquira">Zipaquira</option>
                      <option value="Zona bananera">Zona bananera</option>  

                      
               </select>
          </div>


          
          <div id="labelText">Departamento *</div>
               <div id="labelInput">
               <select id="departamento" name="departamento" required>
                      <option selected="">Seleccione Uno</option>
                  
                       <option value="Amazonas">Amazonas</option>
                       <option value="Antioquia">Antioquia</option>
                       <option value="Arauca">Arauca</option>
                       <option value="Atlántico">Atlántico</option>
                       <option value="Bolívar">Bolívar</option>
                       <option value="Boyacá">Boyacá</option>
                       <option value="Caldas">Caldas</option>
                       <option value="Caquetá">Caquetá</option>
                       <option value="Casanare">Casanare</option>
                       <option value="Cauca">Cauca</option>
                       <option value="Cesar">Cesar</option>
                       <option value="Chocó">Chocó</option>
                       <option value="Córdoba">Córdoba</option>
                       <option value="Cundinamarca">Cundinamarca</option>
                       <option value="Guainía">Guainía</option>
                       <option value="Guaviare">Guaviare</option>
                       <option value="Huila">Huila</option>
                       <option value="La guajira">La guajira</option>
                       <option value="Magdalena">Magdalena</option>
                       <option value="Meta">Meta</option>
                       <option value="Nariño">Nariño</option>
                       <option value="Norte de santander">Norte de santander</option>
                       <option value="Putumayo">Putumayo</option>
                       <option value="Quindío">Quindío</option>
                       <option value="Risaralda">Risaralda</option>
                       <option value="San andrés y providencia">San andrés y providencia</option>
                       <option value="Santander">Santander</option>
                       <option value="Sucre">Sucre</option>
                       <option value="Tolima">Tolima</option>
                       <option value="Valle del cauca">Valle del cauca</option>
                       <option value="Vaupés">Vaupés</option>
                       <option value="Vichada">Vichada</option>
                      
               </select>
          </div>


          
           <div id="labelText">Estrato *</div>
               <div id="labelInput">
               <select id="estrato" name="estrato" required>
                      <option selected="">Seleccione Uno</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      
               </select>
          </div>



          <div id="labelText">Grado escolaridad *</div>
               <div id="labelInput">
               <select id="escolaridad" name="escolaridad" required>
                      <option selected="">Seleccione Uno</option>
                      <option value="Estudiante media">Estudiante media</option>
                      <option value="Bachiller academico">Bachiller academico</option>
                      <option value="Bachiller tecnico">Bachiller tecnico</option>
                      <option value="Basica primaria">Basica primaria</option>
                      <option value="Basica secundaria">Basica secundaria</option>
                      <option value="Tecnico">Tecnico</option>
                      <option value="Tecnico profesional">Tecnico profesional</option>
                      <option value="Tecnologo">Tecnologo</option>
                      <option value="Pregrado">Pregrado</option>
                      <option value="Bachiller media tecnica">Bachiller media tecnica</option>

               </select>
          </div>


          <div id="labelText">&nbsp;</div>
          <div id="labelInput">
               &nbsp;
          </div>

        
           <div id="labelText">Tipo Población *</div>
               <div id="labelInput">
               <select id="tipopoblacion" name="tipopoblacion" required>
                      <option selected="">Seleccione Uno</option>
                      <option value="Indigena desplazado por la violencia">Indigena desplazado por la violencia</option>
                      <option value="Desplazado por la violencia">Desplazado por la violencia</option>
                      <option value="Desplazado por fenomenos naturales">Desplazado por fenomenos naturales</option>
                      <option value="Discapacitado">Discapacitado</option>
                      <option value="Indigena">Indigena</option>
                      <option value="Jovenes Vulnerables">Jovenes Vulnerables</option>
                      <option value="Mujer cabeza de familia">Mujer cabeza de familia</option>
                      <option value="Negritudes">Negritudes</option>
                      <option value="Desmovilizados">Desmovilizados</option>
                      <option value="Tercera edad">Tercera edad</option>
                      <option value="Trabajador infantil">Trabajador infantil</option>
                      <option value="Artesano">Artesano</option>
                      <option value="Micro empresarios">Micro empresarios</option>
                      <option value="Emprendedores">Emprendedores</option>
                      <option value="Afro colombiano desplazado por la violencia">Afro colombiano desplazado por la violencia</option>
                      <option value="Afro colombiano cabeza de familia desplazado por la violencia">Afro colombiano cabeza de familia desplazado por la violencia</option>
                      <option value="Ninguno">Ninguno</option>
                      
               </select>
          </div>

       

          <div id="labelText">&nbsp;</div>
          <div id="labelInput">
               &nbsp;
          </div>
          
        
          <div id="labelText">E-Mail *</div>
          <div id="labelInput">
               <input type="email" id="correo" name="correo" pattern="^[a-zA-Z0-9.!#$%'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" value="" placeholder="E-Mail" required>
               <input name="action" type="hidden" id="action" value="contacto">
          </div>

          
          <div id="labelText">Estado Civil *</div>
               <div id="labelInput">
               <select id="estadocivil" name="estadocivil" required>

                      <option selected="">Seleccione Uno</option>

                      <option value="Casado/a">Casado/a</option>
                      <option value="soltero/a">soltero/a</option>
                      <option value="Unión Libre">Unión Libre</option>
                      <option value="Divorciado/a">Divorciado/a</option>
                      <option value="Separado/a">Separado/a</option>
                      <option value="Viudo/a">Viudo/a</option>
                                        
               </select>
          </div>


          <div id="labelText">Número de hijos *</div>
          <div id="labelInput">
               <input type="text" id="numhijos" name="numhijos" value="" maxlength="2" placeholder="Número hijos" required>
          </div>


          <div id="labelText">Libreta Militar *</div>
               <div id="labelInput">
               <select id="libretamilitar" name="libretamilitar" required>

                      <option selected="">Seleccione Uno</option>

                      <option value="Si">Si</option>
                      <option value="No">No</option>
                                        
               </select>
          </div>


          <div id="labelText">Pase *</div>
               <div id="labelInput">
               <select id="pase" name="pase" required>

                      <option selected="">Seleccione Uno</option>

                      <option value="Ninguno">Ninguno</option>
                      <option value="Categoria A1(Categoria 1)">Categoria A1(Categoria 1)</option>
                      <option value="Categoria A2(Categoria 2)">Categoria A2(Categoria 2)</option>
                      <option value="Categoria B1(Categoria 3)">Categoria B1(Categoria 3)</option>
                      <option value="Categoria B2(Categoria 5)">Categoria B2(Categoria 5)</option>
                      <option value="Categoria B3(Categoria 6)">Categoria B3(Categoria 6)</option>
                      <option value="Categoria C1(Categoria 4 Público)">Categoria C1(Categoria 4 Público)</option>
                      <option value="Categoria C2(Categoria 5 Público)">Categoria C2(Categoria 5 Público)</option>
                      <option value="Categoria C3(Categoria 6 Público)">Categoria C3(Categoria 6 Público)</option>
                                        
               </select>
          </div>

           <div id="labelText">Eps *</div>
               <div id="labelInput">
               <select id="eps" name="eps" required>

                      <option selected="">Seleccione Una</option>

                      <option value="Ninguna">Ninguna</option>
                      <option value="Con EPS">Con EPS</option>
                      <option value="Sisben nivel 1">Sisben nivel 1</option>
                      <option value="Sisben nivel 2">Sisben nivel 2</option>
                      <option value="Sisben nivel 3">Sisben nivel 3</option>
                      <option value="Sisben nivel 4">Sisben nivel 4</option>
                      <option value="Sisben nivel 5">Sisben nivel 5</option>
                      <option value="Sisben nivel 6">Sisben nivel 6</option>

               </select>
          </div>



          <div id="labelText">Convenio *</div>
               <div id="labelInput">
               <select id="convenio" name="convenio" required>

                      <option selected="">Seleccione Uno</option>
                
                     
                      <option value="Icbf">Icbf</option>
                      <option value="Etdh">Etdh</option>
                      
                      <!--<option value="Articulación">Articulación</option>
                      <option value="Etnias">Etnias</option>
                      <option value="Fundación social">Fundación social</option>
                      <option value="Jóvenes con futuro">Jóvenes con futuro</option>
                      <option value="Microcreditos">Microcreditos</option>
                      <option value="Secretaria de educación">Secretaria de educación</option>
                      <option value="Sena">Sena</option>-->


               </select>
          </div>


               </select>
          </div>



          <div id="labelText">&nbsp;</div>
          <div id="labelInput">
               &nbsp; 
          </div>
          <div id="labelText">&nbsp;</div>
          <div id="labelInput">
               &nbsp; 
          </div>
          <div id="labelText">&nbsp;</div>
          <div id="labelInput">
               &nbsp; 
          </div>
     
     
       


           <h2>Programas Ofertados</h2><br />

            <div id="labelText">Programas Tecnicos</div>
               <div id="labelInput">
               <select id="programa" name="programa" onChange="recargarS2(this.value)" required>
                      <option selected="">Seleccione Uno</option>


                          <option value="8">Auxiliar Contable</option>     
                          <option value="1">Electricidad Industrial</option>
                          <option value="2">Operador de Maquinas Herramientas en Metalmecánica</option>
                          <option value="5">Auxiliar en Sistemas Informáticos</option>
                          <option value="3">Soldadura por Arco Eléctrico en Platina</option>
                          <option value="7">Peluquería</option>
                          <!--<option value="4">Mecánica de Vehículos Automotores a Gasolina y Gas</option>
                          <option value="10">Cocina</option>

                          <option value="9">Operador de Máquinas para Confección de Ropa</option>   
                          <option value="6">Auxiliar en Diseño Gráfico</option>
                          -->
                  

               </select>   

          </div>

          <div id="labelText">Jornada *</div>
               <div id="labelInput">
               <select id="jornada" name="jornada" required></select>
          </div>



          <div id="labelText">&nbsp;</div>
          <div id="labelInput">
               &nbsp; 
          </div>
           <div id="labelText">&nbsp;</div>
           <div id="labelInput">&nbsp;</div>
        
             <h2>Datos Del Acudiente</h2><br />


           

          <div id="labelText">Nombre Contacto *</div>
          <div id="labelInput">
               <input type="text" id="contacto" name="contacto" value="" placeholder="Nombre" required>
          </div>


           <div id="labelText">Parentesco *</div>
               <div id="labelInput">
               <select id="parentesco" name="parentesco" required>
                      <option selected="">Seleccione uno</option>
                      <option value="Padre">Padre</option>
                      <option value="Madre">Madre</option>
                      <option value="Tio/a">Tio/a</option>
                      <option value="Primo/a">Primo/a</option>
                      <option value="Abuelo/a">Abuelo/a</option>
                      <option value="Amigo/a">Amigo/a</option>
                      <option value="Esposo/a">Esposo/a</option>
                      <option value="Sobrino/a">Sobrino/a</option>
                      <option value="Hermano/a">Hermano/a</option>
                      <option value="Otro familiar">Otro Familiar</option>
                      

               </select>
          </div>




          <div id="labelText">Telefono Contacto *</div>
          <div id="labelInput">
               <input type="text" id="telefonoContacto" name="telefonoContacto" value="" placeholder="Telefono" required>
          </div>
          
     

          <br /><br /><br /><br /><br /><br /><br /><br /><br />
          <input type="submit" id="Button1" name="Button1" value="Enviar" accesskey="28" style="background:#A21C26; color:#FFF; border:none; font-size: 14px;  padding: 10px; ">
          <input name="action" type="hidden" id="action" value="cotizar">
          <input type="reset" id="Button2" name="Button2" value="Borrar" style="background:#CCC; color:#333; border:none; font-size: 14px;  padding: 10px; ">


      <!-- Fin de formulario -->

          
      </form>



     <br /><br /><br /> <br /><br /><br /><br /><br /><br />
 </section>
 </section>
<?
 include("footer.php");
?>

</body>
</html>