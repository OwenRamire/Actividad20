<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Salida del sistema</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css"/>
        <link type="text/css" href="EstilosServer.css" rel="stylesheet"/>
    </head>
    <body>

        <!--Cabecera de la pagina-->
        <section class="hero is-primary">
            <div class="hero-body">
                <div>
                    <h1 class="title">Universidad de colima</h1>
                    <h2 class="subtitle">Facultad de telematica</h2>
                </div>
            </div>
        </section>

        <section id="tabla" class="section">
            <div class="container">
                <h1 class="title">Control del Usuario</h1> 
            </div>  
            
            <div class="control">
                <a href="AddUsers.php"><button class="button is-primary ">Agregar Registro</button></a>
            </div>
            
            <table class="table is-striped" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>login</th>
                        <th>nombre</th>
                        <th>dependencia</th>
                        <th>correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tfoot></tfoot>
                <tbody>
                    <?php require("Conexion19.php"); // Conexion a mi base de datos ?>    
                    <?php foreach ($conn->query('SELECT * FROM usuarios') as $row): ?><!--Codigo PHP-->              
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["login"]; ?></td>
                        <td><?php echo $row["nombre"];?></td>
                        <td><?php echo $row["dependencia"];?></td>
                        <td><?php echo $row["correo"];?></td>
                        <td>
                            <div class="control">
                                <a href="Editar.php?idU=<?php echo $row["id"]; ?>" class="button is-link">Editar</a>
                            </div>
                        </td>
                        <td>
                            <div class="control">
                                <a href="Borrar.php?idU=<?php echo $row["id"]; ?>" onclick="return confirm('¿Deseas eliminar este usuario?');" class="button is-danger">Borrar</a>
                            </div>
                        </td>
                </tbody>
                    <?php endforeach; ?>
                </table>
                
                <div id="regresar">
                    <div class="control">
                        <a href="index.html"><button class="button is-primary">Regresar</button></a>
                    </div>
                </div>
            </div>
        </section>

        <!--Pie de pagina de la pagina-->
        <footer class="footer ">
            <div class="content has-text-centered">
                <p>&copy; Desarrollado Por <a href="#">Owen Ramirez</a></p>        
            </div>
        </footer>
    </body>
</html>