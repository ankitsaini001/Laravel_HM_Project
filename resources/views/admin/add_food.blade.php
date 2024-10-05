<!DOCTYPE html>
<html>
    <head>
    @include('admin.css')
    <style>
        label{
            display: inline-block;
            width: 200px;
            color: #fff;
        }
        .div_deg{
            padding: 10px;
        }
        form{
            border: #dbdbdb solid 1px;
        }
    </style>
    </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          <h1 style="text-align:center;"> Add Food Details </h1><br>
            <form action="{{url('upload_food')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="div_deg" style="margin-top:1rem;">
                <label for="">Food Title</label>
                <input type="text" name="title">
              </div>
              <div class="div_deg">
                <label for="">Food Description</label>
                <textarea name="details"  cols="50" rows="5"></textarea>
              </div>
              <div class="div_deg">
                <label for="">Price</label>
                <input type="text" name="price">
              </div>
              <div class="div_deg">
                <label for="">Image</label>
                <input type="file" name="image">
              </div>
              <div class="div_deg">
                <input type="submit" value="Add Food" class="btn btn-warning" style="font-weight: bold !important;">
              </div>
            </form>  
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
   @include('admin.js')
  </body>
</html>