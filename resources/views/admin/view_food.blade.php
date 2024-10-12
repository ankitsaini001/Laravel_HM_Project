<!DOCTYPE html>
<html>
  <head>
  @include('admin.css')
  <style>
    table{
        border: 1px solid skyblue;
        margin: auto;
        width: 800px;
    }
    th{
     background: skyblue;
     padding: 10px;
     margin: 10px;
     color: white;
     font-weight: bold;
    }
    td{
        color:#fff;
        padding: 10px;
    }
  </style>
  </head>
 
  <body>
    @include('admin.header')
    @include('admin.sidebar')


      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
           <div>
            <h1 style="text-align: center;">Food Details</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Food Title</th>
                    <th>details</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                @foreach($data as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->details}}</td>
                    <td>{{$data->price}}</td>
                    <td><img src="food_img/{{$data->image}}" alt="pizza" width="100" ></td>
                    <td><a class="btn btn-danger" href="{{url('delete_food', $data->id)}}" onclick="return confirm('Are you sure to delete this?')">Delete</a></td>
                    <td><a class="btn btn-warning" href="{{url('update_food', $data->id)}}">Update</a></td>
                </tr>
                @endforeach
            </table>
           </div> 
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
   @include('admin.js')
  </body>
</html>