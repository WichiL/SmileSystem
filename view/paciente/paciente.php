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
                    <input type="hidden" name="idPaciente"  value="<?php echo $paciente->idPaciente != null ? $paciente->idPaciente : 0;  ?>"/>
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
                              <option value="<?php echo $paciente->idPaciente?>">
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
                            <input onkeypress="return soloNumeros(event);" type="text" placeholder="(999)999-999" name="telCasa" id="telCasa" value="<?php echo $paciente->telCasa;?>" class="form-control mask" data-inputmask="'mask':'(999) 999-9999'" required>
                            <div class="help-block with-errors"></div>
                          </div>

                          <div class="col-md-2 mb-2">
                            <label for="telCel" class="control-label">Tel. Celular</label>
                            <input onkeypress="return soloNumeros(event);" type="text" placeholder="(999)999-999" name="telCel" id="telCel" value="<?php echo $paciente->telCel;?>" class="form-control mask" data-inputmask="'mask':'(999) 999-9999'">
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
                              <option value="<?php echo $paciente->idPaciente?>">
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
                    </div><!--/form step 0-->
                  </div> <!--/user profile content-->
                </div> <!--/general-->

                <!--/SECCION PARA HISTORIAL CLINICO DEL PACIENTE-->
                <div id="hisCli" class="">
                  <div class="user-profile-content">   
                    <div id="form-step-1" role="form" data-toggle="validator">
                      <h3 class="h3titulo">Historial Clinico</h3>  
                      <div class="row" style="border: 1px solid gray; border-radius: 10px 10px 10px 10px; padding-top: 10px;" >
                        <div class="col-4 col-sm-4"> <!--EXAMEN DE TEJIDOS--> 
                          <fieldset>
                            <legend>Examen de tejidos</legend>
                            <div class="row">
                              <div class="col-md-6 f">
                                <p><strong>Duros</strong></p>
                                <p><input type="checkbox">Esmalte</p>
                                <p><input type="checkbox">Detina</p>
                              </div>
                              <div class="col-md-5 f">
                                <p><strong>Rx</strong></p>
                                <p><input type="checkbox">Raíz</p>
                                <p><input type="checkbox">Huesos</p>
                              </div>
                            </div><br><br>
                            <div class="row">
                              <div class="col-md-6 f">
                                <p><strong>Blandos</strong> </p>
                                <p><input type="checkbox">Encía</p>
                                <p><input type="checkbox">Enserción Epitelial</p>
                                <p><input type="checkbox">Lengua</p>
                                <p><input type="checkbox">Pulpa (Alteraciones)</p>
                                <p><input type="checkbox">Velo del Paladar</p>
                                <p><input type="checkbox">Carrillos</p>
                              </div>
                              <div class="col-md-6 f">
                                <p><strong>Oclusión</strong></p>
                                <p><input type="checkbox">Sobre Mordida H</p>
                                <p><input type="checkbox">Sobre Mordida V</p>
                                <p><input type="checkbox">Mordida Abierta</p>
                                <p><input type="checkbox">DEsgasteBruxismo</p>
                                <p><input type="checkbox">Anoclusión</p><br><br><br><br>
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
                                    <p><input type="checkbox">Simétrica</p>
                                    <p><input type="checkbox">Asimétrica</p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4 f">
                                    <p><strong>Craneo</strong></p>
                                  </div>
                                  <div class="col-md-6 f">
                                    <p><input type="checkbox">Braquicéfalo</p>
                                    <p><input type="checkbox">Mesocéfalo</p>
                                    <p><input type="checkbox">Dolicocéfalo</p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4 f">
                                    <p><strong>Perfil</strong></p>
                                  </div>
                                  <div class="col-md-6 f">
                                    <p><input type="checkbox">Recto</p>
                                    <p><input type="checkbox">Concavo</p>
                                    <p><input type="checkbox">Convexo</p>
                                  </div>
                                </div>
                              </fieldset>
                            </div>
                            <div class="col-md-6">
                              <fieldset>
                                <legend>Antecedentes</legend>
                                <div class="row">
                                  <p><input type="checkbox">Sarampion</p>
                                  <p><input type="checkbox">Viruela</p>
                                  <p><input type="checkbox">Parotiditis</p>
                                  <p><input type="checkbox">Diabetes</p>
                                  <p><input type="checkbox">Hipertensión</p>
                                  <p><input type="checkbox">Tiroides</p>
                                  <p><input type="checkbox">Hipotiroidismo</p>
                                  <p><input type="checkbox">Problemas de Coagulación</p>
                                  <p><input type="checkbox">Alergias: <input type="text" placeholder="¿Cuales...?" class="input" style="width: 80px;"></p><br><br>
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
                                <p><input type="checkbox">Buena</p>
                                <p><input type="checkbox">Mala</p>
                              </div>
                              <div class="col-md-6 f">
                                <p><input type="checkbox">Bebe Alcohol</p>
                                <p><input type="checkbox">Fuma</p>
                              </div>
                            </div>
                          </fieldset>
                          <fieldset>
                            <legend>Tipo de Consulta</legend>
                            <div class="row">
                              <div class="col-md-6 f">
                                <p><input type="checkbox">Emergencia</p>
                                <p><input type="checkbox">Revisión</p>
                                <p><input type="checkbox">Limpieza</p>
                                <p><input type="checkbox">Caries</p>
                              </div>
                              <div class="col-md-6 f">
                                <p><input type="checkbox">Puente</p>
                                <p><input type="checkbox">Extracción</p>
                                <p><input type="checkbox">Prostodoncia</p>
                              </div>
                            </div>
                          </fieldset>
                          <fieldset>
                            <legend>Aparatos y Sistemas</legend>
                            <div class="row">
                              <div class="col-md-12 f">
                                <p><input type="checkbox">Aparato Respiratorio</p>
                                <p><input type="checkbox">Aparato Cardiovascular</p>
                                <p><input type="checkbox">Aparato Digestivo</p>
                                <p><input type="checkbox">Sistema Nervioso</p>
                                <p><input type="checkbox">Aparato Genito-Urinario</p>
                                <p><input type="checkbox">Ciclo Menstrual <input type="text" placeholder="Ciclo" class="input" style="width: 64px;"></p>
                                <p><input type="checkbox">Embarazo: <input type="text" placeholder="Meses" class="input" style="width: 64px;"></p>
                              </div>
                            </div>
                          </fieldset>
                        </div>                        
                      </div> 
                      <div class="col-md-2"></div> <!--HECHIZO-->
                      <div class="col-md-8 f"><!--PREGUNTAS--> 
                        <fieldset class="preguntas">
                          <p>
                            ¿Alguna vez has recibido atención odontológica? 
                            <strong class="pull-right">Si&nbsp;<input type="radio">&nbsp;&nbsp;No&nbsp;<input type="radio"></strong>
                          </p>
                          <p>
                            ¿Con que frecuencia se cepilla los dientes? 
                            <strong class="pull-right"><input type="text" class="input d"></strong>
                          </p>
                          <p>
                            ¿Le han administrado anestecia local?
                            <strong class="pull-right">Si&nbsp;<input type="radio">&nbsp;&nbsp;No&nbsp;<input type="radio"></strong>
                          </p>
                          <p>
                            ¿Ha sido sometido a algun procedimiento quirúrgico <br> en alguna época de su vida? 
                            <strong class="pull-right">Si&nbsp;<input type="radio">&nbsp;&nbsp;No&nbsp;<input type="radio"></strong>
                          </p>
                        </fieldset>
                      </div>              
                    </div><!--/form step 1-->
                  </div> <!--/user profile content-->
                </div><!--/hisCli-->
                
                <!--/SECCION PARA ATM DEL PACIENTE-->
                <div id="atm" class="">
                 <div class="user-profile-content">   
                    <div id="form-step-2" role="form" data-toggle="validator">
                      <h3 class="h3titulo">ATM</h3>                 

                    </div><!--/form step 2-->
                  </div> <!--/user profile content-->
                </div><!--/atm-->

                <!--/SECCION PARA ODONTOGRAMA DEL PACIENTE-->
                <div id="odontograma" class="">
                 <div class="user-profile-content">   
                    <div id="form-step-3" role="form" data-toggle="validator">
                      <h3 class="h3titulo">Odontograma</h3>    

                    </div><!--/form step 3-->
                  </div> <!--/user profile content-->
                </div><!--/odontograma-->

                <!--/SECCION PARA RADIOGRAFIA DEL PACIENTE-->
                <div id="radiografia" class="">
                 <div class="user-profile-content">   
                    <div id="form-step-4" role="form" data-toggle="validator">
                      <h3 class="h3titulo">Radiografias</h3>   

                    </div><!--/form step 4-->
                  </div> <!--/user profile content-->
                </div><!--/radiografia-->

                <!--/SECCION PARA HISTORIAL DE PAGOS DEL PACIENTE-->
                <div id="hisPag" class="">
                 <div class="user-profile-content">   
                    <div id="form-step-5" role="form" data-toggle="validator">
                      <h3 class="h3titulo">Historial de Pagos</h3>  

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
