<?php
require 'Alumno.php';
    require 'header.php';
	require 'menu.php';
    require 'footer.php';
    $alumno = new Alumno();
    if(isset($_REQUEST['add_alu_grup'])){
        $cuantos = $_REQUEST['cuantos'];
        for($y = 0; $y < $cuantos; $y++){
            $al = $_REQUEST["al$y"];
            if($al != ""){
                $alumno->asignaGrupos($al, $_REQUEST['grupo']);
            }
        }
    }
    if(isset($_REQUEST['id'])){
        $alumno->eliminaGrupos($_REQUEST['id']);
    }
    echo"<form action=TestAlumno.php method=POST>";
    $alumno->muestraAlumnosGrupos();
    $alumno->muestraGrupos();
    echo"<input type=hidden name=add_alu_grup>";
    echo"<center><input type=submit value=Agregar></center>";
    echo"</form>";

?>