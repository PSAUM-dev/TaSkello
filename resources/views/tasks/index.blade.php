<x-base-layout>

    @php
        $tasksCount = count($tasks);
    @endphp

    <div class="container mt-4">
        <div class="row justify-content-center">

            <div class="col-12 col-xl-10">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <p class="mb-4 h5">Tâches principales (<small
                                    class="text-muted h6">{{ $tasksCount }}</small>)</p>
                            <x-new-task-button />
                        </div>

                        @if ($tasksCount > 0)

                            <table class="table border-dark table-dark table-hover">

                                <tr>
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Status</th>
                                    <th></th>
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
                                            <a href="{{ route('tasks.show', $task) }}"
                                                class="link-light link-offset-3 link-underline-opacity-0 link-underline-opacity-50-hover">
                                                {{ $task->name }}
                                            </a>
                                        </td>

                                        <td><span
                                                class="badge text-bg-{{ $taskStatusColor[$task->status] }} p-2">{{ $taskStatus[$task->status] }}</span>
                                        </td>
                                        <td class="d-flex align-items-center justify-content-between">
                                            <a href="#"><i class="bi bi-pencil text-muted"></i></a>
                                            <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger"><i
                                                        class="bi bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>

                        @else
                            <p class="text-center bg-body-tertiary p-3">Pas de tâches disponibles.</p>
                        @endif


                    </div>
                </div>

            </div>

        </div>
    </div>

</x-base-layout>