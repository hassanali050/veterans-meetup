<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Veterans Meetup</title>
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-indigo-500 flex justify-between mb-6">
        <p>Veterans Meetup</p>
    </nav>
    @yield('content') 
</body>
</html>