<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    // Create a user_index method
    public function user_index(){
        $data = Food::all();
        return view('home.user_index',compact('data'));
    }
    // Create a index method
    public function index(){

        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            $data = Food::all();
            if ($usertype == 'user') {
                return view('home.user_index', compact('data'));
            }else {
                return view('admin.index');
            }
        }

    }

    public function add_cart(Request $request, $id){
        if(Auth::id()){
            $food = Food::find($id);
            $cart_title = $food->title;
            $cart_details = $food->details;
            $cart_image = $food->image;
            $cart_price = Str::remove('$',$food->price);

            $data = new Cart;
            $data->title =  $cart_title;
            $data->details =  $cart_details;
            $data->image =  $cart_image;
            $data->price =  $cart_price * $request->qty;
            $data->quantity = $request->qty;
            $data->userid = Auth()->user()->id;
            $data->save();

            return redirect()->back();

        }else{
            return redirect('login');
        }
    }
}
