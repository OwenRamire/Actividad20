<?php require("Conexion19.php"); // Conexion a mi base de datos ?>
<?php 
    if (isset($_POST["Nombre"]) )
    {
        //Consulta de registros
        $sql = "SELECT * FROM usuarios WHERE nombre='" .$_POST['Nombre']. "' AND correo='".$_POST['Correo']."' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
            header("Location: Server19.php");
        }
        else 
        {
            echo "<script>
                alert('Usuario no encontrado');
                window.location.href='index.html';
            </script>";
            
        }   
             
    }  
 
    

?>     