<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <a class="navbar-brand" href="{{ route('home') }}">TaSkello</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="text-white"><box-icon name="menu" color="white"></box-icon></span>
            </button>
        </div>

        
        <x-new-task-button />
        

        <x-sidebar />


    </div>
</nav>