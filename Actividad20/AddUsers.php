<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Entrar al sistema</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css"/>
        <link type="text/css" rel="stylesheet" href="EstilosAddUsers.css"/>
 
    </head>
    <body>
        <!--Cabecera de la pagina-->
        <section id="cabecera" class="hero is-primary">
            <div class="hero-body">
                <div>
                    <h1 class="title">Universidad de colima</h1>
                    <h2 class="subtitle">Facultad de telematica</h2>
                </div>
            </div>
        </section>
        <!--Formulario para añadir usuario-->
        <section class="section">
            <div class="container">
                <h1 class="title">Agregar Usuario</h1> 
            </div> 
            <form action="GuardarUser.php" method="POST" id="formularioUsuarios" >
                <div class="field">
                    <label class="label">Nombre</label>
                    <div class="control">
                        <input class="input" name="nombre" type="text" placeholder="O.O.Ramirez Lopez" require>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Login</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input" name="login" type="text" placeholder="Text input" require>
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                        </span>
                    </div>
                    
                </div>
                <div class="field">
                    <label class="label">Contraseña</label>
                    <p class="control has-icons-left">
                        <input class="input" name="contraseña" type="password" placeholder="Password" require>
                        <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                        </span>
                    </p>
                </div>

                <div class="field">
                    <label class="label">Correo Electronico</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input " name="correo" type="email" placeholder="owen@example.com" require>
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                    </div>
                </div>

                <div class="field">
                    <label class="label" >Dependencia</label>
                    <div class="control">
                        <div class="select">
                            <select name="dependencia">
                                <option></option>
                                <option>Ing. en Telematica</option>
                                <option>Ing. en Software</option>
                                <option>Ing. en Sistemas</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!--PHP-->
               
                <div class="field is-grouped">
                    
                    <div class="control">
                        <button type="submit" class="button is-link" name="agregar">Agregar</button>
                    </div>
                    
                </div>
            </form>
            <div class="control">
                <button class="button is-link is-danger" name="cancelar" onClick="window.location.href='Server19.php'" >Cancelar</button>
            </div>
            <br/>
            <div class="control">
                <a href="Server19.php"><button class="button is-primary" name="consultar">consultar</button></a>
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