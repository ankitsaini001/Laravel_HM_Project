<!DOCTYPE html>
<html>
  <head>
    <base href="/public">
  @include('admin.css')
  <style>
    .div_deg{
        padding:10px;
    }
    label{
        display: inline-block;
        width: 200px;
        padding-left: 1.5rem;
    }
    form{
            border: #dbdbdb solid 1px;
            padding-top:1.5rem;
            padding-bottom: 1.5rem;
        }
  </style>
  </head>
 
  <body>
    @include('admin.header')
    @include('admin.sidebar')


      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1 style="text-align:center; color:#fff;">Edit Details</h1>
            
                <form action="{{url('update_process',$food->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div clas="div_deg">
                        <label for="">Food Title</label>
                        <input type="text" name="title" value='{{$food->title}}' >
                    </div><br>
                    <div clas="div_deg">
                        <label for="">Details</label>
                       <textarea name="details" id="food_details" cols="50" rows="5"> {{$food->details}}</textarea>
                    </div><br>
                    <div clas="div_deg">
                        <label for="">Price</label>
                        <input type="text" name="price" value='{{$food->price}}'>
                    </div><br>
                    <div clas="div_deg">
                        <label for="">Change Image</label>
                        <input type="file" name="image">
                    </div><br>
                    <div clas="div_deg">
                        <label for="">Current Image</label>
                        <img src="food_img/{{$food->image}}" alt="food" width="100">
                    </div><br>
                    <div clas="div_deg">
                        <input class="btn btn-warning" type="submit" value="Update Food">
                    </div>


                </form>
            
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
   @include('admin.js')
  </body>
</html>