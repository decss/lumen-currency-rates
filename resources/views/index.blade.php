<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Currencies REST service</h2>
    <a href="{{ route('currencies') }}">All currencies</a><br>
    <a href="{{ route('currency', ['id' => 11]) }}">USD</a><br>
    <a href="{{ route('currency', ['id' => 12]) }}">EUR</a><br><br>
    <a href="{{ route('update') }}" style="color:deeppink;">Update Currencies</a><br>
    <br>
    <pre>Run <b>php artisan currency:update</b> to reload rates</pre>
</body>
</html>

