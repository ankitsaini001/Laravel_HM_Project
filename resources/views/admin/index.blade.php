<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Welcome Admin</h1>
    <form action="{{route('logout')}}" method = 'POST'>
        @csrf
        <input type="submit" value='logout'>
    </form>
</body>
</html> -->

<!-- We use any of these methods for the logout 
     Method 2 
-->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>