@extends('layout')

@section('head')

@endsection

@section('style')
    <style>
        body{
            
            }
    </style>
@endsection

@section('content')
    <div class="d-flex ">
        <div class="card">
            <img src="/test.jpg" class="" alt="..."style="width: 10rem;">
        </div>

        <div class="container mr-3 ml-3" style="width: 30rem;">
            <h2>{{$movie->title}}</h2>
            <div class="mt-3 mb-3">
                @for ($i = 0; $i < $movie->rating; $i++)
                    <span class="fa fa-star checked"></span>
                @endfor
            </div>
            <p>{{$movie->description}}</p>
            Kategori : {{$genre->name}}
        </div>
        <div class="container" style="width: 20rem;">
            <h2>Episodes</h2>
            <table class="table">
                <thead>
                    <tr>
                        <td>Episode</td>
                        <td>Title</td>
                    </tr>
                </thead>
                @foreach ($episode as $ep)
                <tr>
                    <td>{{$ep->episodes}}</td>
                    <td>{{$ep->title}}</td>
                </tr>
                @endforeach
            </table>
            <div class="">
                {{ $episode->links() }}
            </div>
            
        </div>

            
    </div>

            
            
@endsection
        
</html>
