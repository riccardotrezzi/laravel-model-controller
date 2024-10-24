@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1>
    Laravel Model Controller
</h1>

<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-12 col-sml-6 col-md-4 col-lg-2 card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">{{ $movie->id }}</p>
                    <h2 class="card-title">{{ $movie->title }}</h2>
                </div>
            </div>
        @endforeach  
    </div>

</div>

@endsection
