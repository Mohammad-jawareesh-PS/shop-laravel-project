<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/" method="post" enctype="multipart/form-data">
    @csrf
    <h1>price</h1>
    <input type="number" name="price">
    <br>
    <br>
    <h1>type</h1>
    <input type="text" name="type">
    <br>
    <br>
    <h1>image</h1>
    <input type="file" name="image">
    <br>
    <br>
    <br>
    <input type="submit" value="submit">

</form>
</body>
</html>
