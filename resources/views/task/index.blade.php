@props(['task' => 0])

<x-base-layout>

    @if ($task == 1)

        <div class="container">
            <div class="row mt-xl-4">

                @for ($i = 0; $i < 4; $i++)

                    <x-task-item />

                @endfor

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