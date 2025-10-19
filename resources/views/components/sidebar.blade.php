<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">

            <div class="offcanvas-header bg-body-tertiary">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">TaSkello</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                    <li class="nav-item d-flex align-items-center">
                        <i class="bi bi-kanban text-muted"></i>
                        <a class="nav-link ml-3 {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>

                    <li class="nav-item d-flex align-items-center">
                        <i class="bi bi-clipboard text-muted"></i>
                        <a class="nav-link ml-3 {{ Route::is('tasks.*') ? 'active' : '' }}" href="{{ route('tasks.index') }}">Mes tâches</a>
                    </li>

                    <li class="nav-item d-flex align-items-center">
                        <i class="bi bi-briefcase text-muted"></i>
                        <a class="nav-link ml-3 {{ Route::is('projects') ? 'active' : '' }}" href="#">Mes projets</a>
                    </li>

                </ul>

                <div class="mt-4">
                    <x-search-bar />
                </div>

            </div>

        </div>