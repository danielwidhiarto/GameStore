<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function myProfile(Request $request){
        $profile = User::where('id', $request->id)->first();

        if(Auth::user()->role == 'admin'){
            return view('Profile.profile_admin', compact('profile'));
        }else{
            return view('Profile.profile_customer', compact('profile'));
        }
    }

    public function updateProfileView($id)
    {
    $profile = User::find($id);
    return view('Profile.profile_admin', compact('profile'));
    }

    public function updateProfileLogic($id, Request $request)
    {
    $profile = User::find($id);
    $profile->name = $request->name;
    $profile->email = $request->email;
    $profile->save();

    return redirect()->route('Profile.profile_admin', ['id' => $profile->id])->with('success', 'Profile updated successfully!');
    }


}
