<?php

namespace App\Http\Controllers;
use App\Traits\ApiResponser;
use Illuminate\Support\Facades\DB;
//use App\Traits\ConexionManager;

class TestController extends Controller
{
    use ApiResponser;
   // use ConexionManager;
    //private $conexion;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$conexion=$this->getConexion();
    }

    public function getEstudiantes ()
    {
       /* if($conexion != null)

        {*/
            $db=DB::connection("sqlsrv")->select('select top 10 * from dbo.app_menu');
            return $this->successResponse($db );

       /* }
        else{
            return $this->errorResponse("No se pudo lograr la conexion a la base",-1);
        }*/
    }


}

