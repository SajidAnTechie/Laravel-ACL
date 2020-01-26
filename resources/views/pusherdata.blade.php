<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pusher</title>
</head>
<body>

    <form action="/pusherevent" method="post">
        @csrf
        <input type="text" id="ram" name="text" id="text">
        <button type="submit">Submit</button>

    </form>
</body>
</html>