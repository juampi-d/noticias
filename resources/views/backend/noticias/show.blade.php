@extends('backend.layouts.main')
@section('titulo', 'Noticias')
@section('menu')
    @parent
    <li class="nav-item">
        <a class="nav-link" href="#">Nuevo</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Editar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Eliminar</a>
    </li>
@endsection
@section('content')
    <div class="card md-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                @if ($noticia->imagen)
                    @if (Str::startsWith($noticia->imagen, 'http'))
                        <img src="{{ $noticia->imagen }}" class="card-img-top" alt="...">
                    @else
                        <img src="{{ asset($noticia->imagen) }}" class="card-img-top" alt="...">
                    @endif
                @else
                    <img src="../img/no-image.png" alt="no image">
                    <hr>
                @endif
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $noticia->titulo }}</h5>
                    <p class="card-text">{!! $noticia->cuerpo !!}</p>
                    <p class="card-text"><small class="text-muted ">{{ $noticia->autor->name }}</small></p>
                </div>
            </div>
        </div>
    </div>
@endsection