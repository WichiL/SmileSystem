
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
<?php
echo "<pre>";
print_r($verificaPac);
echo "</pre>";
?> 
<title>
SmileSystem | Expediente de Paciente'; ?>
</title>
<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
    <h1>Pacientes</h1>
    <h2 class="">Información de Paciente</h2>
  </div>
  <div class="pull-right">
    <ol class="breadcrumb">
      <li><a href="?c=Inicio">Inicio</a></li>
      <li><a href="?c=paciente">Pacientes</a></li>
      <li class="active">Información de Paciente</li>
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
    <div class="col-md-6">
      <div class="block-web">
        <div class="header">
          <h3 class="content-header h3subtitulo">Datos generales</h3>
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
                     <label class="col-sm-6 control-label"><?php echo $pac->nombre; ?></label>
                   </div>
                 </td>
               </tr>
               <tr>
                <td>
                 <div class="col-md-12">
                   <label class="col-sm-6 lbldetalle">Apellido Materno:</label>
                   <label class="col-sm-6 control-label"><?php echo $pac->apePat; ?></label>
                 </div>
               </td>
             </tr>
             <tr>
              <td>
               <div class="col-md-12">
                 <label class="col-sm-6 lbldetalle">Apellido Paterno:</label>
                 <label class="col-sm-6 control-label"><?php echo $pac->apeMat; ?></label>
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
     <label class="col-sm-6 lbldetalle">Nivel de estudio:</label>
     <label class="col-sm-6 control-label"><?php echo $pac->nivelEstudios; ?></label>
   </div>
 </td>
</tr>
<tr>
  <td>
   <div class="col-md-12">
     <label class="col-sm-6 lbldetalle">Seguridad social:</label>
     <label class="col-sm-6 control-label"><?php echo $pac->seguridadSocial; ?></label>
   </div>
 </td>
</tr>
<tr>
  <td>
   <div class="col-md-12">
     <label class="col-sm-6 lbldetalle">Discapacidad:</label>
     <label class="col-sm-6 control-label"><?php echo $pac->discapacidad; ?></label>
   </div>
 </td>
</tr>
<tr>
  <td>
    <div class="col-md-12">
     <label class="col-sm-6 lbldetalle">paceficiario Colectivo:</label>
     <label class="col-sm-6 control-label"><?php if($pac->paceficiarioColectivo==1 ){
      echo "Si";} else {echo"No";}?></label>
    </div>
  </td>
</tr>

</tbody>
</table>
</div>
</div>
</div><!--/porlets-content-->
</div><!--/block-web-->
</div><!--/col-md-6-->
<div class="col-md-6">
  <div class="block-web">
    <div class="header">
      <h3 class="content-header h3subtitulo">Vialidad</h3>
    </div>
    <div class="porlets-content">
      <div class="panel-body">
        <div class="col-md-12">
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>
                  <div class="col-md-12">
                    <label class="col-sm-6 lbldetalle">Vialidad:</label>
                    <label class="col-sm-6 control-label"><?php echo $pac->tipoVialidad; ?></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                 <div class="col-md-12">
                   <label class="col-sm-6 lbldetalle">Nombre de la vidalidad:</label>
                   <label class="col-sm-6 control-label"><?php echo $pac->nombreVialidad; ?></label>
                 </div>
               </td>
             </tr>
             <tr>
              <td>
               <div class="col-md-12">
                 <label class="col-sm-6 lbldetalle">Número exterior:</label>
                 <label class="col-sm-6 control-label"><?php echo $pac->noExterior; ?></label>
               </div>
             </td>
           </tr>
           <tr>
            <td>
             <div class="col-md-12">
               <label class="col-sm-6 lbldetalle">Numero interior:</label>
               <label class="col-sm-6 control-label"><?php echo $pac->noInterior; ?></label>
             </div>
           </td>
         </tr>
         <tr>
          <td>
           <div class="col-md-12">
            <label class="col-sm-6 lbldetalle">Municipio:</label>
            <label class="col-sm-6 control-label"><?php echo $pac->nombreMunicipio; ?></label>
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
         <label class="col-sm-6 lbldetalle">Asentamiento:</label>
         <label class="col-sm-6 control-label"><?php echo $pac->nombreAsentamiento; ?></label>
       </div>
     </td>
   </tr>
   <tr>
    <td>
     <div class="col-md-12">
       <label class="col-sm-6 lbldetalle">Entre vialidades:</label>
       <label class="col-sm-6 control-label"><?php echo $pac->entreVialidades; ?></label>
     </div>
   </td>
 </tr>
 <tr>
  <td>
   <div class="col-md-12">
     <label class="col-sm-6 lbldetalle">Descripción de la ubicación:</label>
     <label class="col-sm-6 control-label"><?php echo $pac->descripcionUbicacion; ?></label>
   </div>
 </td>
</tr>
</tbody>
</table>
</div>
</div>
</div><!--/porlets-content-->
</div><!--/block-web-->
</div><!--/col-md-6-->
</div><!--/row-->
<div class="row">
  <div class="col-md-6">
    <div class="block-web">
      <div class="header">
        <h3 class="content-header h3subtitulo">Estado social</h3>
      </div>
      <div class="porlets-content">
        <div class="panel-body">
          <div class="col-md-12">
            <table class="table table-striped">
              <tbody>
                <tr>
                  <td>
                    <div class="col-md-12">
                     <label class="col-sm-6 lbldetalle">Estudio socioeconomico:</label>
                     <label class="col-sm-6 control-label"><?php if($pac->estudioSocioeconomico==1 ){
                      echo "Si";} else {echo"No";}?></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                   <div class="col-md-12">
                     <label class="col-sm-6 lbldetalle">Jefe de familia:</label>
                     <label class="col-sm-6 control-label"><?php if($pac->jefeFamilia==1 ){
                      echo "Si";} else {echo"No";}?></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                   <div class="col-md-12">
                     <label class="col-sm-6 lbldetalle">Estado civil:</label>
                     <label class="col-sm-6 control-label"><?php echo $pac->estadoCivil; ?></label>
                   </div>
                 </td>
               </tr>
               <tr>
                <td>
                 <div class="col-md-12">
                   <label class="col-sm-6 lbldetalle">Ocupación:</label>
                   <label class="col-sm-6 control-label"><?php echo $pac->ocupacion; ?></label>
                 </div>
               </td>
             </tr>
             <tr>
              <td>
               <div class="col-md-12">
                 <label class="col-sm-6 lbldetalle">Ingreso mensual:</label>
                 <label class="col-sm-6 control-label"><?php echo $pac->ingresoMensual; ?></label>
               </div>
             </td>
           </tr>
           <tr>
            <td>
             <div class="col-md-12">
               <label class="col-sm-6 lbldetalle">Nivel de estudio:</label>
               <label class="col-sm-6 control-label"><?php echo $pac->nivelEstudios; ?></label>
             </div>
           </td>
         </tr>
         <tr>
          <td>
           <div class="col-md-12">
             <label class="col-sm-6 lbldetalle">Integrantes familia:</label>
             <label class="col-sm-6 control-label"><?php echo $pac->integrantesFamilia; ?></label>
           </div>
         </td>
       </tr>
       <tr>
        <td>
         <div class="col-md-12">
           <label class="col-sm-6 lbldetalle">Dependientes economicos:</label>
           <label class="col-sm-6 control-label"><?php echo $pac->dependientesEconomicos; ?></label>
         </div>
       </td>
     </tr>
     <tr>
      <td>
        <div class="col-md-12">
         <label class="col-sm-6 lbldetalle">Grupo vulnerable:</label>
         <label class="col-sm-6 control-label"><?php echo $pac->grupoVulnerable; ?></label>
       </div>
     </td>
   </tr>
 </tbody>
</table>
</div>
</div>
</div><!--/porlets-content-->
</div><!--/block-web-->
</div><!--/col-md-6-->

<div class="col-md-6">
  <div class="block-web">
    <div class="header">
      <h3 class="content-header h3subtitulo">Vivienda</h3>
    </div>
    <div class="porlets-content">
      <div class="panel-body">
        <div class="col-md-12">
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>
                  <div class="col-md-12">
                   <label class="col-sm-6 lbldetalle">Tipo de vivienda:</label>
                   <label class="col-sm-6 control-label"><?php echo $pac->vivienda; ?></label>
                 </div>
               </td>
             </tr>
             <tr>
              <td>
               <div class="col-md-12">
                 <label class="col-sm-6 lbldetalle">Número de habitantes:</label>
                 <label class="col-sm-6 control-label"><?php echo $pac->noHabitantes; ?></label>
               </div>
             </td>
           </tr>
           <tr>
            <td>
             <div class="col-md-12">
               <label class="col-sm-6 lbldetalle">Electricidad:</label>
               <label class="col-sm-6 control-label"><?php if($pac->viviendaElectricidad==1 ){
                echo "Si";} else {echo"No";}?></label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
             <div class="col-md-12">
               <label class="col-sm-6 lbldetalle">Agua:</label>
               <label class="col-sm-6 control-label"><?php if($pac->viviendaAgua==1 ){
                echo "Si";} else {echo"No";}?></label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
             <div class="col-md-12">
               <label class="col-sm-6 lbldetalle">Drenaje:</label>
               <label class="col-sm-6 control-label"><?php if($pac->viviendaDrenaje==1 ){
                echo "Si";} else {echo"No";}?></label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
             <div class="col-md-12">
               <label class="col-sm-6 lbldetalle">Gas:</label>
               <label class="col-sm-6 control-label"><?php if($pac->viviendaGas==1 ){
                echo "Si";} else {echo"No";}?></label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
             <div class="col-md-12">
               <label class="col-sm-6 lbldetalle">Teléfono:</label>
               <label class="col-sm-6 control-label"><?php if($pac->viviendaTelefono==1 ){
                echo "Si";} else {echo"No";}?></label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
             <div class="col-md-12">
               <label class="col-sm-6 lbldetalle">Internet:</label>
               <label class="col-sm-6 control-label"><?php if($pac->viviendaDrenaje==1 ){
                echo "Si";} else {echo"No";}?></label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div><!--/porlets-content-->
</div><!--/block-web-->
</div><!--/col-md-6-->
</div><!--/row-->
<div class="row">
  <div class="col-md-12">
    <div class="block-web">
      <div class="header">
        <h3 class="content-header h3subtitulo">Apoyos generados</h3>
      </div>
      <div class="porlets-content">
        <div class="panel-body">
          <?php if($infoApoyo!=null){ $i=1; foreach ($infoApoyo as $infoApoyo): ?>
            <div class="col-md-6">
             <table class="table table-striped">
              <tbody>
                <tr>
                  <td>
                    <div class="col-md-12">   
                     <label class="col-sm-5 lblinfo" style="margin-top: 5px; color:#607D8B;"><b>Información del <?php echo $i ?>° apoyo</b></label>
                   </div>
                 </td>
               </tr>
               <tr>
                <td>
                  <div class="col-md-12">
                   <label class="col-sm-4 lbl-detalle"><b>dependencia que lo apoya:</b></label>
                   <label class="col-sm-7 control-label"><?php echo $infoApoyo->direccion ?></label>
                 </div>
                 <div class="col-md-12">
                  <label class="col-sm-4 lbl-detalle"><b>Tipo de apoyo:</b></label>
                  <label class="col-sm-7 control-label"><?php echo $infoApoyo->tipoApoyo; ?></label>
                </div>
                <div class="col-md-12">
                  <label class="col-sm-4 lbl-detalle"><b>Origen:</b></label>
                  <label class="col-sm-7 control-label"><?php echo $infoApoyo->origen; ?></label>
                </div>
                <div class="col-md-12">
                  <label class="col-sm-4 lbl-detalle"><b>Programa:</b></label>
                  <label class="col-sm-7 control-label"><?php echo $infoApoyo->programa; ?></label>
                </div>
                <div class="col-md-12">
                  <label class="col-sm-4 lbl-detalle"><b>Subprograma:</b></label>
                  <label class="col-sm-7 control-label"><?php echo $infoApoyo->subprograma; ?></label>
                </div>
                <div class="col-md-12">
                  <label class="col-sm-4 lbl-detalle"><b>Periodicidad:</b></label>
                  <label class="col-sm-7 control-label"><?php echo $infoApoyo->periodicidad; ?></label>
                </div>
                <div class="col-md-12">
                  <label class="col-sm-4 lbl-detalle"><b>Programa social:</b></label>
                  <label class="col-sm-7 control-label" style="color:red"><strong>P E N D I E N T E</strong></label>
                </div>
                <div class="col-md-12">
                  <label class="col-sm-4 lbl-detalle"><b>Importe:</b></label>
                  <label class="col-sm-7 control-label">$ <?php echo $infoApoyo->importeApoyo; ?></label>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <?php  
      if ($i%2==0){
        echo "<hr>";
      }$i++;
    endforeach; }else{
      echo "<h3>No se han registrado apoyos a este paceficiario<h3>";
    }
    ?>
  </div>
</div><!--/porlets-content-->
</div><!--/block-web-->
</div><!--/col-md-12-->
</div><!--/row-->
</div><!--/block-web--> 
</div><!--/row-col-md-12--> 
</div><!--/container clear_both padding_fix-->
<div class="modal fade" id="modalBuscarCurp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content panel default blue_border horizontal_border_1">
     <form action="?c=paceficiario&a=Crud" enctype="multipart/form-data" method="post" parsley-validate novalidate id="form-curp">
      <div class="modal-body"> 
        <div class="row">
          <div class="block-web">
            <div class="header">
              <h3 class="content-header h3subtitulo">&nbsp;paceficiario por CURP</h3>
            </div>
            <div class="porlets-content" style="margin-bottom: -50px;">
              <div class="form-group">
                <div class="col-sm-10">
                  <input name="curp"  maxlength="18" id="curp" type="text" required parsley-regexp="([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)"   required parsley-rangelength="[18,18]"  onkeyup="mayus(this);" class="form-control" required placeholder="Ingrese la curp del paceficiario" autofocus>
                </div>
              </div><!--/form-group-->
            </div><!--/porlets-content--> 
          </div><!--/block-web--> 
        </div>
      </div>
      <div class="modal-footer" style="margin-top: -10px;">
        <div class="row col-md-5 col-md-offset-7" style="margin-top: -5px;">
          <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-sm btn-primary">Aceptar</button>
        </div>
      </div>
    </form>
  </div><!--/modal-content--> 
</div><!--/modal-dialog--> 
</div><!--/modal-fade-->
<div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width: 60%;">
    <div class="modal-content" id="div-modal-content">
      <!--************************En esta sección se incluye el modal de informacion de registro y apoyo***************************-->
    </div><!--/modal-content--> 
  </div><!--/modal-dialog--> 
</div><!--/modal-fade--> 

<div class="modal fade" id="mActivarpaceficiario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="block-web">
            <div class="header">
              <h3 class="content-header h3subtitulo">&nbsp;Activar paceficiario</h3>
            </div>
            <div class="porlets-content" style="margin-bottom: -50px;">
              <h4>El paceficiario que esta ingresando ya ha sido dado de alta en el sistema anteriormente y ha sido eliminado. ¿Desea volverlo a activar?</h4>
            </div><!--/porlets-content-->
          </div><!--/block-web-->
        </div>
      </div>
      <div class="modal-footer" style="margin-top: -10px;">
        <div class="row col-md-5 col-md-offset-7" style="margin-top: -5px;">
          <form action="?c=paceficiario&a=Activarpaceficiario" enctype="multipart/form-data" method="post">
            <input type="hidden" name="curp" id="txtCurpActivar">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-info">Activar</button>
          </form>
        </div>
      </div>
    </div><!--/modal-content-->
  </div><!--/modal-dialog-->
</div><!--/modal-fade-->

<script src="assets/js/jquery-2.1.0.js"></script>

<script>
  infoRegistro = function (idpaceficiario){
    var idpaceficiario=idpaceficiario;
    $.post("index.php?c=paceficiario&a=Inforegistro", {idpaceficiario: idpaceficiario}, function(info) {
      $("#div-modal-content").html(info);
    }); 
  }

  $(document).ready(function(){

    $('#form-curp').submit(function() {
      Verificarpaceficiario();
      return false;
    });
  });

  var curp="";
  Verificarpaceficiario = function(){
    curp=$("#curp").val();
    $.post("index.php?c=paceficiario&a=Verificarpaceficiario", {curp: curp}, function(respuesta) {
      if(respuesta=="Inactivo"){
        $('#txtCurpActivar').val(curp);
        $('#modalBuscarCurp').modal('toggle');
        $('#mActivarpaceficiario').modal('toggle');
      }else {
        location.href="?c=paceficiario&a=Crud&curp="+curp;
      }
    });
  }
</script>

