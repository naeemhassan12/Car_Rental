
<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header')
    <title>@yield('title', 'Car Rental')</title>
</head>
<body>

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

</body>
</html>