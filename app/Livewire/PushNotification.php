<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class PushNotification extends Component
{
    public function push($id)
    {
        $notification = Auth::user()->unreadNotifications()->where('id', $id)->first();

        if ($notification) {
            // Access the 'data' field (which is a JSON object)
            $data = $notification->data;

            // Update the 'status' field in the data array
            $data['status'] = 'pushed';

            // Update the notification with the new data
            $notification->update(['data' => $data]);
        }
    }
    public function render()
    {
        return view('livewire.push-notification',
        ['notifications'=> Auth::user()->unreadNotifications()->get()
    ]);
    }
}
