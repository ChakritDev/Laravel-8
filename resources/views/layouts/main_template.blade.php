<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes/head')
</head>
<body>
    @include('includes/menu')
    <div style="padding-top: 100px">
        @yield('content')
    </div>
    @include('includes/foot')
</body>
</html>