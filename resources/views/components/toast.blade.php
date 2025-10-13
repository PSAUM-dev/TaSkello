@props(['title' => 'Notification', 'text' => 'Nouvelle notification'])

<div class="toast-container position-fixed bottom-0 end-0 p-3">

    <div class="toast border-success show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">{{ $title }}</strong>
            <small>2s ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ $text }}
        </div>
    </div>

</div>