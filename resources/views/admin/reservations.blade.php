<!DOCTYPE html>
<html>
  <head>
  @include('admin.css')
  <style>
    table{
        border: 1px solid skyblue;
        margin: auto;
        width: 1000px;
    }
    th{
        background-color: skyblue;
        padding: 20px;
        text-align:center;
        color: #fff;
        font-weight: bold;
        font-size: 15px;
    }
    td{
        padding: 20px;
        text-align:center;
        color: #fff;
        font-weight: bold;
        font-size: 15px;
    }
  </style>
  </head>
 
  <body>
    @include('admin.header')
    @include('admin.sidebar')


      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
           <div class="reservation_table">
            <h2 style="text-align:center;margin-bottom:3rem; text-decoration:underline;">Reservations</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Phone</th>
                    <th>Guest</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>
                @foreach($data as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->guest}}</td>
                    <td>{{$data->date}}</td>
                    <td>{{$data->time}}</td>
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