<html>
<head>
   <title>Hello/Index</title>
   <style>
   body {font-size:16pt; color:#999; }
   h1 { font-size:50pt; text-align:right; color:#f6f6f6;
       margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
   </style>
</head>
<body>
   <h1>Blade/Index</h1>
    <!-- msg定義されてないとコメントアウトでもエラー -->
    <!-- @if ($msg != '')
   @isset ($msg)
   <p>こんにちは、{{$msg}}さん。</p>
   @else
   <p>何か書いて下さい。</p>
   @endif
   @endisset
   <form method="POST" action="/hello">
       @csrf
       <input type="text" name="msg">
       <input type="submit">
   </form> -->

   <p>&#064;foreachディレクティブの例</p>
   <ol>
   @foreach($data as $item)
   @if ($loop->first)
   <p>※データ一覧</p><ul>
   @endif
   <li>No,{{$loop->iteration}}. {{$item}}</li>
   @if ($loop->last)
   </ul><p>――ここまで</p>
   @endif
   @endforeach
   </ol>
   <!-- <ol>
   @for ($i = 1;$i < 100;$i++)
   @if ($i % 2 == 1)
       @continue
   @elseif ($i <= 10)
   <li>No, {{$i}}
   @else
       @break
   @endif
   @endfor
   </ol> -->
</body>
</html>