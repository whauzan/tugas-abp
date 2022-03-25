<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>TP 5 | {{ Route::currentRouteName() }}</title>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="bg-[#f1c7b2] rounded-lg shadow-2xl p-12">
            <div class="max-w-md md:w-screen space-y-4">
                <h1 class="text-center text-3xl font-extrabold text-[#ce6935]">Hello, {{ $user }}!</h1>
            </div>
        </div>
    </div>
</body>
</html>