@extends('navbar')
@section('content')
@section('title')
    Home
@endsection


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield ('title','Navbar')</title>
    <style>
        #image {
            background-image: url(https://images.pexels.com/photos/305821/pexels-photo-305821.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
            height: 100vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }

        body,
        html {
            height: 100%;
        }
    </style>
</head>

<body>

    <div class="container-fluid  text-center" id="image">
        <div class="row">
            <div class="col" height="500px">
                <h1 style="font-family:Pacifico;font-size: 32px;">Laravel</h1>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
