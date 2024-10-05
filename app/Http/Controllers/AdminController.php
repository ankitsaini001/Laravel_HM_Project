<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

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
}
