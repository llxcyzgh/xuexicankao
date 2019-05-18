<!doctype html>
<html lang="en">
@include('layouts.header')
<body>
@include('layouts.nav')
<div class="container _content">
    @yield('content')
</div>
@include('layouts.footer')

@yield('script')
</body>
</html>
