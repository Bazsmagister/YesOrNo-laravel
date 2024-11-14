@extends('layouts.app')

@section('content')
    <h3>
        It was a {{ $answer }} !
    </h3>

    <img src="{{ $yesnoimage }}" alt="">
@endsection
