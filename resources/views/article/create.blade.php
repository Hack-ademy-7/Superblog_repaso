@extends('layouts.app')
@section('content')
<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
            <h1>Inserta un nuevo artículo</h1>
        </div>
        <div class="col-12 col-md-6 mx-auto">
            <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ old('nombre') }}"
                        name="nombre">
                    @error('nombre')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" value="{{ old('precio') }}"
                        name="precio">
                    @error('precio')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Imagen</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1"
                        name="imagen">
                    @error('imagen')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        name="descripcion">{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="form-label" class="form-label">Categorias</label>
                    <select class="form-control" id="categories" name="category_id">
                        @foreach($categories ?? '' as $category)
                        <option value="{{$category->id}}" {{old('category') == $category->id ? 'selected' : ''}}>
                            {{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                <select class="form-select" multiple aria-label="multiple select example" name="tags[]">
               @foreach ($tags as $tag)
               <option value="{{ $tag->id }}">{{ $tag->name }}</option>
               @endforeach
                  </select>
                </div>
                <button class="btn btn-success" type="submit"> Enviar</button>
            </form>
        </div>

    </div>
</div>
@endsection
