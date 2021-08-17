<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\DB;

class CommunityController extends Controller
{
    public function showFriends(Request $request)
    {
        $allUsers = User::all();

        return view('\community', ['usuarios' => $allUsers]);
    }
}
