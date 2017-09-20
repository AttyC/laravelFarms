
@extends('layouts.app')
@section('main')


      {{ $market}}
<?php 
    var_dump(isset($market->name)); 

echo $market; ?>


<h1>{{$market->name}}</h1>

<ul class="list-group">
    <li class="list-group-item">Location City: {{ $market->city }}</li>
    <li class="list-group-item">Website: {{$market->website}}</li>
</ul>



@endsection