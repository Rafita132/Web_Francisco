<?php include 'header.php' ?>


<main class="about-us">
    <div class="banner">
        <h1>Conoce nuestro equipo</h1>
        <br>
        <h3>En nuestra tienda en Málaga está compuesta por un equipo de profesionales resolutivo, estratega, innovador y
            creativo, centrado en dar la mejor experiencia. No solo nos apasiona lo que hacemos, sino que además creemos
            en ello.</h3>
    </div>
    <section class="team">
        <h2>Nuestro Equipo</h2>
        <div class="team-member">
            <img src="img/cap.PNG" alt="Miembro del equipo">
            <h3>Rafael Quevedo Ibáñez</h3>
            <p>Miembro estresado por estudio y trabajo.</p>
        </div>
    </section>
    <section class="map">
        <h2>Nuestra Ubicación</h2>
        <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
            <script>
            (function() {
                var setting = {
                    "query": "Rincón de la Victoria, España",
                    "width": 800,
                    "height": 600,
                    "satellite": false,
                    "zoom": 12,
                    "placeId": "ChIJ0wvPJYlacg0ReUNB8sgw39k",
                    "cid": "0xd9df30c8f2414379",
                    "coords": [36.7176779, -4.280396],
                    "lang": "es",
                    "queryString": "Rincón de la Victoria, España",
                    "centerCoord": [36.7176779, -4.280396],
                    "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                    "embed_id": "1037565"
                };
                var d = document;
                var s = d.createElement('script');
                s.src = 'https://1map.com/js/script-for-user.js?embed_id=1037565';
                s.async = true;
                s.onload = function(e) {
                    window.OneMap.initMap(setting)
                };
                var to = d.getElementsByTagName('script')[0];
                to.parentNode.insertBefore(s, to);
            })();
            </script><a href="https://1map.com/es/map-embed">1 Map</a>
        </div>
    </section>
</main>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="js/app.js"></script>
<?php include 'footer.php' ?>