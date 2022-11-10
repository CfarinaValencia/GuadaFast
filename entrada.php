<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Casa De La Guadaña</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!--RESET CSS-->
    <link rel="stylesheet" href="css/reset.css">
    <!--CSS-->
    <link rel="stylesheet" href="css/styledos.css">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--ICON BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <!--TODO NAVEGACIÓN-->
    <header id="inicio"> 
        <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
              <a id="logo" class="navbar-brand" href="#">La <i id="casa-logo" class="bi bi-house-fill"></i> De La Guadaña</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div id="lista" class="navbar-nav ms-auto">
                  <a id="first-link" class="nav-link nav-link-active" aria-current="page" href="#inicio">Inicio</a>
                  <a id="second-link" class="nav-link nav-link-active" href="#nosotros">Nosotros</a>
                  <a id="third-link" class="nav-link nav-link-active" href="#servicios">Servicios</a>
                  <a id="fourth-link" class="nav-link nav-link-active" href="#ubicacion">Ubicación</a>
                  <a id="fiveth-link" class="nav-link nav-link-active" href="#preguntas">Preguntas</a>
                  <a id="sixth-link" class="nav-link nav-link-active" href="#contacto">Contacto</a>
                  <a id="login" class="nav-link" href="login.php">Iniciar Sesión</a>
                </div>
              </div>
            </div>
          </nav>

          <section class="hero">
            <h1>La <i class="bi bi-house-fill"></i> De La Guadaña</h2>
            <p>Atención, colaboración y asesoría.</p>
          </section>
    </header>

    <!--TODO EL CONTENIDO-->
    <main class="main">
      <!--TODO QUIENES SOMOS-->
        <section id="nosotros" class="nosotros">
          <div class="container-lg">
            <div class="text-nosotros">
              <h2 class="main-title">¿Quienes <span class="diff-color-text">Somos?</span></h2>
            </div>
              <div class="quienes-somos">
                <p class="text-quienes-somos">Es una organización colombiana en realización de venta y mantenimiento para equipos de jardinería. Fue creada a partir de 1988 desde el garaje de una casa. Por medio de publicidad y visita a algunos clientes el negocio empezó a crecer y tuvo la fortuna de trasladarse a una bodega más amplia y mejor segmentada. A la empresa tenía que asignársele un nombre, por lo tanto, La Casa De La Guadaña hace referencia no solo a venta y mantenimiento de equipos de jardinería y repuestos, si no a satisfacer al comprador en todos sus servicios, para que el cliente se sienta acogido y como en casa. De tal forma que los clientes no se lleven una compra si no una experiencia.</p>
                <div class="img-quienes-somos w-75 m-auto">
                  <img class="img-fluid" src="images/quienes-somos.jpg" alt="quienes-somos">
                </div>
              </div>
          </div>
          <!--TODO MISION-VISION-->
          <div class="container-lg">
            <div class="text-mv">
              <h2 class="main-title"><span class="diff-color-text">Nuestro</span> Objetivo</h2>
            </div>
            <div class="mv-style">
              <div class="img-mv w-75">
                <img class="img-fluid" src="images/mv.jpg" alt="vision-empresa">
              </div>
              <div class="mv container-lg">
                <div class="mision">
                  <h3 class="mision-title">Misión</h3>
                  <p class="p-mision">Somos una empresa dedicada a la venta y mantenimiento de equipos para zonas verdes, creada con el objetivo de conquistar los corazones del cliente a través de un servicio óptimo, honesto y cumplido.</p>
                </div>
                <div class="vision">
                  <h3 class="vision-title">Visión</h3>
                  <p class="p-vision">Ser el mejor líder en ventas certificadas, manejando precios justos y asequibles, para expandirse a varias regiones de Colombia, gestionando y logrando el mejor mantenimiento a los productos y la mejor atención al cliente con excelencia y convicción.</p>
                </div>        
              </div>
            </div>
          </div>
          <!--TODO PRINCIPIOS-->
          <div class="principios container-lg">
            <div>
              <h3 class="principios-title">Principios</h3>
              <ol class="principios-list">
                <li><span class="diff-color-text-list">Generar</span> confianza y credibilidad en clientes, proveedores y empleados.</li>
                <li><span class="diff-color-text-list">Darle</span> una experiencia al cliente cada vez que nos visite.</li>
                <li><span class="diff-color-text-list">Buscar</span> siempre el mejor servicio y destacarse por ofrecer buenos productos y con alto nivel de calidad.</li>
                <li><span class="diff-color-text-list">Establecer</span> los precios más competitivos produciendo a menor costo sin sacrificar la calidad.</li>
              </ol>   
            </div>
            <div>
              <img class="img-fluid" src="images/principios.jpg" alt="principios">
            </div>
          </div>
          <!--TODO FUNDADORES-->
          <div class="fundadores container-fluid">
            <div class="text-fundadores">
              <h2 class="main-title">Nuestro <span class="diff-color-text">Equipo</span></h2>
            </div>
            <div class="personas">
              <div class="person-one">
                <img class="img-fluid" src="images/persona1.jpg" alt="FUNDADOR 1">
                <h3>Javier Duque Castañeda</h3>
                <p>Administrador</p>
                <div class="redes">
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="wp"><i class="bi bi-whatsapp"></i></a>
                </div>
              </div>
              <div class="person-two">
                <img class="img-fluid" src="images/persona2.jpg" alt="FUNDADOR 2">
                <h3>Adriana Echeverry Caballero</h3>
                <p>Organizadora</p>
                <div class="redes">
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="wp"><i class="bi bi-whatsapp"></i></a>
                </div>
              </div>
              <div class="person-three">
                <img class="img-fluid" src="images/persona3.jpg" alt="FUNDADOR 3">
                <h3>Juan David Duque Echeverry</h3>
                <p>Desarrollador</p>
                <div class="redes">
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="wp"><i class="bi bi-whatsapp"></i></a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--TODO SERVICIOS-->
        <section id="servicios" class="servicios container-fluid">
          <div class="text-services">
            <h2 class="main-title"><span class="diff-color-text">Nuestros</span> Servicios</h2>
            <p>El catalogo ideal para ti.</p>
          </div>
          <div id="carouselExampleCaptions" class="carousel slide container-fluid" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/carusel1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Nuestras Guadañas</h5>
                  <p>La mejor calidad en equipos de jardineria</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/carusel2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Nuestros productos y repuestos</h5>
                  <p>Cada pieza es importante para nosotros, es por eso que tenemos lo que deseas</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/carusel3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Mantenimiento y reparación</h5>
                  <p>Tus productos no pueden quedar con daños, ofrecemos mantenimiento completo y preventivo</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>
        <!--TODO CORTE-->
        <section class="servicios container-fluid">
          <div class="services-cards">
            <div class="cards">
              <img src="images/servicio-guadaña.png" alt="SERVICIO 1">
              <h3>Guadañas</h3>
              <p>Vendemos guadañas de marcas <strong>Maruyama 420 y Husqvarna 143Rll</strong> de calidad para ti y con garantia.</p>
              <a href="login.php" class="btn btn-primary">Compra Aqui!</a>
            </div>
            <div class="cards">
              <img src="images/servicio-repuesto.png" alt="SERVICIO 2">
              <h3>Repuestos</h3>
              <p>La mejor calidad de repuestos a un precio asequible y con garantia.</p>
              <a href="login.php" class="btn btn-primary">Compra Aqui!</a>
            </div>
            <div class="cards">
              <img src="images/servicio-reparacion.png" alt="SERVICIO 3">
              <h3>Mantenimiento y Reparación</h3>
              <p>Se ofrece asesoria de mantenimiento <strong>gratuita</strong> y se hace reparación de todas las marcas.</p>
              <a href="#contacto" class="btn btn-primary">Agenda Aqui!</a>
            </div>
          </div>
        </section>
        <!--TODO UBICACIÓN-->
        <section id="ubicacion" class="location container-fluid container-sm">
          <h2 class="main-title">Nuestra <span class="diff-color-text">Ubicación</span></h2>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.5586251336813!2d-76.52572448524175!3d3.45689459748394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a642462a1b5b%3A0x8fa008af0e37277a!2sLa%20casa%20de%20la%20guada%C3%B1a!5e0!3m2!1ses-419!2sco!4v1666057022389!5m2!1ses-419!2sco" width="400" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <!--TODO PREGUNTAS-->
        <section id="preguntas" class="questions">
          <h2 class="main-title"><span class="diff-color-text">Preguntas</span> Frecuentes</h2>
          <div class="accordion container-lg" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  ¿Que guadañas venden?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Vendemos las guadañas <strong>Maruyama 420 y Husqvarna 143Rll</strong> con motores de 3HP de potencia.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  ¿Ofrecen garantia?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Para los equipos que vendemos se ofrecen <strong>2 años de garantia.</strong>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  ¿Que tiempo de trabajo le puedo ofrecer al equipo?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Para las guadañas <strong>Maruyama 420 y Husqvarna 143Rll</strong> se les puede dar un tiempo de trabajo continuo de <strong>8 horas</strong> aproximadamente.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  ¿Ofrece instrucciones de mantenimiento?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Ofrecemos asesoría <strong>GRATUITA</strong> e indicaciones en el momento de hacer su compra del equipo para que pueda mantener y cuidar preventivamente su maquina.
                  Además se le ofrece asesoría a cualquier equipo que compre externo a nuestra empresa.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  ¿A que maquinas le hacen reparación?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Ofrecemos mantenimiento y reparación a <strong>todas las marcas.</strong> Animate a venir a nuestro local.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  ¿Hasta que hora atienden?
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Trabajamos a jornada continua de <strong>8:00AM a 5:00PM.</strong> 
                </div>
              </div>
            </div>            
          </div>
        </section>

        <!--TODO CONTACTO-->
        <section id="contacto" class="contacto container-fluid container-lg">
          <div class="text-contactanos container-lg">
            <h2 class="main-title">Contáctanos</h2>
            <p class="p-contactanos">Si tienes inquietudes o deseas tener mas información acerca de nuestros productos y servicios,  como un agendamiento para el mantenimiento de tu equipo, comunicate con nuestro número teléfonico o envianos un mensaje a traves del siguiente formulario, estaremos atentos a tu solicitud.</p>
          </div>
          <div class="numero-telefonico">
            <div class="p-numero">
              <i class="bi bi-telephone-fill"> Llámanos: (+57) 311 3539156</i>
            </div>
          </div>
          <div class="container-formulario">
            <form  action="contacto.php" method="post"">
            <div class="formulario" >
              <div class="datos-personales">
                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre" required>
                <input class="form-control" type="email" id="email" name="email" placeholder="Escribe tu correo" required>
                <input class="form-control" type="number" id="celular" name="celular" placeholder="Escribe tu teléfono " 
                required>
              </div>
              <div class="asunto-descripcion">
                <input class="form-control" type="text" id="asunto" name="asunto" placeholder="Asunto" required>
                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="3" placeholder="Descripción" required></textarea>
              </div>
            </div>
            <div class="container-boton">
              <button type="submit" class="boton btn btn-danger" name="contact">Enviar</button>
            </div>
            </form>
          </div>
        </section>
    </main>

    <!--TODO FOOTER-->
    <footer class="footer">
       <!-- Footer Links -->
        <div class="footer-links">
          <div class="footer-container">
              <ul>
                  <li>
                  <a href="#inicio">
                      <h3>Sitio Web</h3>
                  </a>
                  </li>
                  <li>
                  <a href="#inicio">Inicio</a>
                  </li>
                  <li>
                  <a href="#nosotros">Nosotros</a>
                  </li>
                  <li>
                  <a href="#servicios">Servicios</a>
                  </li>
                  <li>
                  <a href="#ubicacion">Ubicación</a>
                  </li>
                  <li>
                  <a href="#preguntas">Preguntas</a>
                  </li>
                  <li>
                  <a href="#contacto">Contacto</a>
                  </li>
              </ul>
              <ul>
                <li>
                <a href="login.php">
                    <h3>Tienda</h3>
                </a>
                </li>
                <li>
                <a href="login.php">Registrese</a>
                </li>
                <li>
                <a href="login.php">Iniciar Sesión</a>
                </li>
                <li>
                  <a href="login.php">Registrese</a>
                </li>
                <li>
                  <a href="login.php">Iniciar Sesión</a>
                </li>
                <li>
                  <a href="login.php">Registrese</a>
                </li>
                <li>
                  <a href="login.php">Iniciar Sesión</a>
                </li>
            </ul>
              <ul>
                <li>
                <a href="#inicio">
                    <h3>Sitio Web</h3>
                </a>
                </li>
                <li>
                <a href="#inicio">Inicio</a>
                </li>
                <li>
                <a href="#nosotros">Nosotros</a>
                </li>
                <li>
                <a href="#servicios">Servicios</a>
                </li>
                <li>
                <a href="#ubicacion">Ubicación</a>
                </li>
                <li>
                <a href="#preguntas">Preguntas</a>
                </li>
                <li>
                <a href="#contacto">Contacto</a>
                </li>
            </ul>
            <ul>
                <li>
                <a href="login.php">
                    <h3>Tienda</h3>
                </a>
                </li>
                <li>
                <a href="login.php">Registrese</a>
                </li>
                <li>
                <a href="login.php">Iniciar Sesión</a>
                </li>
                <li>
                  <a href="login.php">Registrese</a>
                </li>
                <li>
                  <a href="login.php">Iniciar Sesión</a>
                </li>
                <li>
                  <a href="login.php">Registrese</a>
                </li>
                <li>
                  <a href="login.php">Iniciar Sesión</a>
                </li>
            </ul>
          </div>
      </div>
      <p class="copyright">&copy; Todos los derechos reservados<br>La Casa De La Guadaña 2022</p>
    </footer>

    <!--SCROLL REVEAL-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!--JS-->
    <script src="js/index.js"></script>
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>