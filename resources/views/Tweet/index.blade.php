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
    <div>
        <p>投稿フォーム</p>
        <form action="{{ route('create') }}" method='post'>
            @csrf
            <label for="tweet-content">つぶやき</label>
            <span>140文字まで</span>
            <textarea name="tweet" id="tweet-content" type="text" placeholder="つぶやきを入力"></textarea>
            <button  type="submit">投稿</button>
        </form>
        <!-- <p>{{$name}}</p>
        @foreach($tweets as $tweet)
            <p>{{ $tweet->id }}</p>
            <p>{{ $tweet->content }}</p>
        @endforeach -->
        @error('tweet')
        <p style="color:red;">{{ $message }}</p>
        @enderror
    </div>
</body>
</html>