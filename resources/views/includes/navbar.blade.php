<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1a1aff;">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ url('youngstar') }}">
            <img src="{{ asset('Assets/logo2.png') }}" alt="Young-Star Logo" class="me-2" style="height: 50px;">
            <span class="text-white fw-bold fs-4">Young-Star</span>
        </a>

        <!-- Botón para móviles -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Ítems del menú -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a href="{{ route('articulos') }}" class="nav-link text-white fw-semibold">Artículos</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('foros') }}" class="nav-link text-white fw-semibold">Foros</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" id="recursosDropdown" role="button" data-bs-toggle="dropdown">
                        Recursos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Guías prácticas</a></li>
                        <li><a class="dropdown-item" href="#">Videos educativos</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" id="programasDropdown" role="button" data-bs-toggle="dropdown">
                        Programas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Programa de mentoría</a></li>
                        <li><a class="dropdown-item" href="#">Talleres juveniles</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold" href="#">Mi perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold" href="#">Admin</a>
                </li>
            </ul>

            <!-- Botón de sesión -->
            <div class="d-none d-lg-block">
                <a href="{{ route('login') }}" class="btn btn-light fw-semibold">Iniciar sesión</a>
            </div>
        </div>
    </div>
</nav>
