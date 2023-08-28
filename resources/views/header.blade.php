<nav class="navbar navbar-expand-lg text-uppercase fixed-top bg-firm-color" id="mainNav">
    <div class="container">
        <div class="col-3 logo">
            <a class="navbar-brand" href="#page-top">
                <img src="{{URL::asset('images/logo.png')}}" class="img-fluid" alt="Responsive image">
            </a>
        </div>
        <div class="col top-menu">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/logout">Logout</a></li>
                </ul>
            </div>
        </div>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
    </div>
</nav>