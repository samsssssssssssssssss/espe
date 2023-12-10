<link href="../../../Libs/sweetalert2-8.2.5/sweetalert.css" rel="stylesheet">
<script src="../../../Libs/jquery.min.js"></script>
<script src="../../../Libs/sweetalert2-8.2.5/sweetalert.min.js"></script>

<?php
require_once('modeloespe.php');

$obj = new clase_espe();
$result = $obj->_insertar($_POST['espe_Especialidad'], $_POST['espe_observ'], $_POST['espe_colegio'] );

if ($result) {
    echo '<script>jQuery(function(){swal({
        title:"Guardar cursos", text:"Registro Guardado", type:"success", confirmButtonText:"Aceptar"
    }, function(){location.href="http://localhost/school32/formularios/especialidad/crud_espe.php";});});</script>';
} else {
    echo '<script>jQuery(function(){swal({
        title:"Guardar ciclos", text:"Error al Guardar", type:"danger", confirmButtonText:"Aceptar"
    }, function(){location.href="http://localhost/school32/formularios/especialidad/crud_espe.php";});});</script>';
}
?>



