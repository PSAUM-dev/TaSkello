<!-- Example split danger button -->
<div class="dropstart d-flex align-items-center">

    <button type="button" style="width: 60px;" class="btn btn-outline-secondary h-100 p-2 d-flex align-items-center justify-content-between" data-bs-toggle="dropdown"
        aria-expanded="false">

        <i class="bi bi-plus-lg"></i>
        <i class="bi bi-caret-down"></i>
    </button>

    <ul class="dropdown-menu ml-4 mt-5 p-2">
        
        <li><a class="dropdown-item" href="#">
            <i class="bi bi-briefcase text-muted me-2"></i>
            <span class="text-light">Nouveau projet</span>
        </a></li>

        <li><a class="dropdown-item" href="{{ route('tasks.create') }}">
            <i class="bi bi-clipboard text-muted me-2"></i>
            <span class="text-light">Nouvelle tâche</span>
        </a></li>

    </ul>
</div>