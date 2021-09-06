<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ビューのテスト</title>
</head>
<body>
 
<h1>ビューのテスト</h1>
<h2>switch文</h2>
 
<p>
@switch($data)
    @case(1)
        最初のケース
        @break
    @case(2)
        2番目のケース
        @break
    @default
        デフォルトのケース
@endswitch
</p>
 
</body>
</html>