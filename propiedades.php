<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REXHA Perú-Inmobiliaria</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/jpeg" href="images/logorexha.JPG">
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

    <main class="products container">
    <br>

    <h2>NUEVAS PROPIEDADES</h2>

    <div class="box-container" id="lista-1">

        <div class="box">   
           <div class="property-id">ID: 1110325</div>
            <img src="images/terreno_urbano.jpg" alt="">
            <div class="product-txt">
                <h3>TERRENO URBANO <br>EN VENTA </h3>
                <h3></h3>
                   <p class="precio">S/. 1'015,200.00 <br> USD 270,000.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Cusco, Cusco, San Sebastian</p>
                    <p>RUC: 12345678901</p>
             <div class="columns">
              <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
              </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
               </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
             </div>

             <style>
    .columns {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
    }
    .column {
        flex: 1;
        text-align: center;
        margin: 0 5px; /* Espacio entre columnas */
    }
</style>
                    
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>  
            </div>
            <div class="owner-photo">
                <img src="images/p1.jpg" alt="Propietario 1">
            </div>
        </div>

        <div class="box">
            <div class="property-id">ID: 1110307</div>
            <img src="images/terreno.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>TERRENO <br>EN VENTA</h3>
                <h3></h3>
                   <p class="precio">S/. 620,400.00 <br> USD 165,000.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Arequipa, Arequipa, Socabaya</p>
                    <p>RUC: 12345678901</p>
             <div class="columns">
              <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
              </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
               </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
             </div>
                    
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>   
            </div>
            <div class="owner-photo">
                <img src="images/p1.jpg" alt="Propietario 1">
            </div>
        </div>

        <div class="box">    
           <div class="property-id">ID: 1110331</div>
            <img src="images/local_comercial.jpg" alt="producto-1">     
            <div class="product-txt">
                <h3>LOCAL COMERCIAL <br>EN ALQUILER</h3>
                <h3></h3>
                <p class="precio">S/. 22,560.00 <br> USD 6,000.00</p>
                <p><i class="fas fa-map-marker-alt"></i>Lambayeque, Chiclayo</p>
                <p>RUC: 12345678901</p>
             <div class="columns">
              <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
              </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
               </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
             </div>
                <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p1.jpg" alt="Propietario 1">
            </div>
        </div>
        <div class="box">
            <div class="property-id">ID: 1110332</div>
            <img src="images/casita.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>CASA <br>EN VENTA </h3>
                <h3></h3>
                    <p class="precio">S/. 244,400.00 <br> USD 65,000.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, Punta Negra</p>
                    <p>RUC: 12345678901</p>
             <div class="columns">
              <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
              </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
               </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
             </div>
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p1.jpg" alt="Propietario 1">
            </div>
        </div>
        <div class="box">
           <div class="property-id">ID: 1110316</div>
            <img src="images/oficina2.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>OFICINA <br>EN VENTA </h3>
                <h3></h3>
                    <p class="precio">S/. 4'985,760.00 <br> USD 1'326,000.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, Santiago de Surco</p>
                    <p>RUC: 12345678901</p>
             <div class="columns">
              <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
              </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
               </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
             </div>
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p1.jpg" alt="Propietario 1">
            </div>
        </div>
        <div class="box">
           <div class="property-id">ID: 1110317</div>
            <img src="images/oficina3.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>OFICINA <br>EN ALQUILER </h3>
                <h3></h3>
                   <p class="precio">S/. 30,681.00 <br> USD 8,160.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, Santiago de Surco</p>
                    <p>RUC: 12345678901</p>
             <div class="columns">
              <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
              </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
               </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
             </div>
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p1.jpg" alt="Propietario 1">
            </div>
        </div>
        <div class="box">
            <div class="property-id">ID: 1110308</div>
            <img src="images/terreno2.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>TERRENO<br>EN ALQUILER </h3>
                <h3></h3>
                    <p class="precio">S/. 29,328.00 <br> USD 7,800.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, Lurigancho</p>
                    <p>RUC: 12345678901</p>
             <div class="columns">
              <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
              </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
               </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
             </div>
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p1.jpg" alt="Propietario 1">
            </div>
        </div>
        <div class="box">  
            <div class="property-id">ID: 1110326</div>  
            <img src="images/depa_duplex.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO DUPLEX<br> EN ALQUILER</h3>
                <h3></h3>
                    <p class="precio">S/. 1,900.00 <br> USD 505.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, San Miguel</p>
                    <p>RUC: 12345678901</p>
             <div class="columns">
              <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
              </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
               </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
             </div>
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p1.jpg" alt="Propietario 1">
            </div>
        </div>
        <div class="box">
            <div class="property-id">ID: 1110304</div>  
            <img src="images/urbana_c.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>CASA URBANA <br>EN VENTA </h3>
                <h3></h3>
                   <p class="precio">S/. 2'143,200.00 <br> USD 570,000.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, San Borja</p>
                    <p>RUC: 12345678901</p>
             <div class="columns">
              <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
              </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
               </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
             </div>
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p1.jpg" alt="Propietario 1">
            </div>
        </div>
        <div class="box">
           <div class="property-id">ID: 1110335</div>  
            <img src="images/departamento_flat.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>DEPARTAMENTO FLAT<br>EN VENTA</h3>
                <h3></h3>
                    <p class="precio">S/. 221,840.00 <br> USD 59,000.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, Los Olivos</p>
                    <p>RUC: 12345678901</p>
             <div class="columns">
              <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
              </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
               </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
             </div>
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p1.jpg" alt="Propietario 1">
            </div>
        </div>
        <div class="box">
            <div class="property-id">ID: 1110345</div>  
            <img src="images/oficina4.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>OFICINA <br>EN VENTA </h3>
                <h3></h3>
                   <p class="precio">S/. 536,176.00 <br> USD 142,600.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, San Borja</p>
                    <p>RUC: 12345678901</p>
             <div class="columns">
              <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
              </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
               </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
             </div>
                    <div class="rating">
                        <span class="star" data-value="1">★</span>
                        <span class="star" data-value="2">★</span>
                        <span class="star" data-value="3">★</span>
                        <span class="star" data-value="4">★</span>
                        <span class="star" data-value="5">★</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p1.jpg" alt="Propietario 1">
            </div>
        </div>
        <div class="box">
            <div class="property-id">ID: 1110359</div>  
            <img src="images/lamolina.jpg" alt="producto-1">
            <div class="product-txt">
                <h3>CASA <br>EN VENTA </h3>
                <h3></h3>
                    <p class="precio">S/. 2'368,800.00 <br> USD 630,000.00</p>
                    <p><i class="fas fa-map-marker-alt"></i>Lima, La Molina</p>
                    <p>RUC: 12345678901</p>
             <div class="columns">
              <div class="column">
                <p>Empresa o vendedor:</p>
                <p><small>CORPA S.A.C</small></p>
              </div>
              <div class="column">
                <p>Área del terreno:</p>
                <p><small>120 m²</small></p>
               </div>
               <div class="column">
                <p>Área construida:</p>
                <p><small>80 m²</small></p>
               </div>
             </div>
                    <div class="rating">
                        <span class="star" data-value="1">&#9733;</span>
                        <span class="star" data-value="2">&#9733;</span>
                        <span class="star" data-value="3">&#9733;</span>
                        <span class="star" data-value="4">&#9733;</span>
                        <span class="star" data-value="5">&#9733;</span>
                    </div>
            </div>
            <div class="owner-photo">
                <img src="images/p1.jpg" alt="Propietario 1">
            </div>
        </div>
      
    </div>
    
    <div class="btn-2" id="load-more"> Cargar Mas</div>
</main>

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


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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

<script>
   const stars = document.querySelectorAll('.star');

stars.forEach(function(star, index) {
    star.addEventListener('click', function() {
        // Limpiar todas las selecciones
        stars.forEach(s => s.classList.remove('checked'));

        // Añadir "checked" solo a la estrella clicada y a las anteriores
        for (let i = 0; i <= index; i++) {
            stars[i].classList.add('checked');
        }
    });

    star.addEventListener('mouseover', function() {
        // Resaltar estrellas en hover
        stars.forEach(s => s.classList.remove('checked'));
        for (let i = 0; i <= index; i++) {
            stars[i].classList.add('checked');
        }
    });

    star.addEventListener('mouseout', function() {
        // Mantener la selección actual
        const selectedStars = document.querySelectorAll('.star.checked');
        stars.forEach(s => s.classList.remove('checked'));
        selectedStars.forEach(s => s.classList.add('checked'));
    });
});
 </script>

</body>
</html> 