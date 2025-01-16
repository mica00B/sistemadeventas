<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/parte1.php');

include ('../app/controllers/servicios/listado_de_servicios.php');
include ('../app/controllers/categorias/listado_de_categoria.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Registro de un Nuevo Servicio</h1>
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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Llene los datos con cuidado</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">

                                    <form action="../app/controllers/servicios/create.php" method="post" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Código:</label>
                                                            <?php
                                                            function ceros($numero){
                                                                $len=0;
                                                                $cantidad_ceros = 5;
                                                                $aux=$numero;
                                                                $pos=strlen($numero);
                                                                $len=$cantidad_ceros-$pos;
                                                                for ($i=0;$i<$len;$i++){
                                                                    $aux="0".$aux;
                                                                }
                                                                return $aux;
                                                            }
                                                            $contador_de_id_servicios = 1;
                                                            foreach ($servicios_datos as $servicios_dato){
                                                                $contador_de_id_servicios = $contador_de_id_servicios +1;
                                                            }
                                                            ?>
                                                            <input type="text" class="form-control"
                                                                   value="<?php echo "P-".ceros($contador_de_id_servicios); ?>" disabled>
                                                            <input type="text"  name="codigo" value="<?php echo "P-".ceros($contador_de_id_servicios); ?>" hidden>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Categoría:</label>
                                                            <div style="display: flex">
                                                                <select name="id_categoria" id="" class="form-control" required>
                                                                    <?php
                                                                    foreach ($categorias_datos as $categorias_dato){ ?>
                                                                        <option value="<?php echo $categorias_dato['id_categoria']; ?>">
                                                                            <?php echo $categorias_dato['nombre_categoria']; ?>
                                                                        </option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                                <a href="<?php echo $URL;?>/categorias" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Nombre del Servicio:</label>
                                                            <input type="text" name="nombre_servicio" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Usuario</label>
                                                            <input type="text" class="form-control" value="<?php echo $email_sesion; ?>" disabled>
                                                            <input type="text" name="id_usuario" value="<?php echo $id_usuario_sesion; ?>" hidden>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="">Descripción del Servicio:</label>
                                                            <textarea name="descripcion" id="" cols="30" rows="2" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                   
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Precio:</label>
                                                            <input type="number" name="precio" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Fecha de Registro:</label>
                                                            <input type="date" name="fecha_ingreso" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            
                                        </div>





                                        <hr>
                                        <div class="form-group">
                                            <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                            <button type="submit" class="btn btn-primary">Guardar Servicio</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
