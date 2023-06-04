@extends('layouts.app')

@section('content')
    <h1><a href="{{route('obre.edit', $obre->id)}}">{{$obre->obre_payee}}</a></h1>

@endsection