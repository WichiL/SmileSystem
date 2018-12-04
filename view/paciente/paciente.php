<style type="text/css">
.lbldetalle{
  color:#2196F3;
}
.h3titulo{
  margin-left: 30px;
  color:#2196F3;
}
.user-profile-content{
  margin-top: 25px;
}
.f{
    padding: 10px;
}
fieldset{
    padding-left: 20px;
    background-color: rgb(247,247,247);  
    border-radius: 10px 10px 10px 10px;
}
strong{
    font-size: 15px;
    color: rgb(68,130,150);
}
.input{
    border-radius: 10px 10px 10px 10px;
}
.d{
    height: 20px;
    width: 60px;
}
.preguntas{
    padding-right: 25px;
    padding-top: 12px;
}
input[type=checkbox] {
  transform: scale(2);
}
legend{
    font-size: 18px;
}
</style>
<title>
  <?php echo $paciente->idPaciente != null ? 'SmileSystem | Actualizar Paciente' : 'SmileSystem | Alta de Paciente'; ?>
</title>
<div class="pull-left breadcrumb_admin clear_both">
  <div class="pull-left page_title theme_color">
      <h1>Pacientes</h1>
      <h2 class=""><?php echo $paciente->idPaciente != null ? 'Actualizar Paciente' : 'Alta de Paciente'; ?></h2>
    </div>
    <div class="pull-right">
      <ol class="breadcrumb">
          <li><a href="?c=inicio">Inicio</a></li>
          <li><a href="?c=paciente">Pacientes</a></li>
          <li class="active"><?php echo $paciente->idPaciente != null ? 'Actualizar Paciente' : 'Alta de Paciente'; ?></li>
      </ol>
    </div>
</div>
<div class="container clear_both padding_fix">
  <div class="row">
    <div class="col-md-12">
      <div class="block-web">
        <div class="header">
          <div class="row" style="margin-top: 15px; margin-bottom: 12px;">
            <div class="col-sm-8">
              <div class="actions"></div>
              <h2 class="content-header theme_color" style="margin-top: -5px;"><?php echo $paciente->idPaciente != null ? '&nbsp;'.$paciente->nombre." ".$paciente->apePat." ".$paciente->apeMat : '&nbsp; Registrar Paciente'; ?></h2>
            </div>  
            <div class="col-md-4">
              <div class="btn-group pull-right">
                <div class="actions">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="porlets-content">
          <form id="myForm" action="?c=Paciente&a=Guardar"  method="post" role="form" enctype="multipart/form-data" parsley-validate novalidate data-toggle="validator">
            
            <div id="smartwizard">
              <ul>
                <li><a href="#general">General</a></li>
                <li><a href="#hisCli">Historial Clinico</a></li>
                <li><a href="#atm">ATM</a></li>
                <li><a href="#odontograma">Odontograma</a></li>
                <li><a href="#radiografia">Radiografia</a></li>
                <li><a href="#hisPag">Historial de Pagos</a></li>
              </ul>            
              <div><!--/NO BORRAR-->

                <!--/SECCION PARA DATOS GENERALES DEL PACIENTE-->
                <div id="general"> 
                  <div class="user-profile-content">
                    <input type="hidden" name="idPaciente" value="<?php echo $paciente->idPaciente != null ? $paciente->idPaciente : 0;  ?>"/>
                    <div id="form-step-0" role="form" data-toggle="validator">
                      <div class="row">
                        <h3 class="h3titulo">Datos Generales</h3>                        
                        <div class="form-row"><!--DATOS PARA SISTEMA-->
                         
                          <div class="col-md-3 mb-3">
                            <label for="fecIngreso" control-label">Fecha de Ingreso<strog class="theme_color">*</strog></label>
                            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                              <input name="fecIngreso" id="fecIngreso" type="date" value="<?php echo $paciente->idPaciente!=null ? $paciente->fecIngreso : "" ?>" class="form-control" required>
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="folio" class="control-label">Folio<strog class="theme_color">*</strog></label>
                            <input onkeypress=" return soloNumeros(event);" name="folio" maxlength="10" id="folio" type="text" autofocus class="form-control" value="<?php echo $paciente->folio;?>" placeholder="Folio" required/>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>                        
                        <div class="row"></div>
                        <div class="form-row"><!--DATOS GENERALES-->
                          <div class="col-md-4 mb-3">
                            <label for="nombre" class="control-label">Nombre<strong class="theme_color">*</strong></label>
                            <input onkeypress=" return soloLetras(event);" name="nombre" maxlength="60" id="nombre" type="text" autofocus class="form-control" value="<?php echo $paciente->nombre;?>" placeholder="Nombre del paciente" required/>
                            <div class="help-block with-errors"></div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="apePat" class="control-label">Ap. Paterno<strong class="theme_color">*</strong></label>
                            <input onkeypress=" return soloLetras(event);" name="apePat" maxlength="60" id="apePat" type="text" autofocus class="form-control" value="<?php echo $paciente->apePat;?>" placeholder="Apellido paterno del paciente" required/>
                            <div class="help-block with-errors"></div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="apeMat" class="control-label">Ap. Materno<strong class="theme_color">*</strong></label>
                            <input onkeypress=" return soloLetras(event);" name="apeMat" maxlength="60" id="apeMat" type="text" autofocus class="form-control" value="<?php echo $paciente->apeMat;?>" placeholder="Apellido materno del paciente"/>
                            <div class="help-block with-errors"></div>
                          </div> 
                          <div class="row"></div>
                          
                          <div class="col-md-2 mb-2">
                            <label for="sexo" class="control-label">Sexo<strong class="theme_color">*</strong></label>
                            <select name="sexo" class="form-control" required>
                              <?php if($paciente->idPaciente==null){ ?>
                              <option value="">
                                Seleccione...
                              </option>
                              <?php } if($paciente->idPaciente!=null){ ?>
                              <option value="<?php echo $paciente->sexo?>">
                                <?php echo $paciente->sexo; ?>
                              </option>
                              <?php } ?>
                              <option>
                                Hombre
                              </option>
                              <option>
                                Mujer
                              </option>
                            </select>
                            <div class="help-block with-errors"></div>
                          </div>
                          
                          <div class="col-md-1 mb-1">
                            <label for="edad" class="control-label">Edad<strong class="theme_color">*</strong></label>
                            <input onkeypress="return soloNumeros(event);" name="edad" maxlength="8" id="edad" type="text" autofocus class="form-control" value="<?php echo $paciente->edad;?>" required/>
                            <div class="help-block with-errors"></div>
                          </div>  
                          <div class="col-md-3 mb-3">
                            <label for="fecNacimiento" control-label">Fecha de Nacimiento<strog class="theme_color">*</strog></label>
                            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                              <input name="fecNacimiento" id="fecNacimiento" type="date" value="<?php echo $paciente->idPaciente!=null ? $paciente->fecNacimiento : "" ?>" class="form-control" required>
                            </div>
                          </div> 
                          <div class="col-md-3 mb-3">
                            <label for="lugNacimiento" class="control-label">Lugar de Nacimiento<strong class="theme_color">*</strong></label>
                            <input onkeypress="return soloLetras(event);" name="lugNacimiento" maxlength="60" id="lugNacimiento" type="text" autofocus class="form-control" value="<?php echo $paciente->lugNacimiento;?>" placeholder="Donde nacio?" required/>
                            <div class="help-block with-errors"></div>
                          </div>                            
                        </div> 
                      </div> 
                      <br>
                      <div class="row"></div>
                      <div class="row">                    
                        <div class="form-row">
                          <h3 class="h3titulo">Domicilio</h3><!--DATOS DE DOMICILIO-->
                          <div class="col-md-4 mb-3">
                            <label for="calle" class="control-label">Calle<strog class="theme_color">*</strog></label>
                            <input name="calle" maxlength="60" id="calle" type="text" autofocus class="form-control" value="<?php echo $paciente->calle;?>" placeholder="Ingrese la calle o vialidad" required/>
                            <div class="help-block with-errors"></div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="numero" class="control-label">Numero<strog class="theme_color">*</strog></label>
                            <input name="numero" maxlength="8" id="numero" type="text" autofocus class="form-control" value="<?php echo $paciente->numero;?>" placeholder="Ingrese el numero de la casa" required/>
                            <div class="help-block with-errors"></div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="colonia" class="control-label">Colonia<strog class="theme_color">*</strog></label>
                            <input name="colonia" maxlength="60" id="colonia" type="text" autofocus class="form-control" value="<?php echo $paciente->colonia;?>" placeholder="Ingrese la colonia o asentamiento" required/>
                            <div class="help-block with-errors"></div>
                          </div>
                           <div class="col-md-4 mb-3">
                            <label for="codPos" class="control-label">Cod. Postal<strog class="theme_color">*</strog></label>
                            <input onkeypress="return soloNumeros(event);" name="codPos" maxlength="5" id="codPos" type="text" autofocus class="form-control" value="<?php echo $paciente->codPos;?>" placeholder="Ingrese un codigo postal" required/>
                            <div class="help-block with-errors"></div>
                          </div>
                           <div class="col-md-4 mb-3">
                            <label for="localidad" class="control-label">Localidad<strog class="theme_color">*</strog></label>
                            <input onkeypress="return soloLetras(event);" name="localidad" maxlength="60" id="localidad" type="text" autofocus class="form-control" value="<?php echo $paciente->localidad;?>" placeholder="Localidad o municipio al que pertenec" required/>
                            <div class="help-block with-errors"></div>
                          </div>
                           <div class="col-md-4 mb-3">
                            <label for="estado" class="control-label">Estado<strog class="theme_color">*</strog></label>
                            <input onkeypress="return soloLetras(event);" name="estado" maxlength="60" id="estado" type="text" autofocus class="form-control" value="<?php echo $paciente->estado;?>" placeholder="Estado al que pertenece" required/>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="row"></div>
                      <div class="row">                    
                        <div class="form-row">
                          <h3 class="h3titulo">Información Adicional</h3><!--INFORMACION ADICIONAL-->
                          <br>
                          <div class="col-md-2 mb-2">
                            <label for="telCasa" class="control-label">Tel. de Casa<strog class="theme_color">*</strog></label>
                            <input parsley-rangelength="[1,14]" onkeypress="return soloNumeros(event);" type="text" placeholder="(999)999-999" name="telCasa" id="telCasa" value="<?php echo $paciente->telCasa;?>" class="form-control mask" data-inputmask="'mask':'(999) 999-9999'" required>
                            <div class="help-block with-errors"></div>
                          </div>

                          <div class="col-md-2 mb-2">
                            <label for="telCel" class="control-label">Tel. Celular</label>
                            <input parsley-rangelength="[1,14]" onkeypress="return soloNumeros(event);" type="text" placeholder="(999)999-999" name="telCel" id="telCel" value="<?php echo $paciente->telCel;?>" class="form-control mask" data-inputmask="'mask':'(999) 999-9999'">
                            <div class="help-block with-errors"></div>
                          </div>

                          <div class="col-md-4 mb-3">
                            <label for="ocupacion" class="control-label">Ocupación<strog class="theme_color">*</strog></label>
                            <input onkeypress="return soloLetras(event);" name="ocupacion" maxlength="45" id="ocupacion" type="text" autofocus class="form-control" value="<?php echo $paciente->ocupacion;?>" placeholder="Ingrese el ocupacion de la casa" required/>
                            <div class="help-block with-errors"></div>
                          </div>

                          <div class="col-md-2 mb-3">
                            <label for="estCivil" class="control-label">Estado Civil<strong class="theme_color">*</strong></label>
                            <select name="estCivil" class="form-control" required>
                              <?php if($paciente->idPaciente==null){ ?>
                              <option value="">
                                Seleccione...
                              </option>
                              <?php } if($paciente->idPaciente!=null){ ?>
                              <option value="<?php echo $paciente->sexo?>">
                                <?php echo $paciente->estCivil; ?>
                              </option>
                              <?php } ?>
                              <option>
                                Soltero(a)
                              </option>
                              <option>
                                Casado(a)
                              </option>
                              <option>
                                Divorciado(a)
                              </option>
                              <option>
                                Viudo(a)
                              </option>
                              <option>
                                Union libre
                              </option>
                            </select>
                            <div class="help-block with-errors"></div>
                          </div>
                          <div class="row"></div>
                           <div class="col-md-4 mb-3">
                            <label for="perResp" class="control-label">Persona Responsable<strog class="theme_color">*</strog></label>
                            <input onkeypress="return soloLetras(event);" name="perResp" maxlength="60" id="perResp" type="text" autofocus class="form-control" value="<?php echo $paciente->perResp;?>" placeholder="Nombre de la persona responsable del paciente" required/>
                            <div class="help-block with-errors"></div>
                          </div>
                           <div class="col-md-6 mb-6">
                            <label for="motConsulta" class="control-label">Motivo de la Consulta</label>
                            <input name="motConsulta" maxlength="150" id="motConsulta" type="text" autofocus class="form-control" value="<?php echo $paciente->motConsulta;?>" placeholder="Describa brevemente el motivo de la consulta"/>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                      </div>
                      <br><br>
                    </div><!--/form step 0-->
                  </div> <!--/user profile content-->
                </div> <!--/general-->

                <!--/SECCION PARA HISTORIAL CLINICO DEL PACIENTE-->
                <div id="hisCli" class="">
                  <div class="user-profile-content">  
                    <input type="hidden" name="idClinico" value="<?php echo $histCli->idClinico != null ? $histCli->idClinico : 0;  ?>"/>
                    <div class="row">
                      <div class="col-md-6 mb-6">
                        <label for="nombre2" class="control-label"><strog class="theme_color">Nombre del Paciente</strog></label>
                        <input name="nombre2" id="nombre2" type="text" class="form-control disabled"  value="<?php echo $paciente->nombre;?>" placeholder="PACIENTE QUE SE ESTA REGISTRANDO"/>
                      </div>      
                    </div><br><br>               
                    <div id="form-step-1" role="form" data-toggle="validator">
                      <h3 class="h3titulo">Historial Clinico</h3>                      
                      <div></div> 
                      <div class="row" style="border: 1px solid gray; border-radius: 10px 10px 10px 10px; padding-top: 10px;" >
                        <div class="col-4 col-sm-4"> <!--EXAMEN DE TEJIDOS--> 
                          <fieldset>
                            <legend>Examen de tejidos</legend>
                            <div class="row">
                              <div class="col-md-6 f">
                                <p><strong>Duros</strong></p>
                                <p><input name="esmalte" type="checkbox" <?php if($histCli->esmalte=="1" ){ ?> checked <?php } ?>>Esmalte</p>
                                <p><input name="dentina" type="checkbox" <?php if($histCli->dentina=="1"){ ?> checked <?php } ?>>Dentina</p>
                              </div>
    
                              <div class="col-md-5 f">
                                <p><strong>Rx</strong></p>
                                <p><input name="raiz" type="checkbox" <?php if($histCli->raiz=="1"){ ?> checked <?php } ?>>Raíz</p>
                                <p><input name="huesos" type="checkbox" <?php if($histCli->huesos=="1"){ ?> checked <?php } ?>>Huesos</p>
                              </div>
                            </div><br><br>
                            <div class="row">
                              <div class="col-md-6 f">
                                <p><strong>Blandos</strong> </p>
                                <p><input name="encia" type="checkbox" <?php if($histCli->encia=="1"){ ?> checked <?php } ?>>Encia</p>
                                <p><input name="inEpil" type="checkbox" <?php if($histCli->inEpil=="1"){ ?> checked <?php } ?>>Inserción Epitelial</p>
                                <p><input name="lengua" type="checkbox" <?php if($histCli->lengua=="1"){ ?> checked <?php } ?>>Lengua</p>
                                <p><input name="pulpo" type="checkbox" <?php if($histCli->pulpo=="1"){ ?> checked <?php } ?>>Pulpa (Alteraciones)</p>
                                <p><input name="velPal" type="checkbox" <?php if($histCli->velPal=="1"){ ?> checked <?php } ?>>Carillos</p>
                                <p><input name="carrillo" type="checkbox" <?php if($histCli->carrillo=="1"){ ?> checked <?php } ?>>Encia</p>
                              </div>
                              <div class="col-md-6 f">
                                <p><strong>Oclusión</strong></p>
                                <p><input name="soMordidaH" type="checkbox" <?php if($histCli->soMordidaH=="1"){ ?> checked <?php } ?>>Sobre Mordida H</p>
                                <p><input name="soMordidaV" type="checkbox" <?php if($histCli->soMordidaV=="1"){ ?> checked <?php } ?>>Sobre Mordida V</p>
                                <p><input name="morAbierta" type="checkbox" <?php if($histCli->morAbierta=="1"){ ?> checked <?php } ?>>Mordida Abierta</p>
                                <p><input name="desBruxismo" type="checkbox" <?php if($histCli->desBruxismo=="1"){ ?> checked <?php } ?>>Desgaste Bruxismo</p>
                                <p><input name="anoclusion" type="checkbox" <?php if($histCli->anoclusion=="1"){ ?> checked <?php } ?>>Anoclusión</p>
                              </div>
                            </div>
                          </fieldset>
                        </div><!--EXAMEN DE TEJIDOS--> 
                      
                        <div class="col-4 col-sm-4"> <!--EXPLORACION FISICA--> 
                          <div class="row">
                            <div class="col-md-6">
                              <fieldset>
                                <legend>Exploración Fisica</legend>
                                <div class="row">
                                  <div class="col-md-4 f">
                                    <p><strong>Cara</strong></p>
                                  </div>
                                  <div class="col-md-6 f">
                                    <p><input name="simetrica" type="checkbox" <?php if($histCli->simetrica=="1"){ ?> checked <?php } ?>>Simétrica</p>
                                    <p><input name="asimetrica" type="checkbox" <?php if($histCli->asimetrica=="1"){ ?> checked <?php } ?>>Asimétrica</p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4 f">
                                    <p><strong>Craneo</strong></p>
                                  </div>
                                  <div class="col-md-6 f">
                                    <p><input name="braquicefalo" type="checkbox" <?php if($histCli->braquicefalo=="1"){ ?> checked <?php } ?>>Braquicéfalo</p>
                                    <p><input name="mesocefalo" type="checkbox" <?php if($histCli->mesocefalo=="1"){ ?> checked <?php } ?>>Mesocéfalo</p>
                                    <p><input name="dolicefalo" type="checkbox" <?php if($histCli->dolicefalo=="1"){ ?> checked <?php } ?>>Dolicefalo</p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4 f">
                                    <p><strong>Perfil</strong></p>
                                  </div>
                                  <div class="col-md-6 f">
                                    <p><input name="recto" type="checkbox" <?php if($histCli->recto=="1"){ ?> checked <?php } ?>>Recto</p>
                                    <p><input name="concavo" type="checkbox" <?php if($histCli->concavo=="1"){ ?> checked <?php } ?>>Concavo</p>
                                    <p><input name="convexo" type="checkbox" <?php if($histCli->convexo=="1"){ ?> checked <?php } ?>>Convexo</p>
                                  </div>
                                </div>
                              </fieldset>
                            </div>
                            <div class="col-md-6">
                              <fieldset>
                                <legend>Antecedentes</legend>
                                <div class="row">
                                  <p><input name="sarampion" type="checkbox" <?php if($histCli->sarampion=="1"){ ?> checked <?php } ?>>Sarampión</p>
                                  <p><input name="viruela" type="checkbox" <?php if($histCli->viruela=="1"){ ?> checked <?php } ?>>Viruela</p>
                                  <p><input name="parotidis" type="checkbox" <?php if($histCli->parotidis=="1"){ ?> checked <?php } ?>>Parotiditis</p>
                                  <p><input name="diabetes" type="checkbox" <?php if($histCli->diabetes=="1"){ ?> checked <?php } ?>>Diabetes</p>
                                  <p><input name="hipertension" type="checkbox" <?php if($histCli->hipertension=="1"){ ?> checked <?php } ?>>Hipertensión</p>
                                  <p><input name="tiroides" type="checkbox" <?php if($histCli->tiroides=="1"){ ?> checked <?php } ?>>Tiroides</p>
                                  <p><input name="hipotiroidismo" type="checkbox" <?php if($histCli->hipotiroidismo=="1"){ ?> checked <?php } ?>>Hipotiroidismo</p>
                                  <p><input name="proCoagulacion" type="checkbox" <?php if($histCli->proCoagulacion=="1"){ ?> checked <?php } ?>>Problemas de Coagulación</p>
                                  <p><input name="alergias" id="alergias" type="checkbox" <?php if($histCli->alergias=="1"){ ?> checked <?php } ?>>Alergias <input name="descAlergias" id="descAlergias" value="<?php echo $histCli->descAlergias;?>" type="text" class="form-control" placeholder="¿Cuales...?" style="width: 80px;"></p><br><br>
                                </div>
                              </fieldset>
                            </div>
                          </div>
                        </div>
                      
                        <div class="col-4 col sm-4"> <!--HIGIENE BUCAL, TIPO CONSULTA, APARATOS Y SISTEMAS--> 
                          <fieldset>
                            <legend>Higiene Bucal</legend>
                            <div class="row">
                              <div class="col-md-6 f">
                                <p><input name="buena" type="checkbox" <?php if($histCli->buena=="1"){ ?> checked <?php } ?>>Buena</p>
                                <p><input name="mala" type="checkbox" <?php if($histCli->mala=="1"){ ?> checked <?php } ?>>Mala</p>
                              </div>
                              <div class="col-md-6 f">
                                <p><input name="tomAlcohol" type="checkbox" <?php if($histCli->tomAlcohol=="1"){ ?> checked <?php } ?>>Bebe Alcohol</p>
                                <p><input name="fuma" type="checkbox" <?php if($histCli->fuma=="1"){ ?> checked <?php } ?>>Fuma</p>
                              </div>
                            </div>
                          </fieldset>
                          <fieldset>
                            <legend>Tipo de Consulta</legend>
                            <div class="row">
                              <div class="col-md-6 f">
                                <p><input name="emergencia" type="checkbox" <?php if($histCli->emergencia=="1"){ ?> checked <?php } ?>>Emergencia</p>
                                <p><input name="revision" type="checkbox" <?php if($histCli->revision=="1"){ ?> checked <?php } ?>>Revisión</p>
                                <p><input name="limpieza" type="checkbox" <?php if($histCli->limpieza=="1"){ ?> checked <?php } ?>>Limpieza</p>
                                <p><input name="canes" type="checkbox" <?php if($histCli->canes=="1"){ ?> checked <?php } ?>>Caries</p>
                              </div>
                              <div class="col-md-6 f">
                                <p><input name="puente" type="checkbox" <?php if($histCli->puente=="1"){ ?> checked <?php } ?>>Puente</p>
                                <p><input name="extraccion" type="checkbox" <?php if($histCli->extraccion=="1"){ ?> checked <?php } ?>>Extracción</p>
                                <p><input name="prostodoncia" type="checkbox" <?php if($histCli->prostodoncia=="1"){ ?> checked <?php } ?>>Prostodoncia</p>
                              </div>
                            </div>
                          </fieldset>
                          <fieldset>
                            <legend>Aparatos y Sistemas</legend>
                            <div class="row">
                              <div class="col-md-12 f">
                                <p><input name="apRespiratorio" type="checkbox" <?php if($histCli->apRespiratorio=="1"){ ?> checked <?php } ?>>Aparato Respiratorio</p>
                                <p><input name="apCardiovascular" type="checkbox" <?php if($histCli->apCardiovascular=="1"){ ?> checked <?php } ?>>Aparato Cardiovascular</p>
                                <p><input name="apDigestivo" type="checkbox" <?php if($histCli->apDigestivo=="1"){ ?> checked <?php } ?>>Aparato Digestivo</p>
                                <p><input name="sisNervioso" type="checkbox" <?php if($histCli->sisNervioso=="1"){ ?> checked <?php } ?>>Sistema Nervioso</p>
                                <p><input name="apUrinario" type="checkbox" <?php if($histCli->apUrinario=="1"){ ?> checked <?php } ?>>Aparato Genito-Urinario</p>
                                <p><input name="cicMestrual"id="cicMestrual" type="checkbox" <?php if($histCli->cicMestrual=="1"){ ?> checked <?php } ?>>Ciclo Menstrual <input name="infCicMes" id="infCicMes" value="<?php echo $histCli->infCicMes;?>" type="text" class="form-control" placeholder="..." style="width: 80px;"></p> 
                                <p><input name="embarazo" id="embarazo" type="checkbox" <?php if($histCli->embarazo=="1"){ ?> checked <?php } ?>>Embarazo <input name="meses" id="meses" value="<?php echo $histCli->meses;?>" type="text" class="form-control" placeholder="Meses" style="width: 80px;"></p>                                                   
                              </div>
                            </div>
                          </fieldset>
                        </div>                        
                      </div> 
                      <div class="col-md-3"></div> <!--HECHIZO-->
                      <div class="col-md-5 f"><!--PREGUNTAS--> 
                        <fieldset class="preguntas">
                          <p class="center">
                            ¿Alguna vez has recibido atención odontológica?
                            <div class="row">
                              <div class="radio">
                                <strong> <input class="input d" type="radio" name="prg1"  value="1" <?php if($histCli->prg1=="1"){ ?> checked <?php } ?>>Si </strong>
                              </div>
                              <div class="radio">
                                <label>
                                  <strong><input class="input d" type="radio" name="prg1" value="2" <?php if($histCli->prg1=="2" || $histCli->idPaciente==null ){ ?> checked <?php } ?>>No </strong>
                                </label>
                              </div>
                            </div>
                          </p><br>
                          <p class="center">
                            ¿Con que frecuencia se cepilla los dientes? 
                            <strong>
                              <div class="center">
                                <input name="prg2" value="<?php echo $histCli->prg2;?>" type="text" class="form-control" placeholder="Cuantas veces a al dia" style="width: 300px;">
                              </div>
                            </strong>
                          </p><br>
                          
                          <p class="center">
                            ¿Le han administrado anestecia local?
                             <div class="radio">
                              <strong> <input class="input d" type="radio" name="prg3"  value="1" <?php if($histCli->prg3=="1"){ ?> checked <?php } ?>>Si </strong>
                            </div>
                            <div class="radio">
                              <label>
                                 <strong><input class="input d" type="radio" name="prg3" value="2" <?php if($histCli->prg3=="2" || $histCli->idPaciente==null ){ ?> checked <?php } ?>>No </strong>
                              </label>
                            </div>
                          </p><br>

                          <p class="center">
                            ¿Ha sido sometido a algun procedimiento quirúrgico <br> en alguna época de su vida?
                             <div class="radio">
                              <strong class=""> <input class="input d" type="radio" name="prg4" value="1" <?php if($histCli->prg4=="1"){ ?> checked <?php } ?>>Si </strong>
                            </div>
                            <div class="radio">
                              <label>
                                 <strong><input class="input d" type="radio" name="prg4" value="2" <?php if($histCli->prg4=="2" || $histCli->idPaciente==null ){ ?> checked <?php } ?>>No </strong>
                              </label>
                            </div>  
                            <p><input name="infPrg3" value="<?php echo $histCli->infPrg3;?>" type="text" class="form-control" placeholder="¿Cual?" style="width: 300px;"></p>                          
                          </p>
                        </fieldset>
                      </div>    
                      <br><br>          
                    </div><!--/form step 1-->
                  </div> <!--/user profile content-->
                </div><!--/hisCli-->
                
                <!--/SECCION PARA ATM DEL PACIENTE-->
                <div id="atm" class="">
                 <div class="user-profile-content"> 
                    <input type="hidden" name="idAtm" value="<?php echo $atm->idAtm != null ? $atm->idAtm : 0;  ?>"/> 
                    <div id="form-step-2" role="form" data-toggle="validator">
                    <div class="row">
                      <div class="col-md-6 mb-6">
                        <label for="nombre3" class="control-label"><strog class="theme_color">Nombre del Paciente</strog></label>
                        <input name="nombre3" id="nombre3" type="text" class="form-control disabled"  value="<?php echo $paciente->nombre;?>" placeholder="PACIENTE QUE SE ESTA REGISTRANDO" />
                      </div>      
                    </div><br><br>                        
                      <h3 class="h3titulo">ATM</h3>                 
                      <br>

                      <div class="col-md-6">
                        <fieldset> 
                        <div class="form-row">
                          <div class="col-md-6 mb-4">
                            <label for="linMedia" class="control-label">Linea Media</label>
                            <input name="linMedia" maxlength="60" id="linMedia" type="text" autofocus class="form-control" value="<?php echo $atm->linMedia;?>" />
                          </div>
                          <div class="col-md-6 mb-4">
                            <label for="habitos" class="control-label">Habitos</label>
                            <input name="habitos" maxlength="60" id="habitos" type="text" autofocus class="form-control" value="<?php echo $atm->habitos;?>" />
                          </div>
                          <div class="col-md-6 mb-4">
                            <label for="bruxismo" class="control-label">Bruxismo</label>
                            <input name="bruxismo" maxlength="60" id="bruxismo" type="text" autofocus class="form-control" value="<?php echo $atm->bruxismo;?>" />
                          </div>
                           <div class="col-md-6 mb-4">
                            <label for="crepitacion" class="control-label">Crepitación</label>
                            <input name="crepitacion" maxlength="60" id="crepitacion" type="text" autofocus class="form-control" value="<?php echo $atm->crepitacion;?>" />
                            <div class="help-block with-errors"></div>
                          </div>
                           <div class="col-md-6 mb-4">
                            <label for="infDolor" class="control-label">Dolor</label>
                            <p><input name="dolDerecha" id="dolDerecha" type="checkbox" <?php if($atm->dolDerecha=="1"){ ?> checked <?php } ?>>Abrir</p>
                            <p><input name="dolIzquierda" id="dolIzquierda" type="checkbox" <?php if($atm->dolIzquierda=="1"){ ?> checked <?php } ?>>Cerrar</p>
                            <input name="infDolor" maxlength="60" id="infDolor" type="text" autofocus class="form-control" value="<?php echo $atm->infDolor;?>" />
                            <div class="help-block with-errors"></div>
                          </div>
                          <div class="col-md-6 mb-4">
                            <label for="infChasquido" class="control-label">Chasquidos</label>
                            <p><input name="chaArriba" type="checkbox" <?php if($atm->chaArriba=="1"){ ?> checked <?php } ?>>Derecho</p>
                            <p><input name="chaAbajo" type="checkbox" <?php if($atm->chaAbajo=="1"){ ?> checked <?php } ?>>Izquierdo</p>
                            <input name="infChasquido" maxlength="60" id="infChasquido" type="text" autofocus class="form-control" value="<?php echo $atm->infChasquido;?>" />
                          </div>
                        
                          </div>
                        </fieldset>
                      </div>

                      <div class="col-md-6">
                        <fieldset>
                            <div class="form-row">
                              <div class="col-md-4 mb-3">
                                <label for="maxAbertura" class="control-label">Max. Abertura(mm)</label>
                                <input onkeypress="return soloNumeros(event);" name="maxAbertura" maxlength="10" id="maxAbertura" type="text" autofocus class="form-control" value="<?php echo $atm->maxAbertura;?>" />
                                <div class="help-block with-errors"></div>
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="izquierdo" class="control-label">Izquierdo(mm)</label>
                                <input onkeypress="return soloNumeros(event);" name="izquierdo" maxlength="10" id="izquierdo" type="text" autofocus class="form-control" value="<?php echo $atm->izquierdo;?>" />
                                <div class="help-block with-errors"></div>
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="derecho" class="control-label">Derecho(mm)</label>
                                <input onkeypress="return soloNumeros(event);" name="derecho" maxlength="10" id="derecho" type="text" autofocus class="form-control" value="<?php echo $atm->derecho;?>" />
                                <div class="help-block with-errors"></div>
                              </div>
                               <div class="col-md-4 mb-3">
                                <label for="potrusion" class="control-label">Potrusión(mm)</label>
                                <input onkeypress="return soloNumeros(event);" name="potrusion" maxlength="10" id="potrusion" type="text" autofocus class="form-control" value="<?php echo $atm->potrusion;?>" />
                                <div class="help-block with-errors"></div>
                              </div>
                               <div class="col-md-4 mb-3">
                                <label for="regresion" class="control-label">Regresión(mm)</label>
                                <input onkeypress="return soloNumeros(event);" name="regresion" maxlength="10" id="regresion" type="text" autofocus class="form-control" value="<?php echo $atm->regresion;?>" />
                                <div class="help-block with-errors"></div>
                              </div>
                               <div class="col-md-4 mb-3">
                                <label for="peso" class="control-label">Peso(Kg)</label>
                                <input onkeypress="return soloNumeros(event);" name="peso" maxlength="10" id="peso" type="text" autofocus class="form-control" value="<?php echo $atm->peso;?>" />
                                <div class="help-block with-errors"></div>
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="talla" class="control-label">Talla(Mts)</label>
                                <input onkeypress="return soloNumeros(event);" name="talla" maxlength="10" id="talla" type="text" autofocus class="form-control" value="<?php echo $atm->talla;?>" />
                                <div class="help-block with-errors"></div>
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="temp" class="control-label">Temperatura(°C)</label>
                                <input onkeypress="return soloNumeros(event);" name="temp" maxlength="10" id="temp" type="text" autofocus class="form-control" value="<?php echo $atm->temp;?>" />
                                <div class="help-block with-errors"></div>
                              </div>
                               <div class="col-md-4 mb-3">
                                <label for="pa" class="control-label">PA(mm/hg)</label>
                                <input onkeypress="return soloNumeros(event);" name="pa" maxlength="10" id="pa" type="text" autofocus class="form-control" value="<?php echo $atm->pa;?>" />
                                <div class="help-block with-errors"></div>
                              </div>
                               <div class="col-md-4 mb-3">
                                <label for="pulso" class="control-label">Pulso(x')</label>
                                <input onkeypress="return soloNumeros(event);" name="pulso" maxlength="10" id="pulso" type="text" autofocus class="form-control" value="<?php echo $atm->pulso;?>" />
                                <div class="help-block with-errors"></div>
                              </div>   
                               <div class="col-md-4 mb-3">
                                <label for="fr" class="control-label">FR(x')</label>
                                <input onkeypress="return soloNumeros(event);" name="fr" maxlength="10" id="fr" type="text" autofocus class="form-control" value="<?php echo $atm->fr;?>" />
                                <div class="help-block with-errors"></div>
                              </div>                                                                                                                     
                            </div>    
                        </fieldset>
                      </div>
                    </div><!--/form step 2-->
                  </div> <!--/user profile content-->
                </div><!--/atm-->

                <!--/SECCION PARA ODONTOGRAMA DEL PACIENTE-->
                <div id="odontograma" class="">
                 <div class="user-profile-content">   
                    <div id="form-step-3" role="form" data-toggle="validator">
                    <div class="row">
                      <div class="col-md-6 mb-6">
                        <label for="nombre4" class="control-label"><strog class="theme_color">Nombre del Paciente</strog></label>
                        <input name="nombre4" id="nombre4" type="text" class="form-control disabled"  value="<?php echo $paciente->nombre;?>" placeholder="PACIENTE QUE SE ESTA REGISTRANDO" required/>
                      </div>      
                    </div><br><br>  
                      <h3 class="h3titulo">Odontograma</h3>    
                      <br><br>

                    </div><!--/form step 3-->
                  </div> <!--/user profile content-->
                </div><!--/odontograma-->

                <!--/SECCION PARA RADIOGRAFIA DEL PACIENTE-->
                <div id="radiografia" class="">
                 <div class="user-profile-content">   
                    <div id="form-step-4" role="form" data-toggle="validator">
                    <div class="row">
                      <div class="col-md-6 mb-6">
                        <label for="nombre5" class="control-label"><strog class="theme_color">Nombre del Paciente</strog></label>
                        <input name="nombre5" id="nombre5" type="text" class="form-control disabled"  value="<?php echo $paciente->nombre;?>" placeholder="PACIENTE QUE SE ESTA REGISTRANDO" required/>
                      </div>      
                    </div><br><br>  
                      <h3 class="h3titulo">Radiografias</h3>   
                      <br><br>

                    </div><!--/form step 4-->
                  </div> <!--/user profile content-->
                </div><!--/radiografia-->

                <!--/SECCION PARA HISTORIAL DE PAGOS DEL PACIENTE-->
                <div id="hisPag" class="">
                 <div class="user-profile-content">   
                    <div id="form-step-5" role="form" data-toggle="validator">
                    <div class="row">
                      <div class="col-md-6 mb-6">
                        <label for="nombre6" class="control-label"><strog class="theme_color">Nombre del Paciente</strog></label>
                        <input name="nombre6" id="nombre6" type="text" class="form-control disabled"  value="<?php echo $paciente->nombre;?>"" placeholder="PACIENTE QUE SE ESTA REGISTRANDO" required/>
                      </div>      
                    </div><br><br>  
                      <h3 class="h3titulo">Historial de Pagos</h3>  
                      <br><br>

                    </div><!--/form step 5-->
                  </div> <!--/user profile content-->
                </div><!--/hisPag-->
              
              </div><!--/NO BORRAR-->
            </div><!--/smartwizard-->
          </form> 
        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->
</div><!--/container clear_both padding_fix-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
      $('#').on('click', function(){ 
      $('#smartwizard').smartWizard("reset");
      $('#myForm').find("input, textarea").val("");
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function () {
        $("#nombre").keyup(function () {
            var value = $(this).val();
            $("#nombre2").val(value);
            $("#nombre3").val(value);
            $("#nombre4").val(value);
            $("#nombre5").val(value);
            $("#nombre6").val(value);
        });
});
</script>

<!-- <script type="text/javascript">
  document.getElementById("embarazo").onclick = function(){
          if (document.getElementById("meses").disabled){
            document.getElementById("meses").disabled = false
          }else{
            document.getElementById("meses").disabled = true
          }
        }
    document.getElementById("alergias").onclick = function(){
          if (document.getElementById("descAlergias").disabled){
            document.getElementById("descAlergias").disabled = false
          }else{
            document.getElementById("descAlergias").disabled = true
          }
        }
    document.getElementById("cicMestrual").onclick = function(){
          if (document.getElementById("infCicMes").disabled){
            document.getElementById("infCicMes").disabled = false
          }else{
            document.getElementById("infCicMes").disabled = true
          }
        }
</script> -->


<!-- BOTONES 
                      <div class="form-group">
                        <div class="col-sm-offset-6 col-sm-6">
                          <button type="submit" class="btn btn-success">Guardar</button>
                          <a href="?c=paciente" class="btn btn-danger"> Cancelar</a>
                          <a id="clear" class="btn btn-primary"> Limpiar</a>
                          <a href="#" class="btn btn-default disabled">Anterior</a>
                          <a href="#hisCli" class="btn btn-default">Siguiente</a>
                        </div>
                      </div>/form-group-->