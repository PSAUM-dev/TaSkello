<x-base-layout>

    @if ($tasks)

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
                <a href="#" class="btn btn-outline-secondary">
                    <div class="d-flex align-items-center">
                        <box-icon name="plus" color="gray"></box-icon>
                        <span>Commencer une nouvelle tâche</span>
                    </div>
                </a>
            </div>
        </div>

    @endif
  

</x-base-layout>