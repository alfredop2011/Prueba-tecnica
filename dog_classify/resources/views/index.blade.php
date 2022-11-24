<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel & VueJS CRUD</title>

    <link rel="stylesheet" href="{{ asset('sass/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('sasss/app.css') }}">
</head>
<body>
    <div class="container mrg-2em" id="app">
        <example></example>
    </div>

    <script>
        window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>