<nav class="navbar navbar-expand-lg fixed-top shadow-sm" 
     style="background: linear-gradient(90deg, #f9a8d4, #fbcfe8);">
    <div class="container">
        <a class="navbar-brand fw-bold text-white" href="{{ url('/') }}">
            <i class="bi bi-heart-fill"></i> MyApp
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-3">
                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold" href="{{ url('/user') }}">
                        <i class="bi bi-people-fill"></i> Daftar User
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold" href="{{ url('/user/create') }}">
                        <i class="bi bi-person-plus-fill"></i> Tambah User
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
