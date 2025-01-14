<?php
include ('app/config.php');
include ('layout/sesion.php');

include ('layout/parte1.php');
include ('app/controllers/usuarios/listado_de_usuarios.php');
include ('app/controllers/roles/listado_de_roles.php');
include ('app/controllers/categorias/listado_de_categoria.php');
include ('app/controllers/almacen/listado_de_productos.php');
include ('app/controllers/proveedores/listado_de_proveedores.php');
include ('app/controllers/clientes/listado_de_clientes.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Bienvenido a Fernández Servicios - <?php echo $rol_sesion; ?> </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            Contenido del sistema
            <br><br>

            <div class="row">


            <div class="col-lg-3 col-6">
                <div class="small-box" style="background-Color: #D4F1F4; color: #000;">
                    <div class="inner">
                        <?php
                            $contador_de_usuarios = 0;
                             foreach ($usuarios_datos as $usuarios_dato) {
                             $contador_de_usuarios = $contador_de_usuarios + 1;
                            }
                        ?>
                            <h3><?php echo $contador_de_usuarios; ?></h3>
                            <p>Usuarios Registrados</p>
                    </div>
                    <a href="<?php echo $URL; ?>/usuarios/create.php">
                        <div class="icon">
                         <i class="fas fa-user-plus" style="color: #000;"></i> <!-- Ícono en negro para mejor contraste -->
                        </div>
                     </a>
                        <a href="<?php echo $URL; ?>/usuarios" class="small-box-footer" style="color: #000;">
                             Más detalle <i class="fas fa-arrow-circle-right"></i>
                        </a>
                </div>
            </div>



            <div class="col-lg-3 col-6">
                <div class="small-box" style="background-Color: #AEDFF7; color: #000;">
                    <div class="inner">
                        <?php
                        $contador_de_roles = 0;
                        foreach ($roles_datos as $roles_dato) {
                            $contador_de_roles = $contador_de_roles + 1;
                        }
                        ?>
                        <h3><?php echo $contador_de_roles; ?></h3>
                        <p>Roles Registrados</p>
                    </div>
                    <a href="<?php echo $URL; ?>/roles/create.php">
                        <div class="icon">
                            <i class="fas fa-address-card" style="color: #000;"></i> <!-- Ícono en negro -->
                        </div>
                    </a>
                    <a href="<?php echo $URL; ?>/roles" class="small-box-footer" style="color: #000;">
                        Más detalle <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>




                <div class="col-lg-3 col-6">
                    <div class="small-box" style="background-Color: #BEE3DB  ; color: #000;">
                        <div class="inner">
                            <?php
                            $contador_de_categorias = 0;
                            foreach ($categorias_datos as $categorias_dato) {
                                $contador_de_categorias = $contador_de_categorias + 1;
                            }
                            ?>
                            <h3><?php echo $contador_de_categorias; ?></h3>
                            <p>Categorías Registradas</p>
                        </div>
                        <a href="<?php echo $URL; ?>/categorias">
                            <div class="icon">
                                <i class="fas fa-tags" style="color: #000;"></i> <!-- Ícono en NEGRO para contraste -->
                            </div>
                        </a>
                        <a href="<?php echo $URL; ?>/categorias" class="small-box-footer" style="color: #000;">
                            Más detalle <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>



                <div class="col-lg-3 col-6">
                    <div class="small-box" style="background-Color: #A8DADC  ; color: #000;">
                        <div class="inner">
                            <?php
                            $contador_de_productos = 0;
                            foreach ($productos_datos as $productos_dato) {
                                $contador_de_productos = $contador_de_productos + 1;
                            }
                            ?>
                            <h3><?php echo $contador_de_productos; ?></h3>
                            <p>Productos Registrados</p>
                        </div>
                        <a href="<?php echo $URL; ?>/almacen/create.php">
                            <div class="icon">
                                <i class="fas fa-list" style="color: #000;"></i> <!-- Ícono en NEGRO para contraste -->
                            </div>
                        </a>
                        <a href="<?php echo $URL; ?>/almacen" class="small-box-footer" style="color: #000;">
                            Más detalle <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>






                <div class="col-lg-3 col-6">
                    <div class="small-box" style="background-Color: #98C1D9; color: #000;">
                        <div class="inner">
                            <?php
                            $contador_de_proveedores = 0;
                            foreach ($proveedores_datos as $proveedores_dato) {
                                $contador_de_proveedores = $contador_de_proveedores + 1;
                            }
                            ?>
                            <h3><?php echo $contador_de_proveedores; ?></h3>
                            <p>Proveedores Registrados</p>
                        </div>
                        <a href="<?php echo $URL; ?>/proveedores">
                            <div class="icon">
                                <i class="fas fa-truck" style="color: #000;"></i> <!-- Ícono en NEGRO para contraste -->
                            </div>
                        </a>
                        <a href="<?php echo $URL; ?>/proveedores" class="small-box-footer" style="color: #000;">
                            Más detalle <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>






                <div class="col-lg-3 col-6">
                            <div class="small-box" style="background-color: #88C0D0; color: #000;">
                                <div class="inner">
                                        <?php
                                        $contador_de_clientes = 0;
                                        foreach ($clientes_datos as $clientes_dato) {
                                            $contador_de_clientes++;
                                        }
                                        ?>
                                        <h3><?php echo $contador_de_clientes; ?></h3>
                                        <p>Clientes Registrados</p>
                                </div>
                                    <a href="<?php echo $URL; ?>/clientes">
                                        <div class="icon">
                                            <i class="fas fa-id-badge" style="color: #000;"></i>
                                        </div>
                                    </a>
                                    <a href="<?php echo $URL; ?>/clientes" class="small-box-footer" style="color: #000;">
                                        Más detalle <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                            </div>
                </div>





                <div class="col-lg-3 col-6">
                    <div class="small-box" style="background-Color: #5E81AC; color: #000;">
                        <div class="inner">
                            <?php
                            $contador_de_proveedores = 0;
                            foreach ($proveedores_datos as $proveedores_dato) {
                                $contador_de_proveedores++;
                            }
                            ?>
                            <h3><?php echo $contador_de_proveedores; ?></h3>
                            <p>Compras Registradas</p>
                        </div>
                        <a href="<?php echo $URL; ?>/proveedores">
                            <div class="icon">
                                <i class="fas fa-cart-plus" style="color: #000;"></i> <!-- Ícono en NEGRO para contraste -->
                            </div>
                        </a>
                        <a href="<?php echo $URL; ?>/proveedores" class="small-box-footer" style="color: #000;">
                            Más detalle <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>




                <div class="col-lg-3 col-6">
                    <div class="small-box" style="background-Color: #457B9D; color: #000;">
                        <div class="inner">
                            <?php
                            $contador_de_proveedores = 0;
                            foreach ($proveedores_datos as $proveedores_dato) {
                                $contador_de_proveedores++;
                            }
                            ?>
                            <h3><?php echo $contador_de_proveedores; ?></h3>
                            <p>Ventas Registradas</p>
                        </div>
                        <a href="<?php echo $URL; ?>/proveedores">
                            <div class="icon">
                                <i class="fas fa-hand-holding-usd" style="color: #000;"></i> <!-- Ícono en NEGRO para contraste -->
                            </div>
                        </a>
                        <a href="<?php echo $URL; ?>/proveedores" class="small-box-footer" style="color: #000;">
                            Más detalle <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>




                <div class="col-lg-3 col-6">
                    <div class="small-box" style="background-Color: #6A90CA  ; color: #000;">
                        <div class="inner">
                            <?php
                            $contador_de_proveedores = 0;
                            foreach ($proveedores_datos as $proveedores_dato) {
                                $contador_de_proveedores++;
                            }
                            ?>
                            <h3><?php echo $contador_de_proveedores; ?></h3>
                            <p>Servicios Registrados</p>
                        </div>
                        <a href="<?php echo $URL; ?>/proveedores">
                            <div class="icon">
                                <i class="fas fa-car" style="color: #000;"></i> <!-- Ícono en NEGRO para mejor visibilidad -->
                            </div>
                        </a>
                        <a href="<?php echo $URL; ?>/proveedores" class="small-box-footer" style="color: #000;">
                            Más detalle <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>



            





            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include ('layout/parte2.php'); ?>







