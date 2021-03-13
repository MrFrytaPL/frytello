 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- ... --->
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <title>Frytoblog || Blog using Laravel, Vue, Tailwind & GraphQL - Amazing!</title>
   <script src="{{ mix('js/app.js') }}" defer></script>
  </head>
  <body>
    <div id="app"></div>
  </body>
  </html>
