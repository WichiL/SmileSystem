<?php
require_once 'model/paciente.php';

class PacienteController{

  private $model;
  private $mensaje;
  private $error;

  public function __CONSTRUCT(){
    $this->model = new Paciente();
  }

  public function Index(){
    $pacientes = true;
    $page="view/paciente/index.php";
    require_once 'view/index.php';
  }

  public function verificarPaciente(){
    $nombre=$_REQUEST['nombre'];
    $apePat=$_REQUEST['apePat'];
    $apeMat=$_REQUEST['apeMat'];
    $verificacion=$this->model->verificaPaciente($nombre, $apePat, $apeMat);
    if($verificacion!=null){
      echo "EXISTE";
    }else{
      echo 'null';
    }
  }

  public function Crud(){
    try {
      $paciente = new paciente();
      if(isset($_REQUEST['nombre'])){
        $paciente->nombre=$_REQUEST['nombre'];
        $paciente->apePat=$_REQUEST['apePat'];
        $paciente->apeMat=$_REQUEST['apeMat'];
        $verificaPac=$this->model->verificaPaciente($paciente->nombre, $paciente->apePat, $paciente->apeMat);
        if($verificaPac==null){
          $pacientes=true;
          $page="view/paciente/paciente.php";
          require_once 'view/index.php';
        }else{
          $warning=true;
          $this->mensaje="El paciente ya esta registrado, <b>verifíque</b> que sus datos y la información de registro sean correctos y esten actualizados si no es así, <a href='?c=paciente&a=Crud&idPaciente=".$verificaPac->idPaciente."'>actualice la información</a>.";      
          $pacientes = false;
          $pac = $this->model->Obtener($verificaPac->idPaciente);
          $page="view/paciente/detalles.php";
          require_once 'view/index.php';
        }
      }if(isset($_REQUEST['idPaciente'])){
        $pacientes=true;
        $paciente = $this->model->Obtener($_REQUEST['idPaciente']);
        $page="view/paciente/paciente.php";
        require_once 'view/index.php';
      }
    } catch (Exception $e) {
      $this->error=true;
      $this->mensaje="Ha ocurrido un error al recuperar la información del paciente";
      $this->Index();
    }
  }

  public function Eliminar(){
    try {
        $this->model->Eliminar($_REQUEST['idPaciente']);
        $this->mensaje="Se ha eliminado el paciente correctamente!";
        $this->Index();
    }catch (Exception $e) {
        $this->error=true;
        $this->mensaje="Ha ocurrido un error al intentar eliminar a el paciente";
        $this->Index();
    }
  }

  public function Guardar(){
    try {
      $paciente = new Paciente();
      $paciente->idPaciente = $_REQUEST['idPaciente'];
      $paciente->fecIngreso = $_REQUEST['fecIngreso'];
      $paciente->folio = $_REQUEST['folio']; 
      $paciente->nombre = $_REQUEST['nombre'];
      $paciente->apePat = $_REQUEST['apePat'];
      $paciente->apeMat = $_REQUEST['apeMat'];
      $paciente->calle = $_REQUEST['calle'];
      $paciente->numero = $_REQUEST['numero'];
      $paciente->colonia = $_REQUEST['colonia'];
      $paciente->codPos = $_REQUEST['codPos'];
      $paciente->localidad = $_REQUEST['localidad'];
      $paciente->estado = $_REQUEST['estado'];
      $paciente->telCasa = $_REQUEST["telCasa"];
      $paciente->telCel = $_REQUEST["telCel"];
      $paciente->fecNacimiento = $_REQUEST["fecNacimiento"];
      $paciente->lugNacimiento = $_REQUEST["lugNacimiento"];
      $paciente->edad = $_REQUEST["edad"];
      $paciente->sexo = $_REQUEST["sexo"];
      $paciente->ocupacion = $_REQUEST["ocupacion"];
      $paciente->estCivil = $_REQUEST["estCivil"];
      $paciente->perResp = $_REQUEST["perResp"];
      $paciente->motConsulta = $_REQUEST["motConsulta"];
      
      $verificaPac=$this->model->verificaPaciente($paciente->nombre, $paciente->apePat, $paciente->apeMat);
      if($paciente->idPaciente > 0 || $verificaPac!=null){
        $this->model->Actualizar($paciente);
        $this->mensaje="Se ha actualizado correctamente el paciente";
      }else{
        $this->model->Registrar($paciente);
        $this->mensaje="Se ha registrado correctamente el paciente";
              
      }
     
      $this->Index();
    } catch (Exception $e) {
      $this->error=true;
      $this->mensaje="Ha ocurrido un error al intentar guardar los datos del paciente";
      $this->Index();
    }
  }
}
