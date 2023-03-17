<?php
include('header.html');
require_once('config.php');

?>
<div class="tablita">
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">FECHA PEDIDO</th>
            <th scope="col">PRODUCTO</th>
            <th scope="col">UNIDADES</th>
            <th scope="col">ACTUALIZAR</th>
            <th scope="col">ELIMINAR</th>
        </tr>
    </thead>

<?php
try {
    foreach($conn->query('SELECT * from pedidos') as $row) {
        echo '<tr><td class="table-active" id="id">'.$row ['id'].'</td>';
        echo '<td class="table-active">'.$row ['fecha_pedido'].'</td>';
        echo '<td class="table-active">'.$row ['producto'].'</td>';
        echo '<td class="table-active">'.$row ['unidades'].'</td>';
        echo '<td class="table-active" id="upda"><a href="eliminar.php?codigo='.$row ['id'].'"><ion-icon name="pencil-outline"></ion-icon></a></td>';
        echo '<td class="table-active" id="trash"><a href="eliminar.php?codigo='.$row ['id'].'"><ion-icon name="trash-outline"></ion-icon></a></td></tr>';
    }
    $conn = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
</table></div>

<?php


include('footer.html');
?>
