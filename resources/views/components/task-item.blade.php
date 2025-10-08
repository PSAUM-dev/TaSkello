<div class="card flex-fill">
    <div class="card-body">
        <p class="h6 card-title">{{ $task->name }}</p>
        <p class="text-muted text-sm">{{ substr($task->description, 0, 20) }}</p>
    </div>

    <div class="bg-success p-2">
        Terminée
    </div>
</div>
