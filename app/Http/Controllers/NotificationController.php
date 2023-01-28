<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Notifications\OffersNotification;
use Illuminate\Support\Facades\Notification;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendNotification() {

        $user = User::first();

        $offerData = [
            'name' => 'Amruta',
            'body' => 'Received offer',
            'thanks' => 'Thank You',
            'offerText' => 'Please check offer',
            'offerUrl' => url('/'),
            'offer_id' => rand(1111,9999),
        ];

        Notification::send($user,new OffersNotification($offerData));
        dd('Task is completed');
    }
}
