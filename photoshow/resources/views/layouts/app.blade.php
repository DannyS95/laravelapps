 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Acme</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-float.min.css">
</head>

<body>
    @include('inc.topbar')
    <br>
    <div class="row">
        @include('inc.messages')
        @yield('content')
    </div>
</body>

</html>