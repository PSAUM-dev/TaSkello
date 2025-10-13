<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">

            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">TaSkello</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                    <li class="nav-item d-flex align-items-center">
                        <box-icon name="menu" color="gray" size="1.2em"></box-icon>
                        <a class="nav-link ml-3 active" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>

                    <li class="nav-item d-flex align-items-center">
                        <box-icon name="clipboard" color="gray" size="1.2em"></box-icon>
                        <a class="nav-link ml-3" href="{{ route('tasks.index') }}">Toutes mes tâches</a>
                    </li>

                </ul>

                <div class="mt-4">
                    <x-search-bar />
                </div>

            </div>

        </div>