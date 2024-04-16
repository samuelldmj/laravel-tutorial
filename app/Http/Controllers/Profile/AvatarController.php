<?php

namespace App\Http\Controllers\Profile;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateAvatarRequest;

class AvatarController extends Controller
{
    //changed the Request class in the update function to the name of the request file i created.
  public function update(UpdateAvatarRequest $request){

    //this should be in the request file
    // $request->validate([
    //     'avatar' => 'required|image'
    // ]);
    dd($request->all());

        //back to the profile page after making a change.
    // return response()->redirectTo(route('profile.edit'));
    // return back()->with('message', 'Avatar is changed');

    //after the image has been stored.
    return redirect(route('profile.edit'))->with('message', 'Avatar is updated');
  }
}
