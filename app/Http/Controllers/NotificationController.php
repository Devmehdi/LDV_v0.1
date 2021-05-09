<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Http\Resources\NotificationResource;

class NotificationController extends Controller
{
    public function getnotification(){
       $notif=NotificationResource::collection(Notification::where('activeflage' , '=' , 1)->get());
       return response()->json($notif);
    }
    public function destroy($id)
    {
        $model=new Notification;
        return delete($model,$id);
    }
}
