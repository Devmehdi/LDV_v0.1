<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\User;
use App\Http\Resources\NotificationResource;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function getnotification(){
       $id=Auth::id();
       $user=User::find($id)->agence_id;
     //  return  dd($user);
       $notif=NotificationResource::collection(Notification::where('agence_id' , '=' , $user)->get());
       return response()->json($notif);
    }
    public function destroy($id)
    {
        $model=new Notification;
        return delete($model,$id);
    }
}
