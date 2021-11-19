@props(['title'])
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <style>
      a{
        color:#ff914d
      }
      strong{
        color: #ff914d
      }
      .title{
        color: white
      }
      .content{
        color:white
      }
      #cont{
        color: black
      }
    </style>
  </head>

  <body style="background-color:#145867;color: white">

  {{ $slot }}

  <x-footer/>
  </body>
</html>
