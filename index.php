<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Local css -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <!-- Scrollreveal JS -->
    <script src="./js/scrollreveal.js"></script>

    <title>TB Consultoría</title>
</head>

<body>
    <!--============================================================= -->
    <!-- SCROLL TO TOP -->
    <!--============================================================= -->
    <div id="ir-arriba-btn" class="ocultar">
        <i class="fas fa-arrow-circle-up fa-4x"></i>
    </div>


    <!--============================================================= -->
    <!-- ENCABEZADO -->
    <!--============================================================= -->
    <header class="container-fluid d-flex justify-content-center encabezado" id="encabezado">
        <p class="text-light mb-0 p-2 fs-3">Hacemos las cosas mejor.
            Hacemos cosas mejores.</p>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-0 sticky-top" id="menu">
        <div class="container-fluid">
            <a class="navbar-brand p-0" href="#">
                <img src="./img/20210925_203723_0000.png" alt="" width="100" height="100"
                    class="d-inline-block align-text-top logo-img">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#encabezado">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--============================================================= -->
    <!-- SLIDER -->
    <!--============================================================= -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3500">
                <img src="./img/1.png" class="img-fluid" alt="foto1">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Asesoría contínua</h3>
                    <p>Nuestra mesa de ayuda te brindará las mejores soluciones.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3500">
                <img src="./img/2.png" class="img-fluid" alt="foto2">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Presupuestos a medida.</h3>
                    <p>Nuestro grupo de expertos encontrará la mejor solución al mejor precio.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3500">
                <img src="./img/3.png" class="img-fluid" alt="foto3">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Impulso a tu negocio.</h3>
                    <p>Con nuestro sistema de mejora contínua obtenemos crecimiento sostenido en el tiempo.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3500">
                <img src="./img/4.png" class="img-fluid" alt="foto4">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Sistematización de procesos</h3>
                    <p>Nos enfocamos en lograr un funcionamiento sólido y autosostenido en sus procesos.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--============================================================= -->
    <!-- ABOUT -->
    <!--============================================================= -->

    <section class="container-fluid" id="Nosotros">
        <div class="row">
            <div class="col-12 col-lg-6" id="nosotros-container">
                <h1 class="w-75 mx-auto izq-der" style="white-space:pre-wrap">Quienes somos:</h1>
                <p class="w-75 mx-auto izq-der-delay">Conformamos un grupo de profesionales  interdisciplinarios, a partir de  nuestras diferentes habilidades y experiencia, decidimos  brindar servicios integrales a las organizaciones de diversos perfiles.</p>
                <h3 class="w-75 mx-auto mt-4 izq-der">Nuestra Visión:</h3>
                <ul class="w-75 mx-auto izq-der-delay">
                    <li>Planificar, desarrollar y ejecutar de forma eficiente y responsable todo trabajo encomendado </li>
                    <li>Efectuar un seguimiento y acompañamiento de las necesidades de cada uno de nuestros clientes.</li>
                </ul>
                <h3 class="w-75 mx-auto izq-der">Nuestra Misión:</h3>
                <ul class="w-75 mx-auto izq-der-delay">
                    <li>Reconocimiento en el mercado por nuestra actuación, permitiendo llegar a las  organizaciones nacionales e internacionales.</li>
                    <li>El éxito de cada cliente, sea parte de nuestros aportes y establecer una mejora continua de ellos y nuestra, acompañando en todo momento sus logros y necesidades.</li>
                </ul>
                <h3 class="w-75 mx-auto izq-der">Nuestros valores:</h3>
                <ul class="w-75 mx-auto izq-der-delay">
                    <li>Compromiso, calidad, trabajo en equipo,  pasión, seguridad,  rapidez, creatividad.</li>
                </ul>

            </div>
            <div class="col-12 col-lg-6 mx-auto d-flex">
                <img class="img-fluid" id="imagen-about" src="./img/consultoria.png" alt="">
            </div>
        </div>
        <div class="col-12 aparecer">
            <h1 class="ms-5 ps-5">Política de calidad</h1>
            <p class="ms-5 ps-5">En BT nos comprometemos garantizar la calidad de nuestros servicios profesionales.<br>
                Brindar a nuestros  clientes los productos o servicios que requieren, aplicando transparencia y confidencialidad.<br>
                Proporcionar a nuestro equipo profesional y administrativo,  un ambiente agradable, reconfortante, seguro y estimulante para facilitar la expresión de nuevas propuestas.<br>
                Facilitar y promocionar cursos de capacitación que formen parte de un proceso obligatorio a los actuantes y a los nuevos ingresos de la empresa.</p>
        </div>
    </section>

    <!--============================================================= -->
    <!-- SERVICIOS -->
    <!--============================================================= -->
    <section class="container-fluid" id="Servicios">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h1 class="w-75 mx-auto mt-4 izq-der">Nuestros Servicios</h1>
                <p class="w-75 mx-auto mt-4 lh-lg izq-der-delay">Encontrará Expertos en el área de Aseguramiento de la Calidad con amplia experiencia en gestión basados tanto en las normas genéricas ISO9001: ISO14001, OSHAS 18001,   ISO 13485, ISO 14971, ISO 22000. </p>
            </div>
            <div class="col-12 col-lg-6">
                <div class="main-container">
                    <div class="list-container">
                        <div class="item">
                            <h3 class="btn-item">Descripción General</h3>
                            <div class="item-content">
                                <p>A título de referencia detallamos algunas de las actividades que desarrollamos:</p>
                                <ul>
                                    <li>Planificación, implementación, seguimiento y mantenimiento del SGC s/ disposiciones, normativas independiente del sector de actuación y categorización de la empresa.</li>
                                    <li>Implementacion y preparación para la certificación de normas.</li>
                                    <li>Tramitaciones de habilitaciones de establecimientos e inscripciones de productos a nivel provincial, nacional e internacional.</li>
                                    <li>Preparación de la documentación para la elaboración de monografías,  guías de producción, controles de procesos para: especialidades medicinales, productos médicos, odontológicos, estética, domisanitarios, cosmética y alimenticia.</li>
                                    <li>Análisis de riesgo, análisis de peligros y  puntos críticos de control (HACCP) y validaciones de procesos.</li>
                                    <li>Capacitaciones al personal: SGC, BPF, BPD, Higiene y Seguridad.</li>
                                    <li>Auditorías internas, de proveedores.</li>
                                    <li>Presentaciones en Renpre(Registro Nacional de Precursores Químicos).</li>
                                    <li>Tratamiento de residuos orgánicos.</li>
                                    <li>Servicio de calibraciones y Mapeos térmicos.</li>
                                    <li>Calibraciones Eléctricas.</li>
                                    <li>Validación y certificaciones de áreas.</li>
                                    <li>Registraciones sistema Helena (ANMAT), Sifega (ANMAT) ,510K (FDA).</li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <h3 class="btn-item">Calidad</h3>
                            <div class="item-content">
                                <p>Aplicables  a las Industrias Farmacéuticas, Hospitalarias, Agroalimentarias,  Alimentarias, Veterinarias, Cosméticas, Químicas.<br>
                                Hacemos:</p>
                                <ul>
                                    <li>Implementación, seguimiento y mantenimiento del sistemas de calidad,   independientemente del tamaño y sector de actuación de la empresa.</li>
                                    <li>Mapeo, Análisis y Mejora Continua de los Procesos.</li>
                                    <li>Evaluación y monitoreo de los controles requeridos en todas las etapas del proceso de gestión.</li>
                                    <li>Implementación de Normas ISO: 9001, 9004, 13485, 14971.</li>
                                    <li>Asesoramiento en Control de No-Conformidades, Acciones Correctivas,  Acciones Preventivas, Reclamos de Clientes y Mejoras Continuas.</li>
                                    <li>Planificación y  Ejecución de Auditorías de los sistemas de calidad.</li>
                                    <li>Planificación y Ejecución de Auditorías ISO 9001, ISO 13485.</li>
                                    <li>Asesoramiento  para el control de los dispositivos de seguimiento y de   medición.</li>
                                    <li>Capacitación y asesoramiento del  personal responsable del aseguramiento  
                                        de  la calidad.</li>
                                    <li>Asesoramiento  y seguimiento para lograr  certificación de la norma  ISO 9001.</li>
                                    <li>Confección de la documentación requerida en un Sistema de Gestión de  Calidad  (Política de Calidad, Manual de Calidad, Manual de Procedimientos, etc.).</li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <h3 class="btn-item">Producción</h3>
                            <div class="item-content">
                                <p>Aplicables  a las Industrias Farmacéuticas, Hospitalarias, Agroalimentarias,  Alimentarias, Veterinarias, Cosméticas, Químicas.<br>
                                    Hacemos:</p>
                                <ul>
                                    <li>Monitorización microbiológica de ambientes para procesos asépticos. (control  microbiológico en salas limpias). Aplicación ISO 14644. </li>
                                    <li>Calificación de equipos: análisis químico y microbiológico.</li>
                                    <li>Desarrollo e implementación de Sistema de Gestión de seguridad Alimentaria.</li>
                                    <li>Análisis de Riesgos y Control de Puntos Críticos. (HACCP).</li>
                                    <li>Validación de procesos.</li>
                                    <li>Validación de técnicas analíticas.</li>
                                    <li>Implementación y seguimiento de Buenas Prácticas de Manufactura.</li>
                                    <li>Implementación y seguimiento Buenas Prácticas de Almacenamiento: importación,  distribución.</li>
                                    <li>Implementación y seguimiento: Sistema de Gestión Integrado.</li>
                                    <li>Ensayos aplicables a diferentes materias primas para la industria alimenticia.</li>
                                    <li>Procesos Operativos, Sanitarios y Tecnológicos de Productos Pesqueros y de la Acuicultura.</li>
                                    <li>Operaciones Unitarias y Procesamiento de Alimentos - Tratamientos Térmicos.</li>
                                    <li>Procesos Operativos, Sanitarios y Tecnológicos de Leche y Productos Lácteos. </li>
                                    <li>Productos y Procesos frutihortícolas con buenas prácticas agrícolas.</li>
                                    <li>Procesos operativos, sanitarios y tecnológicos de miel.</li>
                                    <li>Procesos operativos, sanitarios y tecnológicos de carne y productos cárnicos.</li>
                                    <li>Bienestar animal. Fiscalización agroalimentaria</li>
                                    <li>Manejo de SSOP Y GMP en eventos de diferente magnitud.</li>
                                </ul>
                            </div>
                        </div>    
                        <div class="item">
                            <h3 class="btn-item">Asuntos regulatorios</h3>
                            <div class="item-content">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut excepturi consequuntur repellendus ex. Modi nobis consequuntur eligendi aperiam, sapiente dolor cupiditate pariatur!</p>
                                <ul>
                                    <li>Asesoramiento y capacitación de disposiciones vigentes.</li>
                                    <li>Tramitación de Habilitaciones para  Industrias: Farmacéutica, Alimenticia,Química, Domisanitarios.</li>
                                    <li>Tramitación y Habilitaciones Droguerías, Farmacias, Distribuidoras de          Productos Médicos.</li>
                                    <li>Tramitación: registros productos médicos, medicamentos, domisanitarios  y alimentos.</li>
                                    <li>Gestión 510k /FDA.</li>
                                </ul>
                            </div>
                        </div>    
                        <div class="item">
                            <h3 class="btn-item">Diseño</h3>
                            <div class="item-content">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut excepturi consequuntur repellendus ex. Modi nobis consequuntur eligendi aperiam, sapiente dolor cupiditate pariatur!</p>
                                <ul>
                                    <li>Estudio de factibilidad y diseño de plantas para la Industria Farmacéutica,(medicamentos, productos médicos), Alimenticia, Central de Esterilización, Droguerías,Laboratorios, Distribuidoras, Farmacias.</li>
                                    <li>Diseño de productos para la salud, y  domisanitarios.</li>
                                    <li>Análisis, desarrollo de procesos de esterilización y  equipamiento.</li>
                                </ul>
                            </div>
                        </div>    
                        <div class="item">
                            <h3 class="btn-item">Medio ambiente</h3>
                            <div class="item-content">
                                <p>Hacemos:</p>
                                <ul>
                                    <li>Desarrollo de estudios de impacto ambiental</li>
                                    <li>Planificación y Ejecución de Auditorías  Ambientales.</li>
                                    <li>Implementación de normas ISO 14000.</li>
                                </ul>
                            </div>
                        </div>    
                        <div class="item">
                            <h3 class="btn-item">Calibraciones y validaciones</h3>
                            <div class="item-content">
                                <p>Hacemos:</p>
                                <ul>
                                    <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo illo ad rerum porro quisquam.</li>
                                    <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo illo ad rerum porro quisquam.</li>
                                    <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo illo ad rerum porro quisquam.</li>
                                </ul>
                            </div>
                        </div>    
                        <div class="item">
                            <h3 class="btn-item">Capacitación</h3>
                            <div class="item-content">
                                <p>Hacemos:</p>
                                <ul>
                                    <li>Diseño de programas de capacitaciones orientados a empresas, instituciones.</li>
                                    <li>Taller Metrología y Buenas Prácticas de Manufactura (GMP).</li>
                                    <li>Taller de SSO`P </li>
                                    <li>Principios de HACCP, presentación de manuales.</li>
                                    <li>Curso sobre Gestión de Calidad (Normas ISO).</li>
                                    <li>Capacitación manipulación de alimentos.</li>
                                    <li>Microbiología y Ecología Microbiana de los Alimentos.</li>
                                    <li>Micología de los Alimentos.</li>
                                    <li>Toxicología de los Alimentos.</li>
                                    <li>Microbiología de los Alimentos.</li>
                                    <li>Preservación de Alimentos.</li>
                                    <li>Manejo de las Normas HACCP, SSO´P, GMP.</li>
                                </ul>
                            </div>
                        </div>    
                        <div class="item">
                            <h3 class="btn-item">Legal</h3>
                            <div class="item-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit placeat perferendis ullam expedita. Delectus quos asperiores molestiae corporis autem? Ducimus doloribus cum unde nam dolorem qui inventore quam est similique.<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut excepturi consequuntur repellendus ex. Modi nobis consequuntur eligendi aperiam, sapiente dolor cupiditate pariatur!</p>
                                <ul>
                                    <li>Implementación, seguimiento y mantenimiento del sistemas de calidad,   independientemente del tamaño y sector de actuación de la empresa.</li>
                                    <li>Mapeo, Análisis y Mejora Continua de los Procesos.</li>
                                    <li>Evaluación y monitoreo de los controles requeridos en todas las etapas del proceso de gestión.</li>
                                    <li>Implementación de Normas ISO: 9001, 9004, 13485, 14971.</li>
                                    <li>Asesoramiento en Control de No-Conformidades, Acciones Correctivas,  Acciones Preventivas, Reclamos de Clientes y Mejoras Continuas.</li>
                                    <li>Planificación y  Ejecución de Auditorías de los sistemas de calidad.</li>
                                    <li>Planificación y Ejecución de Auditorías ISO 9001, ISO 13485.</li>
                                    <li>Asesoramiento  para el control de los dispositivos de seguimiento y de   medición.</li>
                                    <li>Capacitación y asesoramiento del  personal responsable del aseguramiento  
                                        de  la calidad.</li>
                                    <li>Asesoramiento  y seguimiento para lograr  certificación de la norma  ISO 9001.</li>
                                    <li>Confección de la documentación requerida en un Sistema de Gestión de  Calidad  (Política de Calidad, Manual de Calidad, Manual de Procedimientos, etc.).</li>
                                </ul>
                            </div>
                        </div>    
                        <div class="item">
                            <h3 class="btn-item">Otros Servicios</h3>
                            <div class="item-content">
                                <p>Hacemos:</p>
                                <ul>
                                    <li>Gestión de comercialización de medicamentos, dietética, productos naturistas,  domisanitarios, insumos esterilización, productos médicos y cosméticos.</li>
                                    <li>Diseño especializado de vademécum.</li>
                                    <li>Auditoría de recetas y del servicio prestado.</li>
                                    <li>Gestión de subsidios en Organismos Públicos y ONGs  para la realización de capacitaciones</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--============================================================= -->
    <!-- CONTACTO -->
    <!--============================================================= -->

    <section class="container-fluid" id="Contacto">
        <div class="row">
            <div class=" col-12 col-lg-6">
                <img class="img-fluid izq-der" src="./img/foto-contacto.png" alt="">
            </div>
            <div class="col-12 col-lg-6">
                <div class="mb-3">
                    <h1 class="mx-auto arriba-abajo">Descubre como podemos trabajar juntos</h1>
                </div>
                <form class="row g-3">
                    <div class="mb-2">
                      <label for="nombreApellido" class="form-label">Nombre y Apellido</label>
                      <input type="text" class="form-control" id="nombreApellido" placeholder="Tu nombre y apellido" aria-label="Username">
                    </div>
                    <div class="mb-2">
                      <label for="inputEmpresa" class="form-label">Empresa</label>
                      <input type="text" class="form-control" id="inputEmpresa" placeholder="Tu empresa">
                    </div>
                    <div class="mb-2">
                      <label for="emailInput" class="form-label">Dirección de Email</label>
                      <input type="email" class="form-control" id="emailInput" placeholder="nombre@ejemplo.com">
                    </div>
                    <div class="mb-2">
                      <label for="telefonoInput" class="form-label">Teléfono</label>
                      <input type="tel" class="form-control" id="telefonoInput" placeholder="(Código de área) Número">
                    </div>
                    <div class="mb-2">
                      <label for="mensajeInput" class="form-label">Comentarios</label>
                      <textarea class="form-control" id="mensajeInput" rows="5"></textarea>
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Contactame
                        </label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button type="button" class="btn btn-primary btn-lg" id="btnSubmit">Enviar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
  
    </section>

    <!--============================================================= -->
    <!-- FOOTER -->
    <!--============================================================= -->

    <div class="container-fluid" id="Footer">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
              <li class="nav-item"><a href="#encabezado" class="nav-link px-2 text-muted">Inicio</a></li>
              <li class="nav-item"><a href="#Nosotros" class="nav-link px-2 text-muted">Nosotros</a></li>
              <li class="nav-item"><a href="#Servicios" class="nav-link px-2 text-muted">Servicios</a></li>
              <li class="nav-item"><a href="#Contacto" class="nav-link px-2 text-muted">Contacto</a></li>
            </ul>
            
            <p class="text-center text-muted mb-0">&copy; 2021 TB Consultoría, Inc</p>
            <div class="col-12 d-flex justify-content-end px-2">
            <span><p class="mb-1">Desarrollado por:</p><img src="./img/dzko_dev.jpg" alt="" style="height:50px;width:auto;border-radius:5px;"></span>
            </div>
        </footer>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
    <script src="./js/index.js"></script>
    <script src="./js/consulta.js"></script>
    <?php include("mail.php");?>
</body>

</html>