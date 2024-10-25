<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REXHA Perú-Inmobiliaria</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="whatsapp.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</head>
<body class="hidden">
    <div class="centrado" id="onload">
    <div class="lds-default">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
    <header class="header">
    <div class="menu container">
            <a href="#" class="logo">
            <img src="images/rexha 2.png" alt="Logo de REXHA.PE" style="max-width: 140px; height: auto;">
           </a> <!--NOMBRE DE LA EMPRESA-->
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="propiedades.php">Propiedades</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="iniciarsesion.html" target="_blank">Login</a></li>
                  
                  
                    
                </ul>
            </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img id="img-carrito" src="images/carrito53.png" alt="car">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>                           
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-3">Vaciar Carrito</a>
                            <a href="#" id="comprar-carrito" class="btn-3" style="display: none;">Comprar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>    
    </header>


    <br>
    
    

    <div class="container">
    <h2 class="text-center">¿Estas listo para formar parte del equipo REXHA Perú?<br>¡Trabaja con nosotros!</h2>
    <form action="reclamacion.php" method="POST">
        <div class="row">
            <!-- Columna de Datos Personales -->
            <div class="col-md-6">
                <h4>Datos Personales:</h4>
                <div class="form-group">
                    <label>NOMBRES*</label>
                    <input type="text" class="form-control" placeholder="Ej. Cesar" required>
                </div>
                <div class="form-group">
                    <label>APELLIDOS*</label>
                    <input type="text" class="form-control" placeholder="Ej. Aquino Maximiliano" required>
                </div>
                <div class="form-group">
                    <label>CORREO*</label>
                    <input type="email" class="form-control" placeholder="Ej. nombre@correo.com" required>
                </div>
                <div class="form-group">
                    <label>TELEFONO*</label>
                    <input type="text" class="form-control" placeholder="Ej. 1 294-0008" required>
                </div>
                <div class="form-group">
                    <label>CELULAR* (Ejemplo: "+51")</label>
                    <input type="text" class="form-control" placeholder="Ej. +51 994-000-000" required>
                </div>
                <div class="form-group">
                   <label>EDAD*</label>
                   <input type="number" class="form-control" placeholder="Ej. 25" required>
                </div>
            </div>

            <!-- Columna de Datos de Solicitud -->
            <div class="col-md-6">
                <h4>Datos de Solicitud:</h4>
                <div class="form-group">
                    <label>¿CÓMO CONOCISTE NUESTRA WEB?*</label>
                    <input type="text" class="form-control" placeholder="Ej. Redes Sociales" required>
                </div>
                <div class="form-group">
                    <label>¿QUÉ EXPERIENCIA INMOBILIARIA TIENES?*</label>
                    <textarea class="form-control" placeholder="Describe tu experiencia" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label>¿EN DÓNDE TE GUSTARÍA POSTULARTE?*</label>
                    <select class="form-control" required>
                        <option value="">Selecciona un departamento</option>
                        <option value="Lima">Lima</option>
                        <option value="Arequipa">Arequipa</option>
                        <option value="Cuzco">Cuzco</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" required>
                        <option value="">Selecciona una provincia</option>
                        <option value="Provincia1">Provincia1</option>
                        <option value="Provincia2">Provincia2</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" required>
                        <option value="">Selecciona un distrito</option>
                        <option value="Distrito1">Distrito1</option>
                        <option value="Distrito2">Distrito2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Cuentanos un poco de ti*</label>
                    <textarea class="form-control" placeholder="Cuéntanos sobre ti" rows="3" required></textarea>
                </div>
            </div>
        </div>
        
        <input type="submit" class="btn btn-block btn-lg btn-primary" value="Enviar">
    </form>
   </div>
    <br>
    <br>

    <footer class="footer">
    <div class="footer-content container">
        <div class="link">
            <h3>Enlaces de Navegación</h3>
            <ul>
                <li><a href="/acerca-de">Acerca de</a></li>
                <li><a href="/contacto">Contacto</a></li>
                <li><a href="">Política de Privacidad</a></li>
                <li><a href="/reclamos.php" target="_blank">Libro de Reclamos</a></li>
            </ul>
        </div>

        <div class="link">
            <h3>Redes Sociales</h3>
            <ul>
                <li><a href="https://twitter.com/misitioweb">Twitter</a></li>
                <li><a href="https://www.instagram.com/zumateong?igsh=MTljZzlmczJoZmxrYQ==" target="_blank">Instagram</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=61565989621254" target="_blank">Facebook</a></li>
                <li><a href="https://www.linkedin.com/company/ong-zumate/posts/?feedView=all " target="_blank">LinkedIn</a></li>
            </ul>
        </div>

            <div class="link">
            <h3>Información Legal</h3>
            <ul>
                <li><a href="Términos de Usos">Términos de Usos</a></li>
                <li><a href="Cookies">Política de Cookies</a></li>
            </ul>

            
        </div>
    </div>
    <div class="text-center" style="margin-top: 20px;">
        <p>&copy; 2024 ZUMATE ONG. Todos los derechos reservados.</p>
    </div>
</footer>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="script.js"></script>

    <script>
        document.addEventListener('visibilitychange', function() {
            if (document.hidden) 
            {
                document.title = " 😰no te vayas "; // Mostrar mensaje
            } else {
                document.title = '😁Gracias por volver '; // Ocultar mensaje
            }
        });
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=51932779837&text=Hola%20sean%20bienvenidos,%20deseo%20conversar%20con%20el%20vendedor" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
</body>
</html> 