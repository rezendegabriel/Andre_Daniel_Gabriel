<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Avatar;

use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function showProfile(Request $request)
    {

        $avatarId = $request->session()->get('idUsuario');
        if($avatarId){
            $avatar = DB::table('avatar')
            ->select('avatar.*')->where('idAvatar', $avatarId)
            ->get();

            return view('\profile', ['avatar' => $avatar]);
        }
        return view('\profile');
    }
}
