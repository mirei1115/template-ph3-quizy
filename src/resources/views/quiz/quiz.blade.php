<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>難読地名クイズ</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/quizy.css') }}">
</head>
<body>
  <div class="whole">
    <h1 class="prefecture_title">#{{ $prefecture->name }}</h1>
    @foreach($questions as $question)
      <h2 class="title">{{ $loop->index+1 }}.この地名はなんて読む？</h2>
      <img src="{{ asset('img/' . $question->img) }}" alt="">
      <ul>
        @foreach($question -> choices as $choice)
        <li class="choice_square">{{$choice -> name }}</li>
        @endforeach
        <li class="message">
          <span class="message_true">正解！</span><br>
          <span>正解は「」です</span>
        </li>
      <ul>
    @endforeach
  </div>
</body>
</html>