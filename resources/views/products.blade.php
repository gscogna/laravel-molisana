@extends('layout.app')

@section('title,sezione prodotti')

@section('content')
<div class="container">
    <div class="card-container">
        @foreach ($paste as $key => $pasta)
            <div class="card">
                <img src=" {{ $pasta ['src'] }} " alt="{{ $pasta ['titolo'] }}">
                <div class="overlay">
                    <a href=" {{ route('pagina-dettagli', ['id' => $key'] ) }} "> {{ $pasta['titolo'] }} </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection