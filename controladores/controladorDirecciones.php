<?php
    class ControladorDirecciones{
        public function __construct() {
        }
        function Listar(){
            require_once("../modelos/modelodirecciones.php");
            $direcciones = new Modelodirecciones();
            $datos = $direcciones->getdirecciones();
            return $datos;
        }

        function Guardar($direccion, $id_ciudad, $id_usuarioCliente,$direccion_opcional ){
            require_once("../modelos/modelodirecciones.php");
            $direcciones = new Modelodirecciones();
            $datos = $direcciones->setGuardar($direccion, $id_ciudad, $id_usuarioCliente,$direccion_opcional);
            require_once("../vistas/direcciones.php");
        }

        function Eliminar($id ){
            require_once("../modelos/modelodirecciones.php");
            $direcciones = new Modelodirecciones();
            $datos = $direcciones->setEliminar($id);
            require_once("../vistas/direcciones.php");
        }
  
    }
    

?>