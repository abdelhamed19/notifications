<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class PushNotification extends Component
{
    public $status = "pending";
    public function push($id)
    {
        $notification = Auth::user()->unreadNotifications()->where('id', $id)->first();
        if ($notification->status == $this->status) {
            $this->status = "pushed";
            $notification->update(['status' => $this->status]);
        }
    }
    public function render()
    {
        return view(
            'livewire.push-notification',
            [
                'notifications' => Auth::user()->unreadNotifications()->get()
            ]
        );
    }
}
