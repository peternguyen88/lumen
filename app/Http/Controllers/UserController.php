<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use Carbon\Carbon;

use App\Helpers\Response;

class UserController extends BaseController
{
    public function index(Request $request){
        return response()->json(User::all());
    }

    public function login(Request $request){
        $user = new User($request->json()->all());

        $existingUser = User::whereProviderId($user['provider_id'])->first();
        if($existingUser){
            $user = $existingUser;
        }

        $user->login_count++;
        $user->last_login = Carbon::now() ;
        // Finding User Location
        $ip = $request->ip();
        $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));// Send to ipinfo
        if($details['ip']){
            $user['last_login_location']="{$details->city}, {$details->region}, {$details->country}";
        }

        $user->save();
        //
        return response()->json($user);
    }

    public function getUser($user_id)
    {
        $user = User::whereUserId($user_id)->first();
        if( !$user ) {
            return Response::notFound('User not found');
        }
        return response()->json($user);
    }

}
