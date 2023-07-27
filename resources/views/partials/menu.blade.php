<!DOCTYPE html>
<html>

<head>
    <!-- Your other head content here -->
    <script src=""></script>
</head>
<title>mine</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style type="text/css">
    .ba-none:before, .ba-none:after{
        content: none;
    }
</style>
<body>

    <!-- Sidebar -->
    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
        <h3 class="w3-bar-item">Menu</h3>
        <a href="{{route('home')}}" class="w3-bar-item w3-button">Home</a>
        {{-- <a href="{{route('users')}}" class="w3-bar-item w3-button">Users</a> --}}
        <a href="{{route('products')}}" class="w3-bar-item w3-button">Products</a>
        <a href="{{route('about')}}" class="w3-bar-item w3-button">About</a>
        <a href="{{route('contact')}}" class="w3-bar-item w3-button">Contact</a>
      
    </div>
