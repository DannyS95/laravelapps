<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TodoList</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    @include('inc.navbar')
    <div class="container">

        @yield('content')
    </div>

    <footer id="footer">
        <p>Copyright &copy; 2018 TodoList</p>
    </footer>
</body>

</html>