
<style type="text/css">
.lbldetalle{
  color:#424242;
  font-weight: bold;
}
.h3subtitulo{
  color:#2196F3;
  font-weight: bold;
}
</style>
 
<title>
SmileSystem | Expediente de Paciente'; ?>
</title>
<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Pacientes</h1>
    <h2 class="">Expediente del Paciente</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a href="?c=Inicio">Inicio</a></li>
      <li><a href="?c=paciente">Pacientes</a></li>
      <li class="active">Expediente del Paciente</li>
    </ol>
  </div>
</div>
<div class="container clear_both padding_fix">
  <div class="row col-md-12">
    <div class="block-web">
     <div class="header">
      <div class="row" style="margin-top: 15px; margin-bottom: 12px;">
        <div class="col-sm-7">
          <div class="actions"> </div>
          <h2 class="content-header theme_color" style="margin-top: -10px;"><?php echo $pac->nombre." ".$pac->apePat." ".$pac->apeMat; ?></h2>
        </div>
      </div>    
    </div>
  </div>

  <?php if(isset($this->mensaje)){ if(!isset($warning)){?>
  <div class="row" style="margin-bottom: -20px; margin-top: 20px">
    <div class="col-md-12">
      <div class="alert alert-success fade in">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <i class="fa fa-check"></i>&nbsp;<?php echo $this->mensaje; ?>
      </div>
    </div>
  </div> 
  <?php } if(isset($warning)){ ?>
  <div class="row" style="margin-bottom: -20px; margin-top: 20px">
    <div class="col-md-12">
      <div class="alert alert-warning fade in">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <i class="fa fa-warning"></i>&nbsp;<?php echo $this->mensaje; ?>
      </div>
    </div>
  </div>
  <?php } }?>

  <div class="row">
    <div class="container header padding_fix">
      <h2 class="content-header h3subtitulo theme_color" style="color:#4FC338;margin-top: -10px;">GENERALES</h2>
    </div>
    <div class="col-md-6"><!-- DATOS PERSONALES-->
      <div class="block-web">
        <div class="header">
          <h3 class="content-header h3subtitulo">Datos Personales</h3>
        </div>
        <div class="porlets-content">
          <div class="panel-body"> 
            <div class="col-md-12">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>
                      <div class="col-md-12">
                        <label class="col-sm-6 lbldetalle">Folio:</label>
                        <label class="col-sm-6 control-label"><?php echo $pac->folio; ?></label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                   <td>
                      <div class="col-md-12">
                       <label class="col-sm-6 lbldetalle">Fecha de Ingreso:</label>
                       <label class="col-sm-6 control-label"><?php echo $pac->fecIngreso; ?></label>
                     </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="col-md-12">
                       <label class="col-sm-6 lbldetalle">Nombre:</label>
                       <label class="col-sm-6 control-label"><?php echo $pac->nombre." ".$pac->apePat." ".$pac->apeMat; ?></label>
                     </div>
                   </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="col-md-12">
                        <label class="col-sm-6 lbldetalle">Edad:</label>
                        <label class="col-sm-6 control-label"><?php echo $pac->edad; ?></label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="col-md-12">
                        <label class="col-sm-6 lbldetalle">Sexo:</label>
                        <label class="col-sm-6 control-label"><?php echo $pac->sexo; ?></label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="col-md-12">
                        <label class="col-sm-6 lbldetalle">Fecha de Nacimiento:</label>
                        <label class="col-sm-6 control-label"><?php echo $pac->fecNacimiento; ?></label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="col-md-12">
                        <label class="col-sm-6 lbldetalle">Lugar de Nacimiento:</label>
                        <label class="col-sm-6 control-label"><?php echo $pac->lugNacimiento; ?></label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="col-md-12">
                        <label class="col-sm-6 lbldetalle">Telefono Particular:</label>
                        <label class="col-sm-6 control-label"><?php echo $pac->telCasa; ?></label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="col-md-12">
                        <label class="col-sm-6 lbldetalle">Telefono Celular:</label>
                        <label class="col-sm-6 control-label"><?php echo $pac->telCel; ?></label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="col-md-12">
                        <label class="col-sm-6 lbldetalle">Persona Responsable del Paciente:</label>
                        <label class="col-sm-6 control-label"><?php echo $pac->perResp; ?></label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="col-md-12">
                        <label class="col-sm-6 lbldetalle">Motivo de Consulta:</label>
                        <label class="col-sm-6 control-label"><?php echo $pac->motConsulta; ?></label>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/DATOS PERSONALES-->
    <div class="col-md-6"><!--DOMICILIO-->
      <div class="block-web">
        <div class="header">
          <h3 class="content-header h3subtitulo">Domicilio</h3>
        </div>
        <div class="porlets-content">
          <div class="panel-body">
            <div class="col-md-12">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>
                      <div class="col-md-12">
                        <label class="col-sm-6 lbldetalle">Calle:</label>
                        <label class="col-sm-6 control-label"><?php echo $pac->calle; ?></label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                   <td>
                      <div class="col-md-12">
                       <label class="col-sm-6 lbldetalle">Numero:</label>
                       <label class="col-sm-6 control-label"><?php echo $pac->numero; ?></label>
                     </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="col-md-12">
                       <label class="col-sm-6 lbldetalle">Colonia:</label>
                       <label class="col-sm-6 control-label"><?php echo $pac->colonia; ?></label>
                     </div>
                   </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="col-md-12">
                        <label class="col-sm-6 lbldetalle">Codigo Postal:</label>
                        <label class="col-sm-6 control-label"><?php echo $pac->codPos; ?></label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="col-md-12">
                        <label class="col-sm-6 lbldetalle">Localidad:</label>
                        <label class="col-sm-6 control-label"><?php echo $pac->localidad; ?></label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="col-md-12">
                        <label class="col-sm-6 lbldetalle">Estado:</label>
                        <label class="col-sm-6 control-label"><?php echo $pac->estado; ?></label>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/DOMICILIO-->
  </div><!--/row-->
</div><!--/container clear_both padding_fix-->
<script src="assets/js/jquery-2.1.0.js"></script>