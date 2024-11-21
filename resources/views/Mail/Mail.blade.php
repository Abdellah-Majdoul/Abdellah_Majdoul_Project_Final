<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Hello,</p>
    <a href="{{ route('accept', ['id' => $invitation->id]) }}">Accept Invitation</a>
    <a href="{{ route('rejected', ['id' => $invitation->id]) }}">rejected Invitation</a>
    
</body>
</html>