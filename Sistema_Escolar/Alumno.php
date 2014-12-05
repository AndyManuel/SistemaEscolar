<?php
require 'Usuario.php';
require 'conexion/bd.php';
    
    class Alumno extends Usuario{
        public function muestraAlumnosGrupos(){
			echo"<center><b><h3>Alumnos</h3></center>";
            echo"<div class='table-responsive'>";
            echo"<table class=table table-bordered>";
            $sql = "SELECT * FROM usuario WHERE Estatus=1 AND Nivel=3";
            $consulta = mysql_query($sql)or die("Error de consulta 1");
            $cuantos = mysql_num_rows($consulta);
            for($y = 0; $y < $cuantos; $y++){
                $id_alu = mysql_result($consulta,$y,'Id');
                $nombre = mysql_result($consulta,$y,'Nombre');
                $apat = mysql_result($consulta,$y,'ApellidoPaterno');
                $amat = mysql_result($consulta,$y,'ApellidoMaterno');
                $sql2 = "SELECT * FROM alumnogrupo WHERE id_alumno = $id_alu";
                $consulta2 =mysql_query($sql2)or die("Error de consulta 2");
                $asignado = mysql_num_rows($consulta2);
                if($asignado == ""){
                    echo"<tr><td><center><input type='checkbox' name='al$y' value='$id_alu'>$nombre $apat $amat</center></td></tr>";
                }
                else{
                    $id_grupo = mysql_result($consulta2, 0, 'id_grupo');
                    $sql3 = "SELECT * FROM grupo WHERE id_grupo = $id_grupo";
                    $consulta3 =mysql_query($sql3)or die("Error de consulta 43");
                    $grupo = mysql_result($consulta3, 0, 'nombre_grupo');

                    echo"<tr><td>$nombre $apat $amat, asignado(a) al grupo $grupo <a href='TestAlumno.php?id=$id_alu'>Desasignar</a></td></tr>";
                }
            }
            echo"<input type=hidden name=cuantos value=$cuantos>";
            echo"</div>";
        }

        public function muestraGrupos(){
			
            echo"<div class='table-responsive'>";
            echo"<table class=table table-bordered>";
			echo"<center><b>Asignar Grupos</center>";
            echo"<tr>";
            echo"<td><center><select name=grupo>";
            $sql = "SELECT * FROM grupo";
            $consulta = mysql_query($sql)or die("Error de consulta");
            $cuantos = mysql_num_rows($consulta);
            for($i = 0; $i < $cuantos; $i++){
                $id_grupo = mysql_result($consulta,$i,'id_grupo');
                $nombre = mysql_result($consulta,$i,'nombre_grupo');
                echo "<option value='$id_grupo'>$nombre</option>";
            }
            echo"</select><center>";
            echo"</td>";
            echo"</tr>";
            echo"</table>";
            echo"</div>";
        }

        public function asignaGrupos($id_alu, $grupo){
            $sql = "INSERT INTO alumnogrupo (id_alumno, id_grupo) VALUES ($id_alu, $grupo)";
            $consulta = mysql_query($sql)or die("Error de inserción");
        }

        public function eliminaGrupos($id_alu){
            $sql = "DELETE FROM alumnogrupo WHERE id_alumno = $id_alu";
            $consulta = mysql_query($sql)or die("Error de eliminación");
        }
    }