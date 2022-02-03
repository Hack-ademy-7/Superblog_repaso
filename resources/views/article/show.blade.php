@extends('layouts.app')
@section('content')
<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-4">
            <h1>Detalle de un artículo</h1>
        </div>
        <div class="col-12 col-md-6 offset-md-4 mt-5 ">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $article->nombre }}</h5>
                  <h5 class="card-title">{{ $article->precio }}</h5>
                  <p class="card-text">{{ $article->descripcion }}</p>
                  <a href="" class="btn btn-primary">Borrar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection