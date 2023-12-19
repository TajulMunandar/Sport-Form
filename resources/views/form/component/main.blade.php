<!DOCTYPE html>
<html lang="en">

<head>
    @include('form.component.head')
    <title>Sport</title>
</head>

<body style="background-color: #DDE6ED">
    @include('form.component.navbar')
    <div class="body-content">
        @yield('content')
    </div>

    @include('form.component.script')

    <script>
        @yield('script')
    </script>
</body>

</html>
