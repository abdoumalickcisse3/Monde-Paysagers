<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('cssfiles/style.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @include('Navbar')
        <div class="mt-5">
            @yield('content')
        </div>
    </div>

    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="{{ asset('/jsfiles/navbar.js') }}"></script>
</body>
</html>