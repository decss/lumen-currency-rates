<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Currencies REST service</h2>
    <a href="{{ route('currencies') }}">All currencies</a><br>
    <a href="{{ route('currency', ['id' => 11]) }}">USD</a><br>
    <a href="{{ route('currency', ['id' => 12]) }}">EUR</a><br>
    <br>
    <div>Run <b>php artisan currency:update</b> to reload rates</div>
</body>
</html>

