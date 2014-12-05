<?php

class Materia{

    private $id;
    private $nombre;
    private $avatar;
    private $orden;
    private $estatus;

    public function comboMaestro(){
        echo"<div class='table-responsive'>";
        echo"<form action=Ajax.php method=POST name=maestro>";
        echo"<table class=table table-bordered>";
        echo"<tr>";
           echo"<th>Maestro:</th>";
           echo"<td><select name='id_maestro'>";
            $sql = "SELECT * FROM usuario WHERE Estatus=1 AND Nivel=2";
            $consulta = mysql_query($sql)or die("Error de consulta 1");
            $cuantos = mysql_num_rows($consulta);
            for($i = 0; $i < $cuantos; $i++){
                $Id = mysql_result($consulta,$i,'Id');
                $nombre = mysql_result($consulta,$i,'Nombre');
                $apat = mysql_result($consulta,$i,'ApellidoPaterno');
                $amat = mysql_result($consulta,$i,'ApellidoMaterno');
                echo"<option value='$Id'>$nombre $apat $amat</option>";
            }
            echo"</select>";
            echo"</td>";
            echo"<td><input type=submit value=Seleccionar></td>";
        echo"</tr>";
        echo"</form>";
        echo"</div>";
    }

    public function mostrarMaestro($id_maestro){
		//echo"$id_maestro";
        echo"<div class='table-responsive'>";
        echo"<table class=table table-bordered>";
        echo"<tr>";
        echo"<th>Maestro seleccionado:</th>";
        $sql = "SELECT * FROM usuario WHERE Id=$id_maestro";
        $consulta = mysql_query($sql)or die("Error de consulta 02");
        $nombre = mysql_result($consulta,0,'Nombre');
        $apat = mysql_result($consulta,0,'ApellidoPaterno');
        $amat = mysql_result($consulta,0,'ApellidoMaterno');
        echo"<td>$nombre $apat $amat</td>";
        echo"</tr>";
        echo"</div>";
    }

    public function materiasAsignadas($id_maestro){
        echo"<div class='table-responsive'>";
        echo"<table class=table table-bordered>";
        $sql = "SELECT * FROM maestro_materia WHERE id_maestro=$id_maestro";
        $consulta = mysql_query($sql)or die("Error de consulta");
        $cuantos = mysql_num_rows($consulta);
        for($i = 0; $i < $cuantos; $i++){
            $id_materia = mysql_result($consulta,$i,'id_materia');
            $sql2 = "SELECT * FROM materia WHERE id=$id_materia";
            $consulta2 = mysql_query($sql2)or die("Error de consulta 2");
            $materia = mysql_result($consulta2, 0, 'nombre');
            echo"<tr>";
            echo"<td>$materia</td><td><a href='conexion/Delete.php?id=$id_materia'>Eliminar</a></td>";
            echo"</tr>";
        }
        echo"</div>";
    }

    public function comboMaterias($id_maestro){
        echo"<div class='table-responsive'>";
        echo"<table class=table table-striped>";
        echo"<form action=TestMateria.php method=POST name=materias>";
        echo"<tr><th colspan=2><center>Asignar materias</center></th></tr>";
        echo"<tr><td><b>Materias:</td><td><select name=materia>";
        $sql = "SELECT * FROM materia";
        $consulta = mysql_query($sql)or die("Error de consulta");
        $cuantos = mysql_num_rows($consulta);
        for($y = 0; $y < $cuantos; $y++){
            $id_mat = mysql_result($consulta,$y,'id');
            $nombre = mysql_result($consulta,$y,'nombre');
            
                echo"<option value=$id_mat>$nombre</option>";
            
        }
        echo"</select></td>";
        echo"<tr>";
        echo"<input type=hidden id=accion name=accion value=1>";
        echo"<input type=hidden id=maestro name=maestro value=$id_maestro>";
        echo"</tr>";
        echo"<tr><td colspan=2 align=center><input type=submit value=Agregar></td></tr>";
        echo"</form></table></div>";
    }

}

?>