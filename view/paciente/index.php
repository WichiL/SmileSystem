<title>Smile System | Pacientes</title>
<div class="pull-left breadcrumb_admin clear_both">
    <div class="pull-left page_title theme_color">
        <h1>Pacientes</h1>
        <h2 class="">Registros</h2>
    </div>
    <div class="pull-right">
        <ol class="breadcrumb">
            <li><a href="?c=inicio">Inicio</a></li>
            <li class="active">Pacientes</a></li>
        </ol>
    </div>
</div>
<div class="container clear_both padding_fix">
    <div class="row">
        <div class="col-md-12">
            <div class="block-web">
                <div class="header">
                    <div class="row" style="margin-top: 15px; margin-bottom: 12px;">
                        <div class="col-sm-6">
                            <div class="actions"></div>
                            <h2 class="content-header theme_color" style="margin-top: -5px;">&nbsp;&nbsp;Pacientes</h2>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <b>
                                    <div class="btn-group" style="margin-right: 10px;">
                                        <a data-toggle="modal" data-target="#modalBuscarPaciente"
                                           href="#modalBuscarPaciente" class="btn btn-sm btn-success"
                                           style="margin-right: 10px;" type="button"> <i class="fa fa-plus"></i>&nbsp;Registrar</a>
                                    </div>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if (isset($this->mensaje)) {
                    if (!isset($this->error)) { ?>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success fade in">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×
                                    </button>
                                    <i class="fa fa-check"></i>&nbsp;<?php echo $this->mensaje; ?>
                                </div>
                            </div>
                        </div>
                    <?php }
                    if (isset($this->error)) { ?>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×
                                    </button>
                                    <i class="fa fa-warning"></i>&nbsp;<?php echo $this->mensaje; ?>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
                <di class="porlets-content">
                    <div class="table-responsive">
                        <table class="display table table-bordered table-striped" id="dynamic-table">
                            <thead>
                            <tr>
                                <th class="hidden">ID</th>
                                <th>Folio</th>
                                <th>Nombre</th>
                                <th>Domicilio</th>
                                <th>Tel. Casa</th>
                                <th>Tel. Cel</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($this->model->Listar() as $r): ?>
                                <tr class="gradeA">
                                    <td class="hidden"><?php echo $r->idPaciente; ?></td>
                                    <td><?php echo $r->folio; ?></td>
                                    <td><?php echo $r->nombre . " " . $r->apePat . " " . $r->apeMat; ?></td>
                                    <td><?php echo $r->calle . " " . $r->numero . " Col. " . $r->colonia; ?></td>
                                    <td><?php echo $r->telCasa; ?></td>
                                    <td><?php echo $r->telCel; ?></td>
                                    <td class="center">
                                        <a class="btn btn-info btn-sm tooltips"
                                            role="button" 
                                            href="?c=paciente&a=Detalles&idPaciente=<?php echo $r->idPaciente; ?>"
                                            data-toggle="tooltip"
                                            data-placement="left" 
                                            data-original-title="Ver Expediente del Paciente"><i class="fa fa-eye"></i>
                                        </a>
                                      
                                        <a class="btn btn-primary btn-sm tooltips" 
                                            role="button" 
                                            href="index.php?c=paciente&a=Crud&idPaciente=<?php echo $r->idPaciente ?>"
                                            data-toggle="tooltip"
                                            data-placement="left"
                                            data-original-title="Editar datos del Paciente"><i class="fa fa-edit"></i>
                                        </a>
                                      
                                        <a class="btn btn-danger btn-sm tooltips" role="button" onclick="eliminarPaciente(<?php echo $r->folio; ?>);"
                                            data-toggle="modal" data-placement="left" data-original-title="Eliminar Paciente" href="#modalEliminar" data-toggle="modal"
                                           data-target="#modalEliminar"><i class="fa fa-eraser"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th class="hidden">ID</th>
                                <th>Folio</th>
                                <th>Nombre</th>
                                <th>Domicilio</th>
                                <th>Tel. Casa</th>
                                <th>Tel. Cel</th>
                                <th>Acciones</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div><!--/table-responsive-->
                </di><!--/porlets-content-->
            </div><!--/block-web-->
        </div><!--/col-md-12-->
    </div><!--/row-->
</div>

<div class="modal fade" id="modalBuscarPaciente" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel default blue_border horizontal_border_1">
            <form action="?c=paciente&a=Crud" id="form-nombre" enctype="multipart/form-data" method="POST"
                  parsley-validate novalidate>
                <div class="modal-body">
                    <div class="row">
                        <div class="block-web">
                            <div class="header">
                                <h3 class="content-header h3 subtitulo">&nbsp;Ingrese el nombre del nuevo Paciente</h3>
                            </div>
                            <div class="porlets-content" style="margin-bottom: -50px;">
                                <div class="form-group">
                                    <div class="col-md-2"></div>
                                    <div class="col-sm-8">
                                        <input autofocus name="nombre" maxlength="60" id="nombre" type="text"
                                               required class="form-control" 
                                               placeholder="Ingrese el nombre del paciente">
                                        <input name="apePat" maxlength="60" id="apePat" type="text" 
                                               required class="form-control"
                                               placeholder="Ingrese Apellido Paterno">
                                        <input name="apeMat" maxlength="60" id="apeMat" type="text" 
                                               class="form-control" 
                                               placeholder="Ingrese Apellido Materno">       
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

<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel default red_border horizontal_border_1">
            <div class="modal-body">
                <div class="row">

                    <div class="block-web">
                        <div class="header">
                            <h3 class="content-header theme_color">&nbsp;Eliminar Paciente</h3>
                        </div>
                        <div class="porlets-content" style="margin-bottom: -50px;">
                            <h4>¿Esta segúro que desea eliminar este registro?</h4>
                        </div><!--/porlets-content-->
                    </div><!--/block-web-->
                </div>
            </div>
            <div class="modal-footer" style="margin-top: -10px;">
                <div class="row col-md-5 col-md-offset-7" style="margin-top: -5px;">
                    <form action="?c=paciente&a=Eliminar" enctype="multipart/form-data" method="post">
                        <input hidden type="text" name="idPaciente" id="txtIdPaciente">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div><!--/modal-content-->
    </div><!--/modal-dialog-->
</div><!--/modal-fade-->

<script src="assets/js/jquery-2.1.0.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $('#form-nombre').submit(function () {
            verificarPaciente();
            return false;
        });
    });

    var nombre = "";
    var apePat = "";
    var apeMat = "";
    verificarPaciente = function () {
        nombre = $("#nombre").val();
        apePat = $("#apePat").val();
        apeMat = $("#apeMat").val();
        $.post("index.php?c=paciente&a=verificarPaciente", {nombre: nombre, apePat: apePat, apeMat: apeMat}, function (respuesta) {
            if (respuesta == "No Existe" || respuesta == null ) {
                $('#txtNombre').val(nombre);
            } else {
                location.href = "?c=paciente&a=Crud&nombre=" + nombre + "&apePat=" + apePat + "&apeMat="+ apeMat;
            }
        });
    }

    eliminarPaciente = function (idPaciente) {
        $('#txtIdPaciente').val(idPaciente);
    };
</script>