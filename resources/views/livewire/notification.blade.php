<div wire:poll class="detail-box">
    <div class="heading_container">
        <h2>
            Notification {{$count}}
        </h2>
    </div>
    <div>
        @forelse ($notifications as $notification)
            <a wire:bolling="notifications" class="dropdown-item" href="#">
                {{ $notification->data['message'] ?? 'New Notification' }}
            </a>
        @empty
            <a class="dropdown-item" >No new notifications</a>
        @endforelse
    </div>
</div>
