<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Order;

class AdminController extends Controller
{
    public function add_food(){
        return view('admin.add_food');
    }

    public function upload_food(Request $request){
        $data = new Food;
        $data->title = $request->title;
        $data->details = $request->details;
        $data->price = $request->price;
        $image = $request->image;
        $filename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('food_img',$filename);
        $data->image = $filename;
        $data->save();
        return redirect()->back();
    }

    public function view_food(){
        //decalare a variable to get the data from database
        $data = Food::all();
        return view('admin.view_food', compact('data'));
    }

    public function delete_food($id) {
        $data = Food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_food($id) {
         $food = Food::find($id);
        return view('admin.update_food', compact('food'));
    }

    public function update_process(Request $request,$id){
        $data = Food::find($id);
        $data->title = $request->title; 
        $data->details = $request->details; 
        $data->price = $request->price; 
        $image = $request->image;
        if($image){
            $filename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('food_img',$filename);
            $data->image = $filename;
        }
        $data->save();
        return redirect('view_food');
    }

    public function order_details(){
        $data = Order::all();
        return view('admin.order_details', compact('data'));
    }

    public function on_way($id){
        $data = Order::find($id);
        $data->delivery_status = "Your Order is on the way!";

        $data->save();

        return redirect()->back();
    }

    public function deliver_order($id){
        $data = Order::find($id);
        $data->delivery_status = "Your Order has been Delivered!";

        $data->save();

        return redirect()->back();
    }

    public function cancel_order($id){
        $data = Order::find($id);
        $data->delivery_status = "Your Order is Cancelled.";

        $data->save();

        return redirect()->back();
    }
    
}
