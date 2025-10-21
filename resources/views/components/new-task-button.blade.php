@props(['text' => 'Nouvelle tâche'])

<a href="#" class="btn btn-outline-secondary d-flex align-items-center me-3" data-bs-toggle="modal"
    data-bs-target="#newTaskModalForm">
    <box-icon name="plus" color="gray"></box-icon>
    <span>{{ $text }}</span>
</a>

<div class="modal fade" id="newTaskModalForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content text-start">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="{{ route('tasks.store') }}">
                @csrf

                <div class="modal-body">

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-11">

                                <div class="input-group mb-3">
                                    <span class="input-group-text border-0 bg-dark">
                                        <i class="bi bi-person text-secondary"></i>
                                    </span>
                                    <input type="text" class="form-control border-0" id="taskname" name="name"
                                        placeholder="Intitulé de la tâche">
                                </div>


                                <div class="position-relative mb-3">
                                    <i
                                        class="bi bi-file-earmark position-absolute top-0 start-0 ms-3 mt-3 text-secondary"></i>
                                    <textarea class="form-control ps-5 pt-3 border-0" id="description"
                                        name="description" rows="3" placeholder="Ajoutez une description..."></textarea>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer bg-body-tertiary border-0">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-secondary shadow btn-sm px-4 shadow">Ajouter</button>
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <button type="submit" class="ms-2 btn btn-outline btn-sm px-4 border-0
                                d-flex align-items-center">
                                    <i class="bi bi-plus-lg fs-5 text-secondary"></i>
                                    <span class="ms-2">Ajouter</span>
                                </button>
                            </li>
                            <li class="mt-2">
                                <button type="submit" class="ms-2 btn btn-sm btn-outline px-4 border-0
                                d-flex align-items-center">
                                    <i class="bi bi-file-earmark-plus fs-5 text-secondary"></i>
                                    <span class="ms-2">Enregistrer & Nouvelle tâche</span>
                                </button>
                            </li>

                            <li><hr width="280px"/></li>
                        </ul>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>