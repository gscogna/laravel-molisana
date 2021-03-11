@extends('layout.app')

@section('title,sezione prodotti')

@section('content')
<div class="container">
    @foreach ($paste as $index => $pasta)
        <h2> {{ $index }} </h2>
        <div class="card-container">
            @foreach ($pasta as $key => $item)
                <div class="card">
                    <img src=" {{ $item ['src'] }} " alt="{{ $item ['titolo'] }}">
                    <div class="overlay">
                        <a href=" {{ route('pagina-dettagli', ['id' => $key] ) }} "> {{ $item['titolo'] }} </a>
                    </div>
                </div>
            @endforeach

        </div>
    @endforeach
</div>

@endsection