<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.css">
        <link rel="stylesheet" href="../css/app.css">
    </head>
    <body>
      <div id="app" class="container">
          @yield('content')



      </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="../js/app.js"></script>
    </body>
</html>
