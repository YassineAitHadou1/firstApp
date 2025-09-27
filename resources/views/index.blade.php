<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.master');
    @section('main');
    <h1>welcome {{$name}} {{$surname}} to our page</h1>
    @unless(count($languages)>0)
    <p>aucune cours</p>
    @else 
    <H3>languages</H3>
    <ul>
        @foreach ($languages as $language)
            <li>{{$language}}</li><br>
        @endforeach
    </ul>
    @endunless
    @endsection
</body>
</html>