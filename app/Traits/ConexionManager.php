<?php
namespace App\Traits;
use Illuminate\Database\Capsule\Manager as Capsule;
trait ConexionManager{
   

    public function getConexion()
    {
            $capsule = new Capsule;
            $capsule->addConnection([
                'driver' => 'sqlsrv',
                'host' => env('DB_HOST'),
                'database' => env('DB_DATABASE'),
                'username' => env('DB_USERNAME'),
                'password' => env('DB_PASSWORD'),
                'charset' =>'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix' => '',
                'port'      => env('DB_PORT')
            ]);
            // Setup the Eloquent ORM… 
            $capsule->setAsGlobal();
            $capsule->bootEloquent();
            return $capsule;
    }
}