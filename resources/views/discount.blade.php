<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount</title>
</head>
<body>
<h1>Product Discount</h1>
<form action="/discount" method="post">
    @csrf
    <p>
        <input type="text" name="product" placeholder="Product">
    </p>
    <p>
        <input type="number" name="listPrice" placeholder="Price">
    </p>
    <p>
        <input type="number" name="percent" placeholder="Discount Percent">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>
</body>
</html>
