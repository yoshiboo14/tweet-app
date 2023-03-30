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
        <a href="{{ route('index')}}">戻る</a>
        <p>編集画面</p>
        <form action="{{ route('update',['id' => $tweet->id ]) }}" method='post'>
            @csrf
            <label for="tweet-content">つぶやき</label>
            <span>140文字まで</span>
            <textarea name="tweet" id="tweet-content" type="text" placeholder="つぶやきを入力">{{ $tweet->content }}</textarea>
            <button  type="submit">編集</button>
        </form>
        @error('tweet')
        <p style="color:red;">{{ $message }}</p>
        @enderror

        <form action="{{ route('destroy', ['id' => $tweet->id ]) }}" method='post'>
            @csrf
            <button type="submit" >削除</button>
        </form>

    </div>
</body>
</html>