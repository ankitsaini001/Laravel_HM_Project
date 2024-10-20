<!DOCTYPE html>
<html lang="en">
<head>
@include('home.style')
<style>
    th{
        padding: 10px;
        text-align: center;
        background-color: #ff214f;
        color: #fff;
        font-size: bold;
    }
    td{
        padding: 10px;
        color: #fff;
    }
    label{
        display: inline=block;
        width: 100px;
    }
    .div_deg{
        padding:20px;
    }
</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
<!-- Navbar -->
<nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallary">Gallary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#book-table">Book-Table</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="assets/imgs/logo.svg" class="brand-img" alt="">
                <span class="brand-txt">Food Hut</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Blog<span class="sr-only">(current)</span></a>
                </li>
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('cart_items') }}">Cart</a>
                </li>
                @auth
                <form action="{{route('logout')}}" method="POST">
                @csrf
                    <input type="submit" class="btn btn-primary ml-xl-4" value="Logout">

                </form>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                @endauth
                @endif
            </ul>
        </div>
    </nav>
    <div id="gallary" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <h3 style="text-align:center;margin-top:10rem;">Cart</h3>
        <table style="margin:40px;border:1px solid skyblue;padding:40px;">
            <tr>
                <th>Image</th>
                <th>Food Title</th>
                <th>Quantity</th>
                <th>Price</th>
                <th></th>
            </tr>
            <?php 
            $total_price = 0;
            ?>
            @foreach($data as $data)
            <tr>
                <td>
                    <img src="food_img/{{$data->image}}" alt="{{$data->image}}" width="150">
                </td>
                <td>{{$data->title}}</td>
                <td>{{$data->quantity}}</td>
                <td>${{$data->price}}</td>
                <td><a href="{{url('remove_cart',$data->id)}}" rel="noopener noreferrer" onclick="return confirm('Are you sure to remove this product from cart?');">Remove</a></td>
            </tr>
            <?php
            $total_price = $total_price + $data->price;
            ?>
            @endforeach
        </table>
        <h4 style="margin-left:53rem;">Subtotal: ${{$total_price}}</h4>

    </div><br><br>

    <div class="billing_details" style="margin-left:5rem;">
        <h3 style="text-decoration:underline;">Billing Details</h3><br>
        <form action="{{url('confirm_order')}}" method="post">
            @csrf
            <div class="div_deg">
                <label for="name">Name: </label>
                <input type="text" name="name"  value="{{Auth()->user()->name}}" required>
            </div>
            <div class="div_deg">
                <label for="email">Email: </label>
                <input type="email" name="email" value="{{Auth()->user()->email}}" required>
            </div>
            <div class="div_deg">
                <label for="address">Address: </label>
                <textarea name="address" id="billing_address" cols="30" rows="3">{{Auth()->user()->address}}</textarea>
            </div>
            <div class="div_deg">
                <label for="phone">Phone: </label>
                <input type="text" name="phone" value="{{Auth()->user()->phone}}" required>
            </div>
            <div class="div_deg">
                <input type="submit" value="Confirm Order" class="btn btn-primary">
            </div>
        </form>

    </div>

</body>
</html>
