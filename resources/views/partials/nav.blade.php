<div class="container-fluid" @yield('background') >
    <nav class="navbar navbar-expand-lg navbar-dark justify-content-between">
        <div class="row">
            <div class="col-xl-7">
                <img src="{{ URL::asset('img/logo.png') }}" alt="logo">
            </div>
            <div class="col-xl-5 mt-5">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-3 text-center">
                            <a class="nav-link" href="/" style="width: 100px"> HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item text-center" >
                            <a class="nav-link" href="/nosotros" style="width: 100px"> NOSOTROS <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="/servicios" style="width: 100px"> SERVICIOS <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="/areas" style="width: 100px"> ÁREAS <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="/contacto" style="width: 100px"> CONTACTO <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
