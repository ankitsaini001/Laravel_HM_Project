<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    // Create a user_index method
    public function user_index(){
        return view('home.user_index');
    }
    // Create a index method
    public function index(){

        if(Auth::id()){
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                return view('home.user_index');
            }else {
                return view('admin.index');
            }
        }

    }
}
