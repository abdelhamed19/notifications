<div wire:poll.3s class="wrap-input100 validate-input">
    <div>
        @forelse ($notifications as $notification)
            <p class="dropdown-item" style="background: yellow">
                {{ $notification->data['message'] ?? 'New Notification' }}
            </p>
            <p>Status: {{ $notification->status }}</p> <!-- Display status -->
                {{-- @dd($notification->id) --}}
                <input type="hidden" wire:model="status">
            <button wire:click="push('{{ $notification->id }}')" class="btn btn-success">
                Push Notification
            </button>
            <br>
        @empty
            <a class="dropdown-item" href="#">No new notifications</a>
        @endforelse
    </div>
</div>
