<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard </title>
</head>
<body>
    <h1>
        {{$heading}}
    </h1>
    <br>
        @if(count($notes) == 0)
            <p> You don't have any notes yet...</p>
        @endif

        @foreach($notes as $note)
            <a href="/notes/{{$note['id']}}"> {{$note['title']}} </a>
            <p> {{$note['content']}} </p>
        @endforeach

</body>
</html>