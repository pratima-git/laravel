<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
    <nav class="navbar navbar-dark  bg-dark text-primary">Studentss</nav>
    
</header>
    <a href="{{ route('student.create')}}" class="btn btn-primary"> Create </a>

    @yield('content')
   
</body>
</html>