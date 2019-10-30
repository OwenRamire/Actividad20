<?php 
    require("Conexion19.php");
    if (isset($_GET['idU']) && intval($_GET["idU"]) > 0 )
    {
        $sql = "DELETE FROM usuarios WHERE id='$_GET[idU]'";
        if ($conn->query($sql) === TRUE)
        {
            echo "<script>
                alert('Eliminado');
                window.location.href='Server19.php';
                </script>";
        }
    }
    $conn->close();
?>