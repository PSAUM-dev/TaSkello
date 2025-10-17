<x-base-layout>

    <div class="container">
        <div class="row h-90 justify-content-center">
            <div class="col-12 col-xl-8 mt-5">

                <div class="card">
                    <div class="card-body p-4">
                        <div class="d-flex  justify-content-between">
                            <h4>{{ $task->name }}</h4>

                            <div class="d-flex align-items-center">
                                
                                <a href="#" class="btn btn-outline-secondary me-2">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <x-task-delete-button id="{{ $task->id }}" />
                            </div>

                        </div>

                        <div class="d-flex align-items-center">
                            <p class="me-2">
                                <span class="bg-body-tertiary p-1 rounded fs-6">{{ $task->created_at }}</span>
                            </p>
                            <x-task-status-badge :$task /> 
                        </div>

                        <p>{{ $task->description }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-base-layout>