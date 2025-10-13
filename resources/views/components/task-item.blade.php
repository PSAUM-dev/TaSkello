<div class="card flex-fill">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <p class="h6 card-title">{{ $task->name }}</p>

            <div class="dropdown">
                <a href="#" class="link-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Consulter</a></li>
                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                    <hr />

                    <li><a class="dropdown-item link-danger" href="#">Supprimer</a></li>
                </ul>
            </div>


        </div>
        <p class="text-muted text-sm">{{ substr($task->description, 0, 60) }}</p>
    </div>

    <div class="p-2 d-flex justify-content-between">
        @switch($task->status)
        
            @case('not_started')
                <span class="badge text-bg-danger p-2">Pas commencé</span>
                @break

            @case('started')
                <span class="badge text-bg-primary p-2">Commencé</span>
                @break

            @case('finished')
                <span class="badge text-bg-success p-2">Terminé</span>
                @break
        
            @default
            
        @endswitch

    </div>

</div>
