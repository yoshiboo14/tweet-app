<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>つぶやきアプリ</title>
    <style>
        .backButton{
            text-decoration: none;
        }
    </style>

</head>
<body>
    
    <h1>つぶやきアプリ</h1>
    <div>
        <button>
            <a class="backButton" href="{{ route('tweetIndex')}}">戻る</a>
        </button>
        <p>編集画面</p>
        <form action="{{ route('tweetUpdate',['id' => $tweet->id ]) }}" method='post'>
            @csrf
            <label for="tweet-content">つぶやき</label>
            <span>140文字まで</span>
            <textarea name="tweet" id="tweet-content" type="text" placeholder="書き直す">{{ $tweet->content }}</textarea>
            <button  type="submit">更新</button>
        </form>
        @error('tweet')
        <p style="color:red;">{{ $message }}</p>
        @enderror

        <form action="{{ route('tweetDestroy', ['id' => $tweet->id ]) }}" method='post'>
            @csrf
            <button type="submit" >削除</button>
        </form>

    </div>
</body>
</html>