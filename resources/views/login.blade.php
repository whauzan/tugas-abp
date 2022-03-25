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
                <h1 class="text-center text-3xl font-extrabold text-[#ce6935]">User Login</h1>
                <form action="auth" method="POST" class="mt-8 space-y-6">
                    @csrf
                    <div class="rounded-md shadow-sm -space-y-px md:w-7/12 mx-auto">
                        <input type="text" name="user" placeholder="Username" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                        <input type="password" name="password" placeholder="Password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>
                    <button type="submit" class="relative flex mx-auto justify-center w-full md:w-7/12 py-2 px-4 border border-[#bb683f] text-sm font-medium rounded-md text-[#e6e0d4] bg-[#ce6935] hover:bg-[#b65f33] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#b65f33]">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>