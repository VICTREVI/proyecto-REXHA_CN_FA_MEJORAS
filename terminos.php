<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REXHA Perú-Inmobiliaria</title>
    <link rel="icon" type="image/jpeg" href="images/logorexha.JPG">
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
            </a>
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
        <h2 class="text-center">Términos de Uso</h2>
        <h4>Última actualización: 17 de Octubre de 2024</h4>
        <div class="row">
            <div class="col-md-6">
                <h4>1. Aceptación de los Términos</h4>
                <p>Al usar el Sitio, confirmas que tienes al menos 18 años o que estás utilizando el Sitio bajo la supervisión de un adulto.</p>

                <h4>2. Modificaciones a los Términos</h4>
                <p>Nos reservamos el derecho de modificar estos Términos de Uso en cualquier momento. Cualquier cambio será efectivo al publicarse en el Sitio. Te recomendamos revisar regularmente los Términos de Uso.</p>

                <h4>3. Uso del Sitio</h4>
                <p>El Sitio se ofrece solo para fines informativos y no constituye asesoramiento profesional. No garantizamos la exactitud o integridad de la información publicada. El uso del Sitio es bajo tu propio riesgo.</p>

                <h4>4. Propiedad Intelectual</h4>
                <p>Todo el contenido, marcas, logotipos y gráficos del Sitio son propiedad de REXHA o de terceros. Queda prohibida la reproducción, distribución o modificación sin el consentimiento expreso de los propietarios.</p>

                <h4>5. Política de Cookies</h4>
                <p>Este Sitio utiliza cookies para mejorar la experiencia del usuario. Al utilizar nuestro Sitio, aceptas el uso de cookies de acuerdo con nuestra Política de Cookies. Puedes modificar la configuración de las cookies en cualquier momento desde tu navegador.</p>
            </div>

            <div class="col-md-6">
                <h4>6. Registro y Cuentas</h4>
                <p>Si eliges registrarte en el Sitio, eres responsable de mantener la confidencialidad de tu cuenta y contraseña, así como de todas las actividades que ocurran bajo tu cuenta. Notifícanos inmediatamente sobre cualquier uso no autorizado de tu cuenta.</p>

                <h4>7. Limitación de Responsabilidad</h4>
                <p>En la medida permitida por la ley, REXHA no será responsable por ningún daño directo, indirecto, incidental, especial o consecuente que surja del uso o la imposibilidad de uso del Sitio.</p>

                <h4>8. Indemnización</h4>
                <p>Aceptas indemnizar y mantener a REXHA, sus afiliados y empleados, libres de cualquier reclamo, pérdida, daño, responsabilidad o gasto (incluidos honorarios legales) que surjan de tu uso del Sitio o de tu incumplimiento de estos Términos de Uso.</p>

                <h4>9. Legislación Aplicable</h4>
                <p>Estos Términos de Uso se regirán e interpretarán de acuerdo con las leyes de Perú. Cualquier disputa relacionada con estos términos estará sujeta a la jurisdicción exclusiva de los tribunales de Lima.</p>

                <h4>10. Contacto</h4>
                <p>Si tienes alguna pregunta sobre estos Términos de Uso, contáctanos en Rrex_ha@hotmail.com.</p>
            </div>
        </div>
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
                    <li><a href="https://www.linkedin.com/company/ong-zumate/posts/?feedView=all" target="_blank">LinkedIn</a></li>
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
            if (document.hidden) {
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
