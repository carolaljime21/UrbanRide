<?php

class class_mysqli{
    //cariables de conexion a la db
    var $BaseDatos;
    var $Servidor;
    var $Usuario;
    var $Clave;

    //varialbes de control de errores
    var $Error="";
    var $Errno=0;
    
    //varialbes de db conect 
    var $Conecxion_ID=0;
    var $Consulta_ID=0;

    public function _construct($host="", $user="", $pass="", $db=""){
        $this->BaseDatos=$db;
        $this->Usuario=$user;
        $this->Clave=$pass;
        $this->Servidor=$host;

    }

    function conectar($host, $user, $pass, $db){
        if($db != "")$this->BaseDatos=$db;
        if($user != "")$this->Usuario=$user;
        if($pass != "")$this->Clave=$pass;
        if($host != "")$this->Servidor=$host;

        $this->Conecxion_ID=new mysqli($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);
        if(!$this->Conecxion_ID){
            $this->Error="Problemas en la conexion";
            return 0;
        }
        return $this->Conecxion_ID;
    }
    function consulta($sql=""){
        if($sql==""){
            $this->Error="No hay ninguna sql";
            return 0;
        }
        $this->Consulta_ID= mysqli_query($this->Conecxion_ID, $sql);
        return $this->Conecxion_ID;
    }
     function numcampos(){
        return mysqli_num_fields($this->Consulta_ID); 
     }
     function numregistros(){
        return mysqli_num_rows($this->Consulta_ID);
     }

     function verconsulta(){
        echo "<table border='1'>";
        echo "<tr>";
        for ($i=0; $i < $this->numcampos(); $i++) { 
            echo "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
        }
        echo "</tr>";
        while ($row=mysqli_fetch_array($this->Consulta_ID)) {
            echo "<tr>";
            for ($i=0; $i < $this->numcampos(); $i++) { 
                echo "<td>".$row[$i]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
     }

     function consulta_lista(){
        while ($row=mysqli_fetch_array($this->Consulta_ID)) {
            for ($i=0; $i < $this->numcampos(); $i++) { 
                $row[$i];
            }
            return $row;
        }
     }

    function consulta_num_rows() {
        return mysqli_num_rows($this->Consulta_ID);
    }
 }

?>