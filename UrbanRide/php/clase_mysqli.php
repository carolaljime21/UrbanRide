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

    function consulta_num_rows() {
        return mysqli_num_rows($this->Consulta_ID);
    }
 }

?>