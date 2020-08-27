<html>
  <head>
    <title>Hello</title>
  </head>
  <body>
    <ol>
      @for ($i = 1;$i < 100;$i++)
      @if ($i % 2 == 1)
        @continue
      @elseif ($i <= 10)
      <li> {{$i}}</li>
      @else
        @break
      @endif
      @endfor
    </ol>
  </body>
</html>
