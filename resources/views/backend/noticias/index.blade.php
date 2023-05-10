@extends('backend.layouts.main')
@section('titulo', __('noticia.index'))
@section('content')
    <h3 class="card-title text-info my-3">Hay {{$noticias->count()}} noticias cargadas.</h3>
    @forelse ($noticias as $noticia)
        @if ($loop->index % 4 == 0)
            <div class="row">
        @endif
        <div class="col-md-3">
            <div class="card">
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
                <div class="card-body">
                    <h3 class="card-title text-info">{{ $noticia->titulo }}</h3>
                    <p class="card-text text-left">{{ $noticia->autor()->first()->name }}</p>
                    <p class="card-text">{!! $noticia->cuerpo !!}</p>
                    {{-- Comentario de blade --}}
                    <div class="card-footer">
                        <a href="{{ route('noticias.show', ['noticia' => $noticia]) }}"
                            class="btn btn-info offset-11">
                            <img src="{{ asset('svg/show.svg') }}" width="20" height="20">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @if ($loop->index % 4 == 3)
            </div>
            <br>
        @endif
    @empty
        <p class="text-capitalize"> No hay noticias</p>
    @endforelse
    </div>
    <hr>
@endsection
