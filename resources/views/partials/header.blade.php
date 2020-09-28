<header id="layout-header">
    <nav class="navbar nav-app-main" id="navbar-app" data-sticky  data-sticky-offset="0">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="https://bulma.io">
                    <img src="{{ url('img/logo_muniollachea.png') }}" width="220px" title="Municipalidad Distrital de Ollachea" class="is-hidden-mobile">
                    <img src="{{ url('img/logo_muniollachea.png') }}" width="112" height="28" class="is-hidden-tablet" alt="">
                </a>
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">

                </div>
                <div class="navbar-end">
                    <a class="navbar-item">
                        Inicio
                    </a>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            <span><i class="fal fa-city is-hidden-tablet pr2"></i><span>DISTRITO</span><span class="is-block">Conoce nuestro Distrito</span></span>
                        </a>
                        <div class="navbar-dropdown is-hidden-mobile is-boxed">
                            <a class="navbar-item">
                                Reseña historica.
                            </a>
                            <a class="navbar-item">
                                Circuito turistico.
                            </a>
                            <a class="navbar-item">
                                Geografía
                            </a>
                            <a class="navbar-item">
                                Actividades
                            </a>
                        </div>
                    </div>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            <span><i class="fal fa-university is-hidden-tablet pr2"></i><span>MUNICIPIO</span><br> Nuestra institución</span>
                        </a>
                        <div class="navbar-dropdown is-hidden-mobile">
                            <a class="navbar-item">
                                Alcalde
                            </a>
                            <a class="navbar-item">
                                Consejo Municipal
                            </a>
                            <a class="navbar-item">
                                Misión y visión
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                Organigrama
                            </a>
                        </div>
                    </div>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            <span>PUBLICACIONES</span>
                        </a>
                        <div class="navbar-dropdown is-hidden-mobile">
                            <a class="navbar-item">
                                Comunicados
                            </a>
                            <a class="navbar-item">
                                Noticias
                            </a>
                        </div>
                    </div>
                </div>
                <!--<div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a href="">Contácto</a>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </nav>
</header>
