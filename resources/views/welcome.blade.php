<!DOCTYPE html>
<html>
<head>
    <title>BeeFlix</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <h1 class='Welcome'>HELLO</h1>
    
    <style>
        .Welcome{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: xx-large;
        }
        .movies{
            {{-- text-align: center;
            margin-top: 10%; --}}
            
        }
        .movielist{
             font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
             {{-- padding: 10%;
             margin: 10%; --}}
        }
    </style>
</head>
<body>
    
        @foreach($movies as $movie)
            <a href="/movies/{{$movie->id}}" class="text-dark">{{$movie->title}}</a>
            <br>
        @endforeach
        <hr>
        <br>
        @foreach ($genre as $gen)

            {{$gen->name}}
            <br>
            <ol>
                @foreach ($gen->movies as $genmovies)
                    <li><a href="/movies/{{$movie->id}}" class="text-dark">{{$movie->title}}</a></li>
                @endforeach
            </ol>
        @endforeach
        
</body>
</html>
