<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ url('/submit') }}" method="post">
    @csrf <!-- CSRF保護 -->
    名前：<input type="text" name="message">
    <br>
    <input type="submit" value="ゲーム開始">
</form>
</body>
</html>