<x-base-layout>

    @if (count($tasks) > 0)

        <div class="container">
            <div class="row mt-xl-4">

                @foreach ($tasks as $task)
                    <div class="col-12 d-flex col-xl-3 mt-3 mt-xl-0">
                        <x-task-item :$task />
                    </div>
                @endforeach

            </div>
        </div>

    @else

        <div class="d-flex justify-content-center align-items-center h-90">
            <div class="col-11 col-xl-6 p-4 border-1 border-secondary text-center">
                <h3>Hello Dominique</h3>
                <p>Commençons à organiser vos tâches sur TaSkello</p>
                <div class="d-flex justify-content-center">
                    <x-new-task-button text="Commencer une nouvelle tâche" />
                </div>
            </div>
        </div>

    @endif
  
    @if (session('success'))
        <x-toast title="Nouvelle tâche" text="Votre tâche a bien été crée !" />
    @endif

</x-base-layout>