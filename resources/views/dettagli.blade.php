@extends('layout.app')

@section('title',$formato['titolo'].'pasta Molisana')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
@endsection

@section('content')
    <div class="container">
        <h1> {{ $formato['titolo'] }} </h1>
    </div>
    <div class="scheda-prodotto">
        <img src=" {{ $formato ['src-h'] }} " alt="pasta Molisana">
        <img src="{{ $formato ['src-p'] }} " alt="pasta Molisana">
    </div>
    <div class="descrizione">
        <div class="container">
            {!! $formato['descrizione'] !!}
        </div>
        <div class="info">
            <div class="box-info">
                <i class="fas fa-info"></i>
                <p>{!! $formato['tipo'] !!}</p>
            </div>
                <i class="far fa-clock"></i>
                <p>{!! $formato['cottura'] !!}</p>
            </div>
                <i class="fas fa-weight"></i>
                <p>{!! $formato['peso'] !!}</p>
            </div>
        </div>
    </div>

@endsection