<?php

if ($_POST) {
    $nombre = (isset($_POST["nombre"]) ? $_POST["nombre"] : "");
    $telefono = (isset($_POST["telefono"]) ? $_POST["telefono"] : "");
    $fecha = (isset($_POST["fecha"]) ? $_POST["fecha"] : "");

    $insert = mysqli_query($conexion, "insert into contactos(id,nombre,telefono,fecha)
            values(null,'$nombre','$telefono','$fecha')");

    header("location:index.php");
}
?>

<!-- Modal create -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Contacto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre">
                    <label for="">Telefono</label>
                    <input type="text" class="form-control" name="telefono" placeholder="Ingrese el telefono">
                    <label for="">Fecha</label>
                    <input type="date" class="form-control" name="fecha" placeholder="Ingrese la fecha">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>