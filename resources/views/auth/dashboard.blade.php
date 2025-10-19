<x-base-layout>

    @if (count($recentAddedTasks) > 0)

        <!-- Tâche récemment mises à jour -->
        <div class="container mt-4">
            <p class="h3">Tâches réçentes <a class="text-sm text-muted link-underline-opactity-0  link-offset-3"
                    href="{{ route('tasks.index') }}">Toutes mes tâches</a></p>
            <div class="row mt-xl-4">

                @foreach ($recentAddedTasks as $task)
                    <div class="col-12 d-flex col-xl-3 mt-3 mt-xl-0">
                        <x-task-item :$task />
                    </div>
                @endforeach

            </div>
        </div>

        <div class="container mt-4">
            <div class="row">

                <div class="row col-12 col-xl-7">

                    <div class="col-12 col-xl-6 align-items-center">
                        <p class="m-0 h5 mb-4">En attente (<small class="text-muted h6">{{ count($waitingTask) }}</small>)
                        </p>

                        @foreach ($waitingTask as $task)
                            <div class="d-flex mt-3 mt-xl-3 shadow">
                                <x-task-item :$task />
                            </div>
                        @endforeach

                    </div>

                    <div class="col-12 col-xl-6">
                        <p class="m-0 h5 mb-4">En Cours (<small class="text-muted h6">{{ count($ongoingTask) }}</small>)</p>

                        @foreach ($ongoingTask as $task)
                            <div class="d-flex mt-3 mt-xl-3 shadow">
                                <x-task-item :$task />
                            </div>
                        @endforeach
                    </div>

                </div>

                <!-- Tasks Graph -->
                <div class="col-12 col-xl-5 bg-success">
                    Le graph des task ici ^^
                </div>

            </div>
        </div>

    @else <!-- S'IL YA AUCUNE Tâche en cours -->

        <div class="d-flex justify-content-center align-items-center h-90">
            <div class="col-11 col-xl-6 p-4 border-1 border-secondary text-center">
                <h3>Hello <a class="link-secondary link-offset-1" href="#">{{ Auth::user()->name }}</a>,</h3>
                <p>Commençons à organiser vos tâches sur TaSkello</p>
                <div class="d-flex justify-content-center">
                    <x-new-task-button text="Commencer une nouvelle tâche" />
                </div>
            </div>
        </div>

    @endif
    <!-- Le toast -->
    @if (session('success'))
        <x-toast title="Nouvelle tâche" text="Votre tâche a bien été crée !" />
    @endif

</x-base-layout>