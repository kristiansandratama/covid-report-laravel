<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Covid-19 Report</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-200">
    <nav class="flex justify-between p-6 mb-6 bg-white">
        <ul class="flex items-center">
            <li>
               <a href="{{ route('home') }}" class="p-3">Home</a> 
            </li>
            <li>
                <a href="#" class="p-3">Dashboard</a>
            </li>
        </ul>
        <ul class="flex items-center">
            <li>
                <a href="#" class="p-3">Name</a> 
             </li>
             <li>
                 <a href="#" class="p-3">Logout</a>
             </li>
             <li>
                <a href="#" class="p-3">Login</a>
            </li>
            <li>
                <a href="#" class="p-3">Register</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>