<x-base-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-10 card p-4 mt-2 mt-xl-4">
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
                                    <textarea class="form-control" id="description" name="description" rows="5"></textarea>
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

</x-base-layout>