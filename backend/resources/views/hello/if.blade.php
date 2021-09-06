<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ビューのテスト</title>
</head>
<body>
 
<h1>ビューのテスト</h1>
<h2>if文</h2>
 
<p>
@if (count($data) === 1)
    1レコードあります
@elseif (count($data) > 1)
    複数レコードあります
@else
    レコードはありません
@endif
</p>
 
</body>
</html>