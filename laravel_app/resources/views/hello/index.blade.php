<!DOCTYPE html>
<html lang="ja">
<head>
    <title>Index</title>
</head>
<body>
    <h1>Hello/Index</h1>
    <p>{{ $msg }}</p>
    <ul>
        @foreach($data as $itme)
            <li>{{ $itme }}</li>
        @endforeach
    </ul>
</body>
</html>