<!DOCTYPE html>
<html>
  <head>
  @include('admin.css')
  <style>
    table{
        border: 1px solid skyblue; 
        margin:auto;
        width: auto;
    }
    th{
        color:#fff;
        font-weight:bold;
        font-size:15px;
        text-align:center;
        background-color:darkslategrey;
        padding: 10px;
    }
    td{
        color:#fff;
        font-weight:bold;
        text-align:center;
        font-size: 12px;
        padding:10px;
    }
    .button-container {
        display: flex;
        gap: 10px;
    }
  </style>
  </head>
 
  <body>
    @include('admin.header')
    @include('admin.sidebar')


      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
           <h2 style="text-align:center;margin-bottom:2rem;text-decoration:underline;">Order Details</h2>
           <div>
            <table>
                <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Dish Name</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Price</th>
                <th>Image</th>
                <th>Order Status</th>
                </tr>
                @foreach($data as $data)
                <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->quantity}}</td>
                <td>{{$data->delivery_status}}</td>
                <td>{{$data->price}}</td>
                <td><img width="140" height="80" src="food_img/{{$data->image}}" alt="{{$data->image}}"></td>
                <td>
                <div class="button-container">
                    <a href="{{url('on_way', $data->id)}}" class="btn btn-info"> On the Way </a>
                    <a href="{{url('deliver_order', $data->id)}}" class="btn btn-warning"> Delivered </a>
                    <a href="{{url('cancel_order', $data->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to cancel your order?');"> Cancel </a>
                </div>
                </td>   
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