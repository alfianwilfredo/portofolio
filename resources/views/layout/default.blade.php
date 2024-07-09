<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="flex flex-col">
    @include('includes.navbar')
    <div class="p-6">
        @yield('content')
    </div>
</body>

</html>