<div  style="background:#113d84;" class="nav-app-top is-hidden-mobile">
    <div class="container">
        <nav class="level"  >
            <!-- Left side -->
            <div class="level-left">
                <div class="level-item">
                    <a href="//facebook.com/muniollachea2019" title="Facebook | Municipalidad Distrital de Ollachea">
                        <span class="icon is-medium">
                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x has-text-link"></i>
                                <i class="fab fa-facebook-f fa-stack-1x has-text-white"></i>
                            </span>
                        </span>
                    </a>
                    <a href="//youtube.com/channel/UCxXc3QMDV3Ug9O9w2vV5y1g" title="Youtube | Municipalidad Distrital de Ollachea">
                        <span class="icon is-medium">
                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x has-text-link"></i>
                                <i class="fab fa-youtube fa-stack-1x has-text-white"></i>
                            </span>
                        </span>
                    </a>
                    <a href="mailto:municipalidadollachea@gmail.com" title="municipalidadollachea@gmail.com">
                        <span class="icon is-medium">
                            <span class="fa-stack">
                                <i class="fas fa-circle fa-stack-2x has-text-link"></i>
                                <i class="fal fa-envelope fa-stack-1x has-text-white"></i>
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <!-- Right side -->
            <div class="level-right">
                <p class="level-item"><a href="https://forms.gle/bdmRvB18NAfWNL1b9">Libro de reclamaciones</a></p>
                <p class="level-item" title="Portal de transparencia | Municipalidad Distrital de Ollachea.">
                    <a href="https://transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=11651&id_tema=1&ver=D#.Xr3og2hKiUm">
                        <img alt="Pte" src="{{ url('img/ico/transparencia.png') }}" width="150px" class="align-right">
                    </a>
                </p>
            </div>
        </nav>
    </div>
</div>
<header id="layout-header">
    <nav class="navbar nav-app-main" id="navbar-app" data-sticky  data-sticky-offset="0">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
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
                    <a class="navbar-item" href="/">
                        Inicio
                    </a>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            <span><i class="fal fa-city is-hidden-tablet pr2"></i><span>DISTRITO</span><span class="is-block">Conoce nuestro Distrito</span></span>
                        </a>
                        <div class="navbar-dropdown is-hidden-mobile is-boxed">
                            <a class="navbar-item" href="{{ route("page_historia") }}">
                                Reseña historica
                            </a>
                            <a class="navbar-item" href="{{ route('page_turismo')  }}">
                                Circuito turistico
                            </a>
                            <a class="navbar-item" href="{{ route('page_geografia') }}">
                                Geografía
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
