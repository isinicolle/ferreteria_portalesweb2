<?php

class Modeloclientes {
    
    private $clientes;
    private $db;

    public function __construct() {
        $this->clientes = array();
        $this->db = new PDO( "sqlsrv:server=andresmunicah.database.windows.net;database=ferreteria_MovilWeb", "adminUnicah", "rootUnicah1");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getclientes() {

       // self::setNames();
        $sql = "SELECT id_cliente
        ,nom_cliente
        ,apellido_cliente
        ,RTN
        ,direccion_cliente
        ,id_ciudad
        ,tel_cliente
        ,estado
        ,DNI_Cliente
    FROM [dbo].Clientes";
        foreach ($this->db->query($sql) as $res) {
            $this->clientes[] = $res;
        }
        return $this->clientes;
        $this->db = null;
    }
}

    ?>