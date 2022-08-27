<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>クイズ一覧</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/quizy.css') }}">
</head>
<body>
  <ul>
    @foreach($data as $d)
    <li class="prefecture_list">
      <a href="{{ route('quiz', ['id' => $loop->iteration]) }}">{{$d->name}}</a>
    </li>
    @endforeach
  </ul>
</body>
</html>