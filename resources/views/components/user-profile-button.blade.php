<div class="dropstart p-2 rounded">
    <a href="#" class="link-light" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-person h4"></i>
    </a>
    <div class="dropdown-menu shadow  mt-5" style="width: 250px;">
            
        <div class="p-3">
            <p class="h6 p-0 m-0">{{ Auth::user()->name }}</p>
            <p class="fs-6 text-muted">Développeur Fullstack</p>

            <hr />

            <p class="fs-6">
                <a href="#" class="btn btn-outline-secondary border-0 rounded col-12 d-flex align-items-center justify-content-start">
                    <i class="bi bi-person"></i>
                    <span class="ms-2 text-light">Mon profil</span>
                </a>

                <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary border-0 rounded col-12 d-flex align-items-center justify-content-start">
                    <i class="bi bi-kanban"></i>
                    <span class="ms-2 text-light">Dashboard</span>
                </a>
            </p>

           

                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    @method('POST')

                    <button type="submit" class="btn btn-outline-secondary border-0 rounded col-12 d-flex align-items-center justify-content-start">
                        <i class="bi bi-box-arrow-right"></i>
                        <span class="ms-2 text-light">Se déconnecter</span>
                    </button>
                </form>

        </div>

    </div>
</div>