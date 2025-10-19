@php
    $statusBadge = [
        'not_started' => '<p><span class="badge text-bg-danger p-2">Pas commencé</span></p>',
        'started' => '<p><span class="badge text-bg-primary p-2">Commencé</span></p>',
        'finished' => '<p><span class="badge text-bg-success p-2">Terminé</span></p>'
    ]
@endphp

{!! $statusBadge[$task->status] !!}