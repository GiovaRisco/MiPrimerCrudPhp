
<?php
    require ("../../conexion.php");
    
    $resultado = mysqli_query($conexion,"select * from contactos");

    if(isset($_GET["id"])){
        $txtId = (isset($_GET["id"])?$_GET["id"]:"");
        $delete = mysqli_query($conexion , "delete from contactos where id='$txtId'");
        header("location:index.php");
    }   

?>
<?php include "../../template/header.php" ?>

<button style="margin-bottom: 5px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
 Agregar Contacto
</button>
<div class="table-responsive">
    <table class="table ">
        <thead class="table table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php  while ($contacto = mysqli_fetch_assoc($resultado)) { ?>
            <tr class="">
                <td scope="row"><?php echo $contacto['id']; ?></td>
                <td><?php echo $contacto["nombre"]; ?></td>
                <td><?php echo $contacto["telefono"];?></td>
                <td><?php echo $contacto["fecha"]; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $contacto['id']; ?>" class="btn btn-success">Editar</a>
                    <a href="index.php?id=<?php echo $contacto['id']; ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php include "create.php" ?>
<?php include "../../template/footer.php" ?>