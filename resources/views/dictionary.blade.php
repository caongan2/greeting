<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary</title>
</head>
<body>
<form action="/dictionary" method="post">
    @csrf
    <h1>Dictionary</h1>
    <p><input type="text" name="search" placeholder="search"></p>
    <p><input type="submit" value="Search"></p>
</form>
</body>
</html>
