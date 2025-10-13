@props(['text' => 'Nouvelle tâche'])

<a href="#" class="btn btn-outline-secondary d-flex align-items-center me-3" data-bs-toggle="modal"
    data-bs-target="#newTaskModalForm">
    <box-icon name="plus" color="gray"></box-icon>
    <span>{{ $text }}</span>
</a>

<div class="modal fade" id="newTaskModalForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <form method="post" action="{{ route('tasks.store') }}">
                    @csrf

                    <div class="row justify-content-center">
                        <div class="mb-4 col-10 col-xl-10">
                            <h4>Nouvelle tâche</h4>
                            <p class="text-muted">Remplissez les informations concernant vos tâches</p>
                            <hr />
                        </div>

                    </div>

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-9">
                                <div class="mb-3">
                                    <label for="taskname" class="form-label">Intitulé</label>
                                    <input type="text" class="form-control" id="taskname" name="name"
                                        placeholder="Intitulé de la tâche" />
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description"
                                        rows="3"></textarea>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-outline-secondary">Enregistrer</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>