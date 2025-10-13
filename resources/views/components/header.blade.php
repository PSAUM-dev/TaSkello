<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="d-flex align-items-center">

            <button class="navbar-toggler me-3" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="text-white"><box-icon name="menu" color="white"></box-icon></span>
            </button>

            <a class="navbar-brand" href="{{ route('home') }}">TaSkello</a>
        </div>


        <div class="d-flex">
            <x-search-bar />
            <x-my-projects-button />
            <x-new-task-dropdown />

            <div class="border-left border-1 ml-2 me-2 opacity-25"></div>

            <x-user-profile-button />
        </div>


        <x-sidebar />


    </div>
</nav>