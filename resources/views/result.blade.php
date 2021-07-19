<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
</head>
<body>
@csrf
<p>Product: {{$product}}</p>
<p>List Price: {{$price}}</p>
<p>Discount Amount: {{$result}}</p>
<p>Need to pay: {{$pay}}</p>
</body>
</html>
