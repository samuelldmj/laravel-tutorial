<?php

namespace App\Models;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('welcome');
   

    //selecting users
    // $users = DB::select("select * from users");

    //inserting into table in the db
    // $users = DB::insert("insert into users (name, email, password) values (?, ?, ?)", [ 'Samuel', "samuelldmj@hotmail.com", 4586]);
    // $users = DB::insert("insert into users (name, email, password) values (?, ?, ?)", [ 'Daniel', "samuelldmj@coldmail.com", 7979]);
    //  $users = DB::insert("insert into users (name, email, password) values (?, ?, ?)", [ 'Blessing', "blesso@coldmail.com", 2020]);

    //updating data
    // $users = DB::update("update users set email = blezzo@coldmail.com where id= 3");
    // $users = DB::update("update users set email = ? where id= ?", ["blezzo@coldmail.com", 3]);
    // dd($users);

    //=========using laravel query builder
    //getting data
    // $users = DB::table('users')->get();
    // $users = DB::table('users')->where('id', [1,2])->get();
    
    //inserting data in DB
    // $users = DB::table('users')->insert([
    //     'name' => "Dax",
    //     'email' => 'dax@coldmail.com',
    //     'password' => 6060
    // ]);

    //updating data
    // $users = DB::table('users')->where('id', 1)->update(['email' => 'samuelldmj1@coldmail.com']);

    //=======using eloquent
    //search for a data
    // $users = User::where('id', 2)->first();
    // $users = User::find(8);

    //adding a data
    // $users = User::create([
    //     'name' => "Mazi",
    //     'email' => 'mazi@coldmail.com',
    //     'password' => 6060
    // ]);

    //updating a data 
    // $users = User::where('id', 6)->first();
    // // $users = User::find(6);
    // $users->update([
    //     'password' => 3030
    // ]);

    //deleting user
    // $users = User::find(6);
    // $users->delete();
  

    //getting all data
    // $users = User::get();
    // dd($users);


});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
