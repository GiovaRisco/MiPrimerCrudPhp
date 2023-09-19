<?php
    require ("../../conexion.php"); 
    
    if(isset($_GET["id"])){
        $txtId = (isset($_GET["id"])?$_GET["id"]:"");
        $select = mysqli_query($conexion , "select *  from contactos where id='$txtId'");
        
        $registro = mysqli_fetch_assoc($select);
        $nombre = $registro["nombre"];
        $telefono = $registro["telefono"];
        $fecha = $registro["fecha"];
    }   

    if ($_POST) {
        $txtid = (isset($_POST["txtid"]) ? $_POST["txtid"] : "");
        $nombre = (isset($_POST["nombre"]) ? $_POST["nombre"] : "");
        $telefono = (isset($_POST["telefono"]) ? $_POST["telefono"] : "");
        $fecha = (isset($_POST["fecha"]) ? $_POST["fecha"] : "");
    
        $update = mysqli_query($conexion,"update contactos set nombre='$nombre' , telefono='$telefono', fecha='$fecha' where id='$txtid'");
    
        header("location:index.php");
    }
?>

<?php include "../../template/header.php" ?>
        <form action="" method="post">

                <input type="hidden" class="form-control" value="<?php echo $txtId ?>" name="txtid" >
                
                <label for="">Nombre</label>
                <input type="text" class="form-control" value="<?php echo $nombre ?>" name="nombre" placeholder="Ingrese el nombre">
                <label for="">Telefono</label>
                <input type="text" class="form-control" value="<?php echo $telefono ?>" name="telefono" placeholder="Ingrese el telefono">
                <label for="">Fecha</label>
                <input type="date" class="form-control" value="<?php echo $fecha ?>" name="fecha" placeholder="Ingrese la fecha">
            </div>

            <div class="modal-footer">
                <a href="index.php" class="btn btn-danger mt-2">Cancelar</a>
                <button type="submit" class="btn btn-primary  mt-2">Editar</button>
            </div>
        </form>
<?php include "../../template/footer.php" ?>