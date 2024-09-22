<div wire:poll.3s class="wrap-input100 validate-input">
    <div>
        @forelse ($notifications as $notification)
            <p class="dropdown-item" style="background: yellow">
                {{ $notification->data['message'] ?? 'New Notification' }}
            </p>
            <p>Status: {{ $notification->status ?? 'pending' }}</p> <!-- Display status -->
                {{-- @dd($notification->id) --}}
            <!-- Corrected wire directive -->
            <button wire:click="push('{{ $notification->id }}')" class="btn btn-success">
                Push Notification
            </button>
            <br>
        @empty
            <a class="dropdown-item" href="#">No new notifications</a>
        @endforelse
    </div>
</div>
