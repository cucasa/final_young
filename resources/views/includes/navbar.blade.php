<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="https://via.placeholder.com/30x30" alt="Logo" class="me-2">
            <span class="fw-bold">selia</span>
        </a>

        <!-- Botón responsive -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menú -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="#">Psicólogos y Especialistas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="#">Blog</a>
                </li>
                <!-- Dropdown Recursos -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semibold" href="#" data-bs-toggle="dropdown">Recursos</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Artículos</a></li>
                        <li><a class="dropdown-item" href="#">Videos</a></li>
                    </ul>
                </li>
                <!-- Dropdown Programas -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semibold" href="#" data-bs-toggle="dropdown">Programas</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Programa 1</a></li>
                        <li><a class="dropdown-item" href="#">Programa 2</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Botón de sesión -->
            <div class="d-flex">
                <a href="{{ route('login') }}" class="btn btn-outline-primary">Iniciar sesión</a>
            </div>
        </div>
    </div>
</nav>
