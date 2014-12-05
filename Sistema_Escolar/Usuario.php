<?php

class Usuario{

    public $Id;
    public $Nombre;
    public $ApellidoPaterno;
    public $ApellidoMaterno;
    public $Telefono;
    public $Calle;
    public $NumeroExterior;
    public $NumeroInterior;
    public $Colonia;
    public $Municipio;
    public $Estado;
    public $CP;
    public $Correo;
    public $Usuario;
    public $Contrasena;
    public $Nivel;
    public $Estatus;

    public function createUsuario($nombre, $apellidop, $apellidom, $nivel){
        $sql01 = "INSERT INTO usuario (Nombre, ApellidoPaterno, ApellidoMaterno, Nivel, Estatus) VALUES ('$nombre', '$apellidop', '$apellidom', '$nivel', 1)";
        $consulta01 = mysql_query($sql01)or die("Error para insertar Usuario");
    }

    public function updateUsuario($id,$nombre, $apellidop, $apellidom, $nivel){
        $sql02 = "UPDATE usuario SET Nombre='$nombre', ApellidoPaterno='$apellidop', ApellidoMaterno='$apellidom', Nivel='$nivel', Estatus=1 WHERE Id = $id";
        $consulta02 = mysql_query($sql02)or die("Error de actualización de ususario");
    }

    public function deleteUsuario($id){
        $sql03 = "DELETE FROM usuario WHERE Id = $id";
        $consulta03 = mysql_query($sql03)or die("Error al eliminar usuario");
    }

    public function readUsuarioG(){
        $sql04 = "SELECT * FROM usuario WHERE Estatus = 1 ORDER BY ApellidoPaterno ASC;";
        $consulta04 = mysql_query($sql04)or die("Error de consulta 1");
        echo"<div class='table-responsive'>";
        echo"<table class='table table-striped'>";
        echo"<tr><td colspan='5' align='center'><strong>Lista de Usuarios</strong></td></tr>";
        echo"<tr><th>Id</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Nivel</th>";

        while($field = mysql_fetch_array($consulta04)){
            $this->Id = $field['Id'];
            $this->Nombre = $field['Nombre'];
            $this->ApellidoPaterno = $field['ApellidoPaterno'];
            $this->ApellidoMaterno = $field['ApellidoMaterno'];
            $this->Nivel = $field['Nivel'];
            switch($this->Nivel){
                case 1:
                    $type = "Administrador";
                    break;
                case 2:
                    $type = "Maestro";
                    break;
                case 3:
                    $type = "Alumno";
                    break;
            }
            echo"<tr><td>$this->Id</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$this->Nivel</td></tr></tr>";
        }
        echo"</table>";
        echo"</div>";

    }

    public function readUsuarioS($id){
        $sql05 = "SELECT * FROM usuario WHERE Estatus = 1 AND Id = $id ORDER BY ApellidoPaterno ASC;";
        $consulta05 = mysql_query($sql05)or die("Error de consulta 2");
        echo"<div class='table-responsive'>";
        echo"<table class='table table-striped'>";
        echo"<tr><td colspan='5' align='center'><strong>Consulta de Usuarios</strong></td></tr>";
        echo"<tr><th>Id</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Nivel</th>";
        while($field = mysql_fetch_array($consulta05)){
            $this->Id = $field['Id'];
            $this->Nombre = utf8_decode($field['Nombre']);
            $this->ApellidoPaterno = utf8_decode($field['ApellidoPaterno']);
            $this->ApellidoMaterno = utf8_decode($field['ApellidoMaterno']);
            $this->Nivel = $field['Nivel'];
            switch($this->Nivel){
                case 1:
                    $type = "Administrador";
                    break;
                case 2:
                    $type = "Maestro";
                    break;
                case 3:
                    $type = "Alumno";
                    break;
            }
            echo"<tr><td>$this->Id</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$this->Nivel</td></tr></tr>";
        }
        echo"</table>";
        echo"</div>";

    }

}

?>