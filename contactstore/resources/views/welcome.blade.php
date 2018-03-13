<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="css/app.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
       <div class="container">
           <div id="app">
               <contacts></contacts>
           </div>
       </div>

    <script src="js/app.js">

    </script>
    </body>
</html>
