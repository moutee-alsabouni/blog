<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/mdb.dark.min.css">
    <link rel="stylesheet" href="css/mdb.dark.rtl.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/mdb.rtl.min.css">


  </head>

  <body>

  <x-navbar />
  <div class="container">
    @if (Session::get('post_created'))
    <div class="notification is-primary is-light">
      <button class="delete"></button>
      {{ Session::get('post_created') }}
    </div>
    @endif

    @if (Session::get('post_updated'))
    <div class="notification is-danger is-light">
      <button class="delete"></button>
      {{ Session::get('post_updated') }}
    </div>
    @endif

    @if (Session::get('tag_created'))
    <div class="notification is-danger is-light">
      <button class="delete"></button>
      {{ Session::get('tag_created') }}
    </div>
    @endif

    @if (Session::get('tag_updated'))
    <div class="notification is-danger is-light">
      <button class="delete"></button>
      {{ Session::get('tag_updated') }}
    </div>
    @endif

    @if (Session::get('category_created'))
    <div class="notification is-danger is-light">
      <button class="delete"></button>
      {{ Session::get('category_created') }}
    </div>
    @endif

    @if (Session::get('category_updated'))
    <div class="notification is-danger is-light">
      <button class="delete"></button>
      {{ Session::get('category_updated') }}
    </div>
    @endif

  </div>

  {{ $slot }}

  <x-footer />
  </body>
</html>
