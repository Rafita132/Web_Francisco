<?php include 'header.php' ?>

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/portada_quest2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/portada_quest3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/portada_questpro.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<main>
    <div class="banner">
        <h1>Bienvenido a la tienda online</h1>
        <h3>Encuentra lo que buscas al mejor precio</h3>
    </div>
    <div class="products">
        <h2>Productos destacados</h2>
        <div class="grid">
            <div class="product">
                <img src="img/quest 2.jpg" alt="gafas virtuales">
                <h3>Meta Quest 2</h3>
                <p>La Meta Quest 2 es un dispositivo de realidad virtual (VR) desarrollado por Meta. Es la sucesora de
                    la Quest original y se lanzó en octubre de 2020. La Quest 2 ofrece una experiencia de realidad
                    virtual sin necesidad de estar conectada a una computadora, lo que la hace más accesible y fácil de
                    usar.
                    Sus componentes principales incluyen un visor, controladores de movimiento, un sistema de
                    seguimiento de movimiento, un procesador integrado y memoria RAM. La Quest 2 tiene pantallas de alta
                    resolución que proporcionan una experiencia visual nítida y envolvente. Además, está disponible en
                    diferentes variantes de almacenamiento interno, que van desde 64 GB hasta 256 GB, para almacenar
                    juegos, aplicaciones y otros contenidos descargados desde la tienda de Oculus. Los usuarios también
                    pueden utilizar tarjetas de memoria microSD para expandir el espacio de almacenamiento si es
                    necesario. En resumen, la Quest 2 es un dispositivo todo en uno que ofrece una experiencia de
                    realidad virtual de alta calidad, sin necesidad de cables ni conexiones externas, lo que la
                    convierte en una opción popular entre los entusiastas de la VR.</p>

            </div>
            <div class="product">
                <img src="img/quest 3.jpg" alt="gafas virtuales">
                <h3>Meta Quest 3</h3>
                <p>La Meta Quest 3, si ha sido lanzada, sería la última iteración de la serie de dispositivos de
                    realidad virtual de Meta Construida sobre las bases de sus predecesoras, ofrecería mejoras en la
                    resolución de pantalla, el rendimiento del procesador y la calidad del seguimiento de movimiento.
                    Sus componentes principales incluirían un visor con pantallas de alta resolución, controladores de
                    movimiento para interactuar con el entorno virtual, un sistema de seguimiento de movimiento para una
                    experiencia inmersiva, un procesador integrado y memoria RAM para ejecutar aplicaciones y juegos de
                    realidad virtual. Además, ofrecería opciones de almacenamiento interno que podrían variar desde una
                    cantidad inicial mínima, como 64 GB o 128 GB, hasta opciones premium con capacidades mayores, como
                    256 GB o más. Los usuarios también podrían tener la opción de expandir el almacenamiento mediante el
                    uso de tarjetas de memoria microSD para mayor flexibilidad.</p>

            </div>
            <div class="product">
                <img src="img/quest pro.webp" alt="gafas virtuales">
                <h3>Meta Quest pro</h3>
                <p>La Meta Quest Pro, si existe, sería una versión avanzada y mejorada de la línea Meta Quest, diseñada
                    para satisfacer las necesidades de usuarios más exigentes y profesionales de la realidad virtual.
                    Construida sobre las bases de sus predecesoras, la Quest Pro probablemente ofrecería mejoras
                    significativas en términos de rendimiento, calidad visual y capacidades de seguimiento.

                    Sus componentes principales podrían incluir un visor con pantallas de alta resolución y frecuencia
                    de actualización, lo que proporcionaría una experiencia visual excepcionalmente inmersiva y nítida.
                    Además, es probable que cuente con un sistema de seguimiento de movimiento más preciso y
                    controladores mejorados, lo que permitiría una interacción más fluida y precisa en el entorno
                    virtual.
                </p>
            </div>
        </div>
    </div>
</main>


<div id="modalPrivacidad" class="modal-Priv"></div>
<div id="modalTerminos" class="modal-Priv"></div>
<div id="modalCookies" class="modal-Priv"></div>
<div id="modalOverlay" class="modal-overlay"></div>

<script src="js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script src="js/jquery.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<?php include 'footer.php' ?>