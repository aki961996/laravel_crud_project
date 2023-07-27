<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <h1>demo</h1>
    <h1>my name is {{ $name }}</h1>
 {{-- if  --}}
 {{-- @if ($age>=34)
     <h1>my age is {{$age}}</h1>
 @else
     <h1>your note old</h1>

 @endif --}} 

{{-- forloop --}}
 {{-- @for ($i = $age; $i<=100 ; $i++)
     <h1>this number is {{ $i }}</h1>
 @endfor --}}

 {{-- forloop --}}
 @foreach($color as $value)
  <h1>this color is {{$value}}</h1>
  <h1>{{$loop->index}} - {{strtoupper($value)}}</h1>
 @endforeach

 {{-- $loop->index paranja ath loop ethre adikum enn manasilavum --}}
 {{-- laravel loop variable --}}

</body>
</html>