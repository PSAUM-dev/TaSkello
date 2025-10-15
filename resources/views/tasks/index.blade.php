<x-base-layout>

    <div class="container mt-4">
        <div class="row justify-content-center">

            <div class="col-12 col-xl-10">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <p class="mb-4 h5">Tâches principales (<small class="text-muted h6">{{ count($tasks) }}</small>)</p>
                            <x-new-task-button />
                        </div>

                        <table class="table border-dark table-dark table-hover">

                            <tr>
                                <th></th>
                                <th>Nom</th>
                                <th>Status</th>
                                <th>Deadline</th>
                            </tr>

                            @foreach ($tasks as $task)

                                @php

                                    $taskStatus = [
                                        'not_started' => 'En attentte',
                                        'started' => 'Commencée',
                                        'finished' => 'Terminée'
                                    ];

                                    $taskStatusColor = [
                                        'not_started' => 'danger',
                                        'started' => 'primary',
                                        'finished' => 'success'
                                    ];

                                @endphp
                                <tr>
                                    <td><input class="form-check-input" type="checkbox" name="" id=""></td>

                                    <td>
                                        <a href="{{ route('tasks.show', $task) }}" class="link-light link-offset-3 link-underline-opacity-0 link-underline-opacity-50-hover">
                                            {{ $task->name }}
                                        </a>
                                    </td>

                                    <td><span class="badge text-bg-{{ $taskStatusColor[$task->status] }} p-2">{{ $taskStatus[$task->status] }}</span></td>
                                    <td><span class="badge text-bg-secondary p-2">13/11/2025</span></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>

</x-base-layout>