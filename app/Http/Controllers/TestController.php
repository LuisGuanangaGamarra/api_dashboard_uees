<?php

namespace App\Http\Controllers;
use App\Traits\ApiResponser;
use App\Traits\ConexionManager;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Capsule\Manager as Capsule;
use PDO;
//use App\Traits\ConexionManager;

class TestController extends Controller
{
    use ApiResponser;
    use ConexionManager;
   //private $capsule=null;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     
    }

    public function getEstudiantes ()
    {
        try {
           $db = new PDO ("dblib:host=".env('DB_HOST').":". env('DB_PORT').";dbname=".
           env('DB_DATABASE').
           ", ".env('DB_USERNAME').",". env('DB_PASSWORD'));

          
           return $this->successResponse(var_dump($db));

        } catch (PDOException $e) {
            return $this->errorResponse("ERROR DE CONEXION");
        }
    }


}

