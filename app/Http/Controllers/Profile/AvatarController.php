<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
  public function update(){

        //back to the profile page.
    // return response()->redirectTo(route('profile.edit'));
    return back()->with('message', 'Avatar is changed');
  }
}
