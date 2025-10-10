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

                <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Chercher une tâche"
                        aria-label="Search" />
                    <button class="btn border-0 btn-outline-secondary" type="submit">
                        <box-icon name="search" color="white"></box-icon>
                    </button>
                </form>

            </div>

        </div>