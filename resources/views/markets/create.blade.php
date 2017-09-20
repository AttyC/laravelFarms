
@extends('layouts.app')
@section('main')

<h1>{{$market->name}}</h1>

    <form action="{{ route('markets.store') }}" method="post">

        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Market Name</label>
            <input type="text" name="name">
            <label for="city">City</label>
            <input type="text" name="city">
            <label for="website">Website</label>
            <input type="text" name="website">
            <button type="submit">Create</button>
        </div>
    </form>

@endsection