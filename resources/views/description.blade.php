<!DOCTYPE html>
<html>
    <title>BeeFlix >> Movies</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
    <body>
        <style>
            body{
                background-color: rgb(207, 207, 207);
            }
            .title{
                 font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            .table{
                
                 font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                 margin left: 20%;
                 {{-- text align: center; --}}
                 background-color: rgb(61, 107, 16);
            }
            .judul{
                text-align: center;
            }
            .episodes{
                text-align: center;
            }
            .episode_div{
                float: center;
            }
            .checked {
                color: orange;
            }

        </style>
        <h1 class="title">{{$movie->title}}</h1>
        <p>{{$movie->description}}</p>
        <br>
        {{-- @foreach ($episode as $ep)
                {{$ep->title}}
        @endforeach --}}
        <div class="episode_div">
        <h1 class="judul_episode">Episodes</h1>
        <table class ="table">
            <tr class = "judul">
                <td>Episode</td>
                <td>Judul</td>
            </tr>
            @foreach ($episode as $ep)
                <tr class= "episodes">
                    <td>{{$ep->episodes}}</td>
                    <td>{{$ep->title}}</td>
                </tr>
            @endforeach
        </table>
        <div class="d-flex justify-content-center">
            {!! $episode->links() !!}
        </div>
        @for ($i = 0; $i < $movie->rating; $i++)
          <span class="fa fa-star checked"></span>
        @endfor
        

</nav>
        </div>
    </body>
</html>
