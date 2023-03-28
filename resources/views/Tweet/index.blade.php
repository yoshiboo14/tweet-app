<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>つぶやきアプリ</title>
</head>
<body>
    <h1>つぶやきアプリ</h1>
    <p>{{$name}}</p>
    @foreach($tweets as $tweet)
        <p>{{ $tweet->id }}</p>
        <p>{{ $tweet->content }}</p>
    @endforeach
</body>
</html>