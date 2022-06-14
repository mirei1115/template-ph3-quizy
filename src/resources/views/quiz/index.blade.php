<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>難読地名クイズ</title>
</head>
<body>
  <div>
    @foreach($choices[$id] as $choice)
    <h1>この地名はなんて読む？</h1>
    <ul>
      <li>{{ $choice[0] }}</li>
      <li>{{ $choice[1] }}</li>
      <li>{{ $choice[2] }}</li>
    <ul>
    @endforeach
  </div>
</body>
</html>