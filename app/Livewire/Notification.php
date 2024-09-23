<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Notification extends Component
{

    public $notifications = [];
    public $count = 0;
    public function render()
    {
        if (Auth::check()) {
            $this->notifications = Auth::user()->unreadNotifications()->where('status','pushed')->get();
            $this->count =  $this->notifications->count();
        }
        return view(
            'livewire.notification',
            [
                'notifications' => $this->notifications,
                'count' => $this->count
            ]
        );
    }
}
