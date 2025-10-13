<x-app-layout>

    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-12 col-xl-5 mt-4 mt-xl-5">
                <h3>
                    <a class="link-light link-underline-opacity-0" href="{{ route('home') }}">TaSkello</a>
                </h3>
                <p>Veuillez vous connecter avec vos identifiants</p>
                <div class="card border-1 mt-2">
                    <div class="car-body p-4">
                        

                        <form action="{{ route('authAccount') }}" method="post">
                            @csrf
                            @method('POST')

                            <div>
                                <input class="form-control" type="email" name="email" id="" placeholder="Adresse email..." />

                                <input class="form-control mt-3" type="password" name="password" id=""
                                    placeholder="Mot de passe..." />

                                <div class="mt-3 d-flex">
                                    <input class="form-check-input me-2" type="checkbox" name="remember" id="" />
                                    <span>Se souvenir de moi</span>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-secondary">Se connecter</button>

                                <p class="mt-4 text-center">Vous n'avez pas encore de compte ?  <a href="{{ route('signup') }}">Inscrivez-vous ici</a></p>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <x-footer />

</x-app-layout>