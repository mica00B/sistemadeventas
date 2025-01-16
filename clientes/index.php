<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/parte1.php');


include ('../app/controllers/clientes/listado_de_clientes.php');


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de Clientes
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create">
                            <i class="fa fa-plus"></i> Agregar Nuevo
                        </button>
                    </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Clientes Registrados</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <table id="example1" class="table table-bordered table-striped table-sm">
                                <thead>
                                <tr>
                                    <th><center>Nro</center></th>
                                    <th><center>Nombre del Cliente</center></th>
                                    <th><center>Celular</center></th>
                                    <th><center>C.I.N° </center></th>
                                    <th><center>RUC</center></th>
                                    <th><center>Descripción de Vehículo</center></th>
                                    <th><center>Dirección</center></th>
                                    <th><center>Acciones</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $contador = 0;
                                foreach ($clientes_datos as $clientes_dato){
                                    $id_cliente = $clientes_dato['id_cliente'];
                                    $nombre_cliente = $clientes_dato['nombre_cliente']; ?>
                                    <tr>
                                        <td><center><?php echo $contador = $contador + 1;?></center></td>
                                        <td><?php echo $nombre_cliente;?></td>
                                        <td>
                                            <a href="https://wa.me/+595<?php echo $clientes_dato['celular'];?>" target="_blank" class="btn btn-success">
                                                <i class="fa fa-phone"></i>
                                                <?php echo $clientes_dato['celular'];?>
                                            </a>
                                        </td>
                                        <td><?php echo $clientes_dato['cedula'];?></td>
                                        <td><?php echo $clientes_dato['ruc'];?></td>
                                        <td><?php echo $clientes_dato['descripcion_vehiculo'];?></td>
                                        <td><?php echo $clientes_dato['direccion'];?></td>
                                        <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                                            data-target="#modal-update<?php echo $id_cliente;?>">
                                                        <i class="fa fa-pencil-alt"></i> Editar
                                                    </button>
                                                    <!-- modal para actualizar proveedor -->
                                                    <div class="modal fade" id="modal-update<?php echo $id_cliente;?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="background-color: #116f4a;color: white">
                                                                    <h4 class="modal-title">Actualización del Cliente</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Nombre del Cliente <b>*</b></label>
                                                                                <input type="text" id="nombre_cliente<?php echo $id_cliente;?>" value="<?php echo $nombre_cliente;?>" class="form-control">
                                                                                <small style="color: red;display: none" id="lbl_nombre<?php echo $id_cliente;?>">* Este campo es requerido</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Celular <b>*</b></label>
                                                                                <input type="number" id="celular<?php echo $id_cliente;?>" value="<?php echo $clientes_dato['celular'];?>" class="form-control">
                                                                                <small style="color: red;display: none" id="lbl_celular<?php echo $id_cliente;?>">* Este campo es requerido</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">C.I.N°</label>
                                                                                <input type="number" id="cedula<?php echo $id_cliente;?>" value="<?php echo $clientes_dato['cedula'];?>" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">RUC <b>*</b></label>
                                                                                <input type="text" id="ruc<?php echo $id_cliente;?>" value="<?php echo $clientes_dato['ruc'];?>" class="form-control">
                                                                                <small style="color: red;display: none" id="lbl_ruc<?php echo $id_cliente;?>">* Este campo es requerido</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Descripción de Vehículo</label>
                                                                                <input type="text" id="descripcion_vehiculo<?php echo $id_cliente;?>" value="<?php echo $clientes_dato['descripcion_vehiculo'];?>" class="form-control">
                                                                                <small style="color: red;display: none" id="lbl_descripcion_vehiculo<?php echo $id_proveedor;?>">* Este campo es requerido</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Dirección <b>*</b></label>
                                                                                <textarea name="" id="direccion<?php echo $id_cliente;?>" cols="30" rows="3" class="form-control"><?php echo $clientes_dato['direccion'];?></textarea>
                                                                                <small style="color: red;display: none" id="lbl_direccion<?php echo $id_cliente;?>">* Este campo es requerido</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                    <button type="button" class="btn btn-success" id="btn_update<?php echo $id_cliente;?>">Actualizar</button>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
                                                    <script>
                                                        $('#btn_update<?php echo $id_cliente;?>').click(function () {

                                                            var id_cliente = '<?php echo $id_cliente;?>';
                                                            var nombre_cliente = $('#nombre_cliente<?php echo $id_cliente;?>').val();
                                                            var celular = $('#celular<?php echo $id_cliente;?>').val();
                                                            var cedula = $('#cedula<?php echo $id_cliente;?>').val();
                                                            var ruc = $('#ruc<?php echo $id_cliente;?>').val();
                                                            var descripcion_vehiculo = $('#descripcion_vehiculo<?php echo $id_cliente;?>').val();
                                                            var direccion = $('#direccion<?php echo $id_cliente;?>').val();

                                                            if(nombre_cliente == ""){
                                                                $('#nombre_cliente<?php echo $id_cliente;?>').focus();
                                                                $('#lbl_nombre<?php echo $id_cliente;?>').css('display','block');
                                                            }else if(celular == ""){
                                                                $('#celular<?php echo $id_cliente;?>').focus();
                                                                $('#lbl_celular<?php echo $id_cliente;?>').css('display','block');
                                                            }else if(cedula== ""){
                                                                $('#cedula<?php echo $id_cliente;?>').focus();
                                                                $('#lbl_cedula<?php echo $id_cliente;?>').css('display','block');
                                                            }else if(direccion == ""){
                                                                $('#direccion<?php echo $id_cliente;?>').focus();
                                                                $('#lbl_direccion<?php echo $id_cliente;?>').css('display','block');
                                                            }
                                                            else {
                                                                var url = "../app/controllers/clientes/update.php";
                                                                $.get(url,{id_cliente:id_cliente,nombre_cliente:nombre_cliente,celular:celular,cedula:cedula,ruc:ruc,descripcion_vehiculo:descripcion_vehiculo,direccion:direccion},function (datos) {
                                                                    $('#respuesta').html(datos);
                                                                });
                                                            }

                                                        });
                                                    </script>
                                                    <div id="respuesta_update<?php echo $id_cliente;?>"></div>
                                                </div>



                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#modal-delete<?php echo $id_cliente;?>">
                                                    <i class="fa fa-trash"></i> Borrar
                                                </button>
                                                <!-- modal para borrar proveedore -->
                                                <div class="modal fade" id="modal-delete<?php echo $id_cliente;?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color: #ca0a0b;color: white">
                                                                <h4 class="modal-title">¿Esta seguro de eliminar al cliente?</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="">Nombre del Cliente <b>*</b></label>
                                                                            <input type="text" id="nombre_cliente<?php echo $id_cliente;?>" value="<?php echo $nombre_cliente;?>" class="form-control" disabled>
                                                                            <small style="color: red;display: none" id="lbl_nombre<?php echo $id_cliente;?>">* Este campo es requerido</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="">Celular <b>*</b></label>
                                                                            <input type="number" id="celular<?php echo $id_cliente;?>" value="<?php echo $clientes_dato['celular'];?>" class="form-control" disabled>
                                                                            <small style="color: red;display: none" id="lbl_celular<?php echo $id_cliente;?>">* Este campo es requerido</small>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="">C.I.N°</label>
                                                                            <input type="number" id="cedula<?php echo $id_cliente;?>" value="<?php echo $clientes_dato['cedula'];?>" class="form-control" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="">RUC<b>*</b></label>
                                                                            <input type="text" id="ruc<?php echo $id_cliente;?>" value="<?php echo $clientes_dato['ruc'];?>" class="form-control" disabled>
                                                                            <small style="color: red;display: none" id="lbl_ruc<?php echo $id_cliente;?>">* Este campo es requerido</small>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="">Descripción de Vehículo</label>
                                                                            <input type="text" id="descripcion_vehiculo<?php echo $id_cliente;?>" value="<?php echo $clientes_dato['descripcion_vehiculo'];?>" class="form-control" disabled>
                                                                            <small style="color: red;display: none" id="lbl_descripcion<?php echo $id_cliente;?>">* Este campo es requerido</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="">Dirección <b>*</b></label>
                                                                            <textarea name="" id="direccion<?php echo $id_cliente;?>" cols="30" rows="3" class="form-control" disabled><?php echo $clientes_dato['direccion'];?></textarea>
                                                                            <small style="color: red;display: none" id="lbl_direccion<?php echo $id_cliente;?>">* Este campo es requerido</small>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                <button type="button" class="btn btn-danger" id="btn_delete<?php echo $id_cliente;?>">Eliminar</button>
                                                            </div>
                                                            <div id="respuesta_delete<?php echo $id_cliente;?>"></div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal -->
                                                <script>
                                                    $('#btn_delete<?php echo $id_cliente;?>').click(function () {

                                                        var id_cliente = '<?php echo $id_cliente;?>';

                                                            var url2 = "../app/controllers/clientes/delete.php";
                                                            $.get(url2,{id_cliente:id_cliente},function (datos) {
                                                                $('#respuesta_delete<?php echo $id_cliente;?>').html(datos);
                                                            });


                                                    });
                                                </script>

                                            </div>

                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php include ('../layout/mensajes.php'); ?>
<?php include ('../layout/parte2.php'); ?>


<script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Clientes",
                "infoEmpty": "Mostrando 0 a 0 de 0 Clientes",
                "infoFiltered": "(Filtrado de _MAX_ total Clientes)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Clientes",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true, "lengthChange": true, "autoWidth": false,
            buttons: [{
                extend: 'collection',
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [{
                    text: 'Copiar',
                    extend: 'copy',
                }, {
                    extend: 'pdf'
                },{
                    extend: 'csv'
                },{
                    extend: 'excel'
                },{
                    text: 'Imprimir',
                    extend: 'print'
                }
                ]
            },
                {
                    extend: 'colvis',
                    text: 'Visor de columnas',
                    collectionLayout: 'fixed three-column'
                }
            ],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>





<!-- modal para registrar clientes -->
<div class="modal fade" id="modal-create">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #1d36b6;color: white">
                <h4 class="modal-title">Creación de un nuevo cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nombre del Cliente <b>*</b></label>
                            <input type="text" id="nombre_cliente" class="form-control">
                            <small style="color: red;display: none" id="lbl_nombre">* Este campo es requerido</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Celular <b>*</b></label>
                            <input type="number" id="celular" class="form-control">
                            <small style="color: red;display: none" id="lbl_celular">* Este campo es requerido</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">C.I.N°</label>
                            <input type="number" id="cedula" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">RUC <b>*</b></label>
                            <input type="text" id="ruc" class="form-control">
                            <small style="color: red;display: none" id="lbl_ruc">* Este campo es requerido</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Descripción de Vehículo</label>
                            <input type="text" id="descripcion_vehiculo" class="form-control">
                            <small style="color: red;display: none" id="lbl_descripcion">* Este campo es requerido</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Dirección <b>*</b></label>
                            <textarea name="" id="direccion" cols="30" rows="3" class="form-control"></textarea>
                            <small style="color: red;display: none" id="lbl_direccion">* Este campo es requerido</small>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btn_create">Guardar Cliente</button>
            </div>
            <div id="respuesta"></div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
    $('#btn_create').click(function () {
        // alert("guardar");

        var nombre_cliente = $('#nombre_cliente').val();
        var celular = $('#celular').val();
        var cedula = $('#cedula').val();
        var ruc = $('#ruc').val();
        var descripcion_vehiculo = $('#descripcion_vehiculo').val();
        var direccion = $('#direccion').val();


        if(nombre_cliente == ""){
            $('#nombre_cliente').focus();
            $('#lbl_nombre').css('display','block');
        }else if(celular == ""){
            $('#celular').focus();
            $('#lbl_celular').css('display','block');
        }else if(cedula == ""){
            $('#cedula').focus();
            $('#lbl_cedula').css('display','block');
        }else if(direccion == ""){
            $('#direccion').focus();
            $('#lbl_direccion').css('display','block');
        }
        else {
            var url = "../app/controllers/clientes/create.php";
            $.get(url,{nombre_cliente:nombre_cliente,celular:celular,cedula:cedula,ruc:ruc,descripcion_vehiculo:descripcion_vehiculo,direccion:direccion},function (datos) {
                $('#respuesta').html(datos);
            });
        }


    });
</script>









