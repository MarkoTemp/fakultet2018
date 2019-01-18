@extends('adminlte::page')

@section('title', 'Mobitel detalji')
    
@section('content_header')
    <h1>Trgovine</h1>
@stop
@section('content')
    <p>Detalji trgovine:</p>
    <h3>Hello, {{ $trgovine->name }}.</h3>
    
    Država: <span style="font-weight: bold; color: #e3342f">{{ $trgovine->drzava }} </span><br>
    Lista mobitela:
    <ol>
    @foreach ($mobovi as $m)
        <li><a href='{{url("/mobitels/{$m->id}")}}'> {{$m->producer}}, {{$m->model}}</a> 
        <i class="fa fa-mobile" aria-hidden="true"></i>
        </li>
     @endforeach
    </ol>
    
    <br><br><br>
    @component('components.datatable2',['data'=>$mobovi])
    @endcomponent
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


