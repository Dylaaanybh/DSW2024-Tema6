@extends('layouts.app')

@section('title', 'Usuario')

@section('content')
@if ($client)
<h2>Un usuario</h2>
<p>{{$client['id']}}</p>
<h3>{{$client['name']}} - {{$client['surname']}}</h3>
@else
<h2>Usuario no encontrado</h2>
@endif
@endsection