<div class="container-fluid" @yield('background') >
    <nav class="navbar navbar-expand-lg navbar-dark justify-content-between" style="width: 100%">
        <div class="row" style="width: 100%">
            <div class="col-md-5 col-sm-12" style="width: 100%">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <img src="{{ URL::asset('img/logo.png') }}" alt="logo" width="100%" style="left: 50%">
            </div>
            <div class="col-sm-7 pt-5" style="width: 100%">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-3 text-center">
                            <a class="nav-link" href="/" style="width: 100px"> HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="/nosotros" style="width: 100px"> NOSOTROS <span class="sr-only">(current)</span></a>
                        </li
                        <li class="nav-item text-center">
                            <a class="nav-link" href="/servicios" style="width: 100px"> SERVICIOS <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ÁREAS
                            </a>
                            <div class="dropdown-menu navbar-dark" aria-labelledby="navbarDropdown" style="background-color: grey; color: white">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/project" style="background-color: grey; color: white">Project Managment</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/transformacion" style="background-color: grey; color: white">Transformación Digital</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="/contacto" style="width: 100px"> CONTACTO <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="col-sm-12 pt-5" style="color: white">
        <div class="col-sm-12 pt-5">
            <div class="col-sm-12 fuentetitulo">
                <strong>@yield('titulo')</strong>
            </div>
            <div class="col-sm-12 fuentetitulo">
                @yield('subtitulo')
            </div>
            <div class="col-sm-3 fuentetextonav">
                @yield('texto')
            </div>
        </div>
    </div>
</div>
