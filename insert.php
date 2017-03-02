<?php 
/**
 * Inserta en la base desde un form
 */ ?>
<style>
body {
  font: normal medium/1.4 sans-serif;
}
div.header{
padding: 10px;
background: #e0ffc1;
width:30%;
color: #008000;
margin:5px;
}
table {
  border-collapse: collapse;
  width: 25%;
  margin-left: auto;
  margin-right: auto;
}
form{
width: 30%;
  margin-left: auto;
  margin-right: auto;
padding: 10px;
border: 2px solid #edd3ff;
}
div#msg{
margin-top:10px;
width: 30%;
margin-left: auto;
margin-right: auto;
text-align: center;
}
</style>
<center>
<div class="header">
Android SQLite and MySQL Sync - Add Antenas
</div>
</center>
  <div class="content">
    <form method="POST">
        Sector: <input type="text" name="sector" />
        Estado: <input type="text" name="estado" />
        Fecha Estado: <input type="date" name="f_estado" />
        Tipo_Instalacion: <input type ="text" name="tipo_instalacion" />
        Azimut: <input type ="text" name="azimut" />
        Modelo Antena: <input type ="text" name="modelo_antena" />
        Altura: <input type ="text" name="altura" />
        Tilt Mecanico: <input type ="text" name="tilt_mecanico" />
        Tilt Electrico: <input type ="text" name="Til_Electrico" />
        Tilt Electrico Remoto: <input type ="text" name="tilt_electrico_remoto" />
        Observaciones: <input type ="text" name="observaciones" />

        <input type="submit" value="Insertar">
    </form>
  </div>

<?php

//HACER LA CONEXION
require 'db_connect.php'

connect();
// Valido datos
if(isset($_POST["id"]) && !empty($_POST["id"]) && isset($_POST["sector"]) && !empty($_POST["sector"]))
{


  //Store User into MySQL DB
  $sector = $_POST["sector"];
  $estado = $_POST["estado"];
  $f_estado = $_POST["f_estado"];
  $tipo_instalacion = $_POST["tipo_instalacion"];
  $azimut = $_POST["azimut"];
  $modelo_antena = $_POST["modelo_antena"];
  $altura = $_POST["altura"];
  $tilt_mecanico = $_POST["tilt_mecanico"];
  $Til_Electrico = $_POST["Til_Electrico"];
  $tilt_electrico_remoto = $_POST["tilt_electrico_remoto"];
  $observaciones = $_POST["observaciones"];

 $result = mysql_query("INSERT INTO antenas VALUES('$sector','$estado', '$f_estado', '$tipo_instalacion', '$azimut', '$modelo_antena', '$altura', '$tilt_mecanico', '$Til_Electrico', '$tilt_electrico_remoto', '$observaciones')"); 
 
        
      // FALTA CREAR EL JSON
      if($result){ ?>
           <div id="msg">La antena se ha insertado exitosamente</div>
      <?php }else{ ?>
           <div id="msg">Error al insertar</div>
      <?php }
    } 
    else{ ?>

      <div id="msg">Insertar datos</div>

<?php }

close();
?>