
@extends('layouts.app');
@section('main');

<h1>{{$market->name}}</h1>
<ul>
    <li>Location City: {{ $market->city }}</li>
    <li>Website: {{$market->website}}</li>
    <form action="{{ route('markets.store') }}" method="post">

        {{ csrf_field }}
        
        <label for="name">Market Name</label>
        <input type="text" name="name">
        <label for="city">City</label>
        <input type="text" name="city">
        <label for="website">Website</label>
        <input type="text" name="website">
        <button type="submit">Create</button>
    </form>
</ul>
@endsection