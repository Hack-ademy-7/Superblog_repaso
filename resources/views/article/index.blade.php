@extends('layouts.app')
@section('content')
<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-4">
            <h1>Todos los artículos</h1>
        </div>
    @foreach ($articles as $article)
        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ Storage::url($article->imagen) }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $article->nombre }}</h5>
                  <h5 class="card-title">{{ $article->precio }}</h5>
                  <p class="card-text">{{ $article->descripcion }}</p>
                 {{-- foreach de los tags del article --}}
                  @foreach ($article->tags as $tag)
                  <a href="#">#{{ $tag->name }}</a>
                  @endforeach

                  <a href="#" class="d-block text-center">{{ $article->category->name  }}</a>
                  <a href="#" class="d-block text-center text-decoration-none text-dark">{{ $article->user->name  }}</a>
                  <a href="{{ route('article.show', ['id'=>$article->id] )}}" class="btn btn-primary d-block">Saber más</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
