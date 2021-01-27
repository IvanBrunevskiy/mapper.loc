@extends('layouts.app')
@section('content')
    @if($isActive)
        {{$massage1}}
    @else
        {{$massage2}}
    @endif
<h1>HELLO WORLD</h1>
@endsection
