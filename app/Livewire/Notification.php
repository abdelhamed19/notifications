<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Notification extends Component
{
    public function render()
    {
        return view('livewire.notification',
        ['notifications'=> Auth::user()->unreadNotifications()->get(),
        'count'=> Auth::user()->unreadNotifications()->count()
    ]);
    }
}
