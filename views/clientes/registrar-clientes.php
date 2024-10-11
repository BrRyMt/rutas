<?php
//Parámetros de la aplicacion
require_once "../../app/config/App.php";
?>

<?php require_once "../includes/header.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php echo renderContentHeader("Nuevo Cliente", "Lista de Clientes", SERVERURL . "views/clientes/listar-clientes") ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="" id="formulario-clientes">
                        <div class="card card-outline card-primary">

                            <div class="card-header">
                                Complete los datos
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="apellidos">Apellidos</label>
                                        <input type="text" class="form-control" id="apellidos" autofocus required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="nombres">Nombres</label>
                                        <input type="text" class="form-control" id="nombres" required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="telefono">Télefono</label>
                                        <input
                                            type="tel"
                                            class="form-control text-center"
                                            id="telefono"
                                            minlength="9"
                                            maxlength="9"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary"> Guardar </button>
                                <button type="reset" class="btn btn-secondary"> Cancelar </button>
                            </div>
                        </div> <!-- ./card -->
                    </form>
                </div> <!-- .col-md-12 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require_once "../includes/footer.php" ?>
</body>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        function $(object) {
            return document.querySelector(object);
        }

        $("#formulario-clientes").addEventListener("submit", (event) => {
            event.preventDefault();

            if (ask("Desea Guardar?", "Clientes")) {
                //algoritmo guardar
                //GET=
                // const param = new URLSearchParams
                // const params = new FormData();
                showToast("Guardado Correctamente", "SUCCESS", 1500, "./listar-clientes");
            }
        })
    });
</script>

</html>