<?php
include('header.html');
require('config.php');
//var_dump($_GET['codigo']);
foreach($conn->query("SELECT * from pedidos where id = ".$_GET['codigo']."") as $row);
//var_dump($row);
?>
<h2>Eliminar Pedidos</h2>
<?php
echo "<div class='detalle'>";
    echo "<form method='post' action='eliminar.php?codigo=".$row ['id']."'>";
        echo "<p>".$row['id']."</p>";
        echo "<p>".$row['fecha_pedido']."</p>";
        echo "<p>".$row['producto']."</p>";
        echo "<p>".$row['unidades']."</p>";
        echo "<label style='margin: 5px'>¿Deseas eliminar el post?</label>";
        echo "<p><button type='submit' class='btn btn-danger' name='si' style='margin: 15px'>Confirmar</button>";
        echo "<button type='submit' class='btn btn-success' name='no'>Cancelar</button></p>";
    echo "<form>";
echo "</div>";

//$_SERVER['REQUEST_METHOD'] == 'POST'
if(isset($_POST['si'])){
$conn->query("DELETE from pedidos where id = ".$row['id']."");
echo "🐱‍👓 SE HA ELIMINADO EL POST CORRECTAMENTE 🐱‍🚀";
header('Refresh:2; url=./consultar.php');
} elseif (isset($_POST['no'])) {
    echo "🐱‍👤 NO SE HA ELIMINADO EL POST 🐱‍🏍";
    header('Refresh:2; url=./consultar.php');
}

include('footer.html');
?>
