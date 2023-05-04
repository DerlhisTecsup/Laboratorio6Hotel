<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['codigo'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("select * from persona where id = ?;");
    $sentencia->execute([$codigo]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Nombres: </label>
                        <input type="text" class="form-control" name="txtNombres" required 
                        value="<?php echo $persona->nombres; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellidos: </label>
                        <input type="text" class="form-control" name="txtApPaterno" autofocus required
                        value="<?php echo $persona->apellidos; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">$dni: </label>
                        <input type="text" class="form-control" name="txtdni" autofocus required
                        value="<?php echo $persona->DNI; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha: </label>
                        <input type="date" class="form-control" name="txtFecha" autofocus required
                        value="<?php echo $persona->$fecha_registro; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tipo: </label>
                        <input type="date" class="form-control" name="txtTipo" autofocus required
                        value="<?php echo $persona->$Tipo; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Hora Ingreso: </label>
                        <input type="date" class="form-control" name="txtHoraIngreso" autofocus required
                        value="<?php echo $persona->$Hora_ingreso; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Hora_salida: </label>
                        <input type="date" class="form-control" name="txtHoraSalida" autofocus required
                        value="<?php echo $persona->$Hora_salida; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Celular: </label>
                        <input type="number" class="form-control" name="txtCelular" autofocus required
                        value="<?php echo $persona->celular; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $persona->id; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>