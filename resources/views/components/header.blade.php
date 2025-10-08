<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <a class="navbar-brand" href="#">TaSkello</a>
        </div>

        <div class="d-flex align-items-center">
            <x-new-task-button />
            
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="text-white"><box-icon name="menu" color="white"></box-icon></span>
            </button>

        </div>

        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">

            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Options</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                    <li class="nav-item d-flex align-items-center">
                        <box-icon name="menu" color="gray" size="1.2em"></box-icon>
                        <a class="nav-link ml-3 active" href="#">Dashboard</a>
                    </li>

                    <li class="nav-item d-flex align-items-center">
                        <box-icon name="clipboard" color="gray" size="1.2em"></box-icon>
                        <a class="nav-link ml-3" href="#">Toutes mes tâches</a>
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


    </div>
</nav>