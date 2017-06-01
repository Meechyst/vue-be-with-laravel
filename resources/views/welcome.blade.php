<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    </head>
    <body>
      <div id="app">
        <p> @{{message}}</p>
          <br>
        <h2>Our Users</h2>
        <ul>
          <li v-for="user in users">@{{user.name}}</li>
        </ul>


</div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.js"></script>
      <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
      <script src="../js/app.js"></script>
    </body>
</html>
