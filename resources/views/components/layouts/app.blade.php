<x-layouts.app.navbar :title="$title ?? null">
    {{ $slot }}
</x-layouts.app.navbar>

<!DOCTYPE html>
<html>
<head>
    <title>@yield('Library Feedback System')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>

@yield('content')

</body>
</html>