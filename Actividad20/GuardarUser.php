<?php require("Conexion19.php"); // Conexion a mi base de datos ?>
    <?php if(isset($_POST["nombre"])):?>
        <?php 
            $sql = "INSERT INTO usuarios (login, password, nombre, dependencia, correo ) VALUES ('$_POST[login]', ' $_POST[contraseña]' , '$_POST[nombre]','$_POST[dependencia]' , '$_POST[correo]' ); ";
            if ($conn->query($sql) === TRUE )
                {
                    echo '<script> alert("datos agregados exitosamente");
                            window.location.href="Server19.php";
                        </script>';
                }
                else 
                {
                    echo '<script> alert("Datos no guardados") </script>';
                }
        ?>
    <?php endif;?>
<?php $conn->close();?>