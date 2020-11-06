@extends('layout')

@section('head')
    <div class="ml-3 mt-3">
        <h1 class="">Hello</h1>
    </div>    
@endsection

@section('content')
        <div class="">
            <h3>List of movies:</h3>
            <div class="d-flex">
                @foreach($movies as $movie)
                <div class="card mr-3" style="width: 18rem;">
                    <img src="test.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <a href="/movies/{{$movie->id}}" class="btn btn-primary ">Go to Details</a>
                    </div>
                </div>
                    <br>
                @endforeach
            </div>
        </div>
        
        <hr>
        <br>
        <div>
            <h3>Movies By Categories</h3>
            @foreach ($genre as $gen)
                <h5>{{$gen->name}}</h5>
                <div class="d-flex">
                @forelse ($gen->movies as $genmovies)
                    <div class="card mr-3" style="width: 10rem;">
                        <img src="test.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$genmovies->title}}</h5>
                            <a href="/movies/{{$genmovies->id}}" class="btn btn-primary ">Go to Details</a>
                        </div>
                    </div>

                @empty
                    <p>No Movies in this category</p>
                @endforelse
                </div>
            @endforeach
        </div>

        
</div>
       

@endsection
