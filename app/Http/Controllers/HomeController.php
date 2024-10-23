<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Book;
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

    public function cart_items(){
        // get the user id
        $user_id = Auth()->user()->id;
        $data = Cart::where('userid', '=', $user_id)->get();
       return view('home.cart_items', compact('data'));  
    }

    public function remove_cart($id){
        $data = Cart::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function confirm_order(Request $request){
        $user_id = Auth()->user()->id;
        $cart = Cart::where('userid', '=', $user_id)->get();

        foreach ($cart as $cart) {
            $order = new Order;
            $order->name = $request->name;
            $order->email = $request->email;
            $order->address = $request->address;
            $order->phone = $request->phone;
            $order->quantity = $cart->quantity;
            $order->price = $cart->price;
            $order->image = $cart->image;
            $order->title = $cart->title;

            $order->save();

            $data = cart::find($cart->id);
            $data->delete();
        }

        return redirect()->back();

    }

    public function book_table(Request $request){
        $data = new Book;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->time = $request->time;
        $data->date = $request->date;

        $data->save();

        return redirect()->back();
    }
}
