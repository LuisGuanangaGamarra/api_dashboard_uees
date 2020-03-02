<?php
namespace App\Traits;

trait ConexionManager{
    public function getConexion()
    {
            $server 				= "200.1.161.235";
            $BaseDatos 				= "aplicacion_movil";
            $Usuario				= "uees";
            $Clave					= "David2016+";
            $infoConexion			= array( "Database"=>$BaseDatos, "UID"=>$Usuario, "PWD"=>$Clave, "CharacterSet" => "UTF-8");
            $conexion 				=  sqlsrv_connect( $server, $infoConexion);
            if(!$conexion )
            {
                return null;
            }
            else{
                return $conexion;
            }
    }
}