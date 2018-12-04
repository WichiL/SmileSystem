<?php
require_once 'model/paciente.php';
require_once 'model/histClinico.php';
require_once 'model/atm.php';

class PacienteController{

  private $model;
  private $model1;
  private $model2;
  private $mensaje;
  private $error;

  public function __CONSTRUCT(){
    $this->model = new Paciente();
    $this->model1 = new HistorialClinico();
    $this->model2 = new Atm();
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
      $histCli = new HistorialClinico();
      $atm = new Atm();
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
          //AGREGAR OBJETOS PARA EDITAR DESDE EXPEDIENTE
          $pac = $this->model->Obtener($verificaPac->idPaciente);
          $histCli = $this->model1->ObtenerHisCliPaciente($verificaPac->idPaciente);
          $atm = $this->model2->ObtenerATMPaciente($verificaPac->idPaciente);
          $page="view/paciente/expediente.php";
          require_once 'view/index.php';
        }
      }if(isset($_REQUEST['idPaciente'])){
        $pacientes=true;
        //AGREGAR OBJETOS PARA EDITAR CUANDO ES DIRECTO        
        $paciente = $this->model->Obtener($_REQUEST['idPaciente']);
        $histCli = $this->model1->ObtenerHisCliPaciente($_REQUEST['idPaciente']);
        $atm = $this->model2->ObtenerATMPaciente($_REQUEST['idPaciente']);
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

      //HISTCLINICO
      $histCli = new HistorialClinico();
      $histCli->idClinico = $_REQUEST['idClinico'];
      $histCli->idPaciente = $_REQUEST['idPaciente'];
      isset($_REQUEST['esmalte'])? $histCli->esmalte="1": $histCli->esmalte="0";
      isset($_REQUEST['dentina'])? $histCli->dentina="1": $histCli->dentina="0";
      isset($_REQUEST['raiz'])? $histCli->raiz="1": $histCli->raiz="0";
      isset($_REQUEST['huesos'])? $histCli->huesos="1": $histCli->huesos="0";
      isset($_REQUEST['encia'])? $histCli->encia="1": $histCli->encia="0";
      isset($_REQUEST['inEpil'])? $histCli->inEpil="1": $histCli->inEpil="0";
      isset($_REQUEST['lengua'])? $histCli->lengua="1": $histCli->lengua="0";
      isset($_REQUEST['pulpo'])? $histCli->pulpo="1": $histCli->pulpo="0";
      isset($_REQUEST['velPal'])? $histCli->velPal="1": $histCli->velPal="0";
      isset($_REQUEST['carrillo'])? $histCli->carrillo="1": $histCli->carrillo="0";
      isset($_REQUEST['soMordidaH'])? $histCli->soMordidaH="1": $histCli->soMordidaH="0";
      isset($_REQUEST['soMordidaV'])? $histCli->soMordidaV="1": $histCli->soMordidaV="0";
      isset($_REQUEST['morAbierta'])? $histCli->morAbierta="1": $histCli->morAbierta="0";
      isset($_REQUEST['desBruxismo'])? $histCli->desBruxismo="1": $histCli->desBruxismo="0";
      isset($_REQUEST['anoclusion'])? $histCli->anoclusion="1": $histCli->anoclusion="0";
      isset($_REQUEST['simetrica'])? $histCli->simetrica="1": $histCli->simetrica="0";
      isset($_REQUEST['asimetrica'])? $histCli->asimetrica="1": $histCli->asimetrica="0";
      isset($_REQUEST['braquicefalo'])? $histCli->braquicefalo="1": $histCli->braquicefalo="0";
      isset($_REQUEST['mesocefalo'])? $histCli->mesocefalo="1": $histCli->mesocefalo="0";
      isset($_REQUEST['dolicefalo'])? $histCli->dolicefalo="1": $histCli->dolicefalo="0";
      isset($_REQUEST['recto'])? $histCli->recto="1": $histCli->recto="0";
      isset($_REQUEST['concavo'])? $histCli->concavo="1": $histCli->concavo="0";
      isset($_REQUEST['convexo'])? $histCli->convexo="1": $histCli->convexo="0";
      isset($_REQUEST['sarampion'])? $histCli->sarampion="1": $histCli->sarampion="0";
      isset($_REQUEST['viruela'])? $histCli->viruela="1": $histCli->viruela="0";
      isset($_REQUEST['parotidis'])? $histCli->parotidis="1": $histCli->parotidis="0";
      isset($_REQUEST['diabetes'])? $histCli->diabetes="1": $histCli->diabetes="0";
      isset($_REQUEST['hipertension'])? $histCli->hipertension="1": $histCli->hipertension="0";
      isset($_REQUEST['tiroides'])? $histCli->tiroides="1": $histCli->tiroides="0";
      isset($_REQUEST['hipotiroidismo'])? $histCli->hipotiroidismo="1": $histCli->hipotiroidismo="0";
      isset($_REQUEST['proCoagulacion'])? $histCli->proCoagulacion="1": $histCli->proCoagulacion="0";
      isset($_REQUEST['alergias'])? $histCli->alergias="1": $histCli->alergias="0";
      $histCli->descAlergias = $_REQUEST['descAlergias'];
      isset($_REQUEST['emergencia'])? $histCli->emergencia="1": $histCli->emergencia="0";
      isset($_REQUEST['revision'])? $histCli->revision="1": $histCli->revision="0";
      isset($_REQUEST['limpieza'])? $histCli->limpieza="1": $histCli->limpieza="0";
      isset($_REQUEST['canes'])? $histCli->canes="1": $histCli->canes="0";
      isset($_REQUEST['puente'])? $histCli->puente="1": $histCli->puente="0";
      isset($_REQUEST['extraccion'])? $histCli->extraccion="1": $histCli->extraccion="0";
      isset($_REQUEST['prostodoncia'])? $histCli->prostodoncia="1": $histCli->prostodoncia="0";
      isset($_REQUEST['buena'])? $histCli->buena="1": $histCli->buena="0";
      isset($_REQUEST['mala'])? $histCli->mala="1": $histCli->mala="0";
      isset($_REQUEST['tomAlcohol'])? $histCli->tomAlcohol="1": $histCli->tomAlcohol="0";
      isset($_REQUEST['fuma'])? $histCli->fuma="1": $histCli->fuma="0";
      isset($_REQUEST['apRespiratorio'])? $histCli->apRespiratorio="1": $histCli->apRespiratorio="0";
      isset($_REQUEST['apCardiovascular'])? $histCli->apCardiovascular="1": $histCli->apCardiovascular="0";
      isset($_REQUEST['apDigestivo'])? $histCli->apDigestivo="1": $histCli->apDigestivo="0";
      isset($_REQUEST['sisNervioso'])? $histCli->sisNervioso="1": $histCli->sisNervioso="0";
      isset($_REQUEST['apUrinario'])? $histCli->apUrinario="1": $histCli->apUrinario="0";
      isset($_REQUEST['cicMestrual'])? $histCli->cicMestrual="1": $histCli->cicMestrual="0";
      $histCli->infCicMes = $_REQUEST['infCicMes'];
      isset($_REQUEST['embarazo'])? $histCli->embarazo="1": $histCli->embarazo="0";
      $histCli->meses = $_REQUEST['meses'];
      $histCli->prg1 = $_REQUEST['prg1'];
      $histCli->prg2 = $_REQUEST['prg2'];
      $histCli->prg3 = $_REQUEST['prg3'];
      $histCli->infPrg3 = $_REQUEST['infPrg3'];
      $histCli->prg4 = $_REQUEST['prg4'];

      //ATM
      $atm = new Atm();
      $atm->idAtm = $_REQUEST['idAtm'];
      $atm->idPaciente = $_REQUEST['idPaciente'];
      $atm->linMedia = $_REQUEST['linMedia'];
      $atm->habitos = $_REQUEST['habitos'];
      $atm->bruxismo = $_REQUEST['bruxismo'];
      isset($_REQUEST['chaArriba'])? $atm->chaArriba="1": $atm->chaArriba="0";
      isset($_REQUEST['chaAbajo'])? $atm->chaAbajo="1": $atm->chaAbajo="0";
      $atm->infChasquido = $_REQUEST['infChasquido'];
      $atm->crepitacion = $_REQUEST['crepitacion'];
      isset($_REQUEST['dolDerecha'])? $atm->dolDerecha="1": $atm->dolDerecha="0";
      isset($_REQUEST['dolIzquierda'])? $atm->dolIzquierda="1": $atm->dolIzquierda="0";
      $atm->infDolor = $_REQUEST['infDolor'];
      $atm->maxAbertura = $_REQUEST['maxAbertura'];
      $atm->derecho = $_REQUEST['derecho'];
      $atm->izquierdo = $_REQUEST['izquierdo'];
      $atm->potrusion = $_REQUEST['potrusion'];
      $atm->regresion = $_REQUEST['regresion'];
      $atm->peso = $_REQUEST['peso'];
      $atm->talla = $_REQUEST['talla'];
      $atm->temp = $_REQUEST['temp'];
      $atm->pa = $_REQUEST['pa'];
      $atm->pulso = $_REQUEST['pulso'];
      $atm->fr = $_REQUEST['fr'];
      $verificaPac=$this->model->verificaPaciente($paciente->nombre, $paciente->apePat, $paciente->apeMat);

      if($paciente->idPaciente > 0 || $verificaPac!=null){
        //AGREGAR MODELOS PARA ACTUALIZAR PACIENTES
        $this->model->Actualizar($paciente);
        $this->model1->ActualizarHisCli($histCli);;
        $this->model2->ActualizarATM($atm);
        $this->mensaje="Se ha actualizado correctamente el paciente";
      }else{
        //AGREGAR MODELOS PARA REGISTRAR PACIENTES
        $this->model->Registrar($paciente);
         //COMO ES EL PRIMER REGISTRO DEBEMOS TRAER EL ID PARA PASARLO A LAS DEMAS TABLAS
        $verificaPac=$this->model->verificaPaciente($paciente->nombre, $paciente->apePat, $paciente->apeMat);
        $histCli->idPaciente = $verificaPac->idPaciente; 
        $atm->idPaciente = $verificaPac->idPaciente;
        $this->model1->RegistrarHisCli($histCli);
        $this->model2->RegistrarATM($atm);
        $this->mensaje="Se ha registrado correctamente el paciente";
      }
      $this->Index();
    } catch (Exception $e) {
      $this->error=true;
      $this->mensaje="Ha ocurrido un error al intentar guardar los datos del paciente".$e;
      $this->Index();
    }
  }

  public function Detalles(){
    try {
      $pacientes=true;
      $paciente = new Paciente();
      $pac = $this->model->Obtener($_REQUEST['idPaciente']);
      $histCli = $this->model1->ObtenerHisCliPaciente($_REQUEST['idPaciente']);
      $atm = $this->model2->ObtenerATMPaciente($_REQUEST['idPaciente']);
      $page="view/paciente/expediente.php";
      require_once 'view/index.php';
    }catch (Exception $e) {
      $this->error=true;
      $this->mensaje="Ha ocurrido un error al recuperar la información del paciente";
      $this->Index();
    }
  }
}