<x-app-layout>

    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-12 col-xl-5 mt-4 mt-xl-5">
                <h3>
                    <a class="link-light link-underline-opacity-0" href="{{ route('home') }}">TaSkello</a>
                    <span class="fs-6 text-muted">Inscription</span>
                </h3>
                <p>Veuillez remplir les informations ci-dessous</p>
                <div class="card border-1 mt-2">
                    <div class="car-body p-4">


                        <form action="{{ route('registerAccount') }}" method="post">
                            @csrf
                            @method('POST')

                            <div>
                                <input class="form-control" type="text" name="name" id=""
                                    placeholder="Nom d'utilisateur..." required />

                                <input class="form-control mt-3" type="email" name="email" id=""
                                    placeholder="Adresse email..." required />
                                @error('email')
                                    <p><span class="text-danger">{{ $message }}</span></p>
                                @enderror

                                <input class="form-control mt-3" type="password" name="password" id=""
                                    placeholder="Mot de passe..." required />

                                <input class="form-control mt-3" type="password" name="password_confirmation" id=""
                                    placeholder="Confirmation du mot de passe..." required />
                                @error('password')
                                    <p><span class="text-danger">{{ $message }}</span></p>
                                @enderror

                                <div class="mt-3 d-flex">
                                    <input class="form-check-input me-2" type="checkbox" name="conditions" id="" />
                                    <span>J'accepte les <a href="">Conditions d'utilisation</a></span>
                                </div>

                                @if (session('error') == 'conditions.false')
                                <p class="text-danger">Veuillez accepter les conditions d'utilisation</p>
                                @endif
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-secondary">S'incrire</button>

                                <p class="mt-4 text-center">Vous avez déjà un compte ? <a
                                        href="{{ route('login') }}">Connectez-vous ici</a></p>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>

    @if ($errors->any())
        {{ dump($errors) }}
    @endif

    <x-footer class="fixed-bottom" />

</x-app-layout>