<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
@include('layouts.header')

{{$slot}}
<!-- Footer -->
@include('layouts.footer')

@include('layouts.script')
@yield('script')
</body>

</html>
