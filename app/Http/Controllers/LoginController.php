<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Teams;

class LoginController extends Controller
{
    public function confirm(Request $request){
        $info = $request->authInfo;
        $flg = 0;
        $auth_user = Users::where([
            ['email',$info['email']],
            ['password',$info['password']]
            ])->with(['teamStructures'])->first();
        $teams = [];
        foreach($auth_user->teamStructures as $teamStructures){
            if(Teams::where('id',$teamStructures->team_id)->exists()){
                $teams[] = Teams::where('id',$teamStructures->team_id)->first();
            }
        }
        if(!empty($auth_user)){
            $data = [
                'user_name' => $auth_user->name,
                'email' => $auth_user->email,
                'password' => $auth_user->password,
                'team_name' => $teams[0]->name,
                'teams' => $teams,
            ];
            $flg = 1;
        }
        return ['result'=>$flg,'data'=>$data];
    }
}
