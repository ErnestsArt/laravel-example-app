<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Post</h1>
    <form action="/posts" method="post">
        @csrf

        <label for="author">Author: </label>
        <input type="text" name="author" id="author"> <br>

        <label for="titel">Titel: </label>
        <input type="text" name="title" id="titel"><br>

        <label for="content">Content: </label>
        <textarea name="contest" id="content"></textarea>

        <input type="submit" value="save">
        
        </form>
</body>
</html>