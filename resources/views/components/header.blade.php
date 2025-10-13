<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="d-flex align-items-center">

            @if ($isUserConnected)
            <button class="navbar-toggler me-3" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="text-white"><box-icon name="menu" color="white"></box-icon></span>
            </button>
            @endif

            <a class="navbar-brand" href="{{ route('home') }}">TaSkello</a>
        </div>


        <div class="d-flex">

            @if ($isUserConnected)

                <x-search-bar />

                <x-my-projects-button />
                <x-new-task-dropdown />

                <div class="border-left border-1 ml-2 me-2 opacity-25"></div>

                <x-user-profile-button />

            @else

                <div class="d-flex ml-2 align-items-center">
                    <a href="{{ route('login') }}" class="me-4 link-light link-underline-opacity-0">Signin</a>
                    <a href="{{ route('signup') }}"
                        class="link-secondary link-underline-opacity-0 border-1 rounded p-2">Signup</a>
                </div>

            @endif

        </div>


        @if ($isUserConnected)
            <x-sidebar />
        @endif


    </div>
</nav>