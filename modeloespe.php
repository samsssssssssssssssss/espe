<?php
class clase_espe
{   public $vlespe_id;
    public $vlespe_Especialidad;
    public $vlespe_observ;
    public $vlespe_colegio;
    public function __construct()
    {
        $this->vlespe_id="";
        $this->vlespe_Especialidad="";
        $this->vlespe_observ="";
        $this->vlespe_colegio="";
    }
    public function _insertar($vlespe_Especialidad, $vlespe_observ, $vlespe_colegio){
        require_once("../../../conexion/conexion.php");
        //$dmlsentencia="insert into si_provincias(cur_nombre,cur_observacion) values ('vlcur_nombre ','vlcur_observacion')";
        $dmlsentencia="insert into snv_especialidad(espe_Especialidad, espe_observ, espe_colegio) values ('" . $vlespe_Especialidad . "','" . $vlespe_observ . "','" . $vlespe_colegio . "')";
        $registros=$pdo->query($dmlsentencia);
        return $registros;
    }
    public function _consultartodo($valor){
        require_once("../../../conexion/conexion.php");

        if($valor=='')
        {
            $dmlsentencia="select * from snv_especialidad";
        }
        else
        {
            $dmlsentencia="select * from snv_especialidad where espe_Especialidad like '%s', %".$valor."%";
        }
        $registros=$pdo->query($dmlsentencia);
        return $registros;
    }
    public function _actualizar($id, $especialidad, $observacion, $colegio)
       { //update
    }
    public function _eliminar(){
        //delete
    }
}
?>