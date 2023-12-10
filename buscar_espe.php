<?php
require_once("modeloespe.php");
$provincia = new clase_espe();
$registros = $provincia->_consultartodo($_POST['valor']);
echo "<thead class='bg-primary text-light text-center'>
         <tr>
             <th>ID</th>
             <th>ESPECIALIDAD</th>
             <th>COLEGIO</th>
             <th>Editar</th>
             <th>Eliminar</th>
         </tr>
      </thead>";

if ($registros) {
    $f = 1;
    while ($fila = $registros->fetch()) {
        echo "<tr>
                <td>".$fila['espe_id']."</td>
                <td>".$fila['espe_Especialidad']."</td>
                <td>".$fila['espe_observ']."</td>
                <td>".$fila['espe_colegio']."</td>
                <td><button class='btn btn-warning' onclick='editar_curso({$fila['espe_id']})'>Editar</button></td>
                <td><button class='btn btn-danger' onclick='eliminar_curso({$fila['espe_od']})'>Eliminar</button></td>
              </tr>";
        $f++;
    }
} else {
    echo "<tr><td colspan='5'>No se encontraron resultados</td></tr>";
}
?>
