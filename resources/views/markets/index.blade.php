@extends('layouts.app')
@section('main')

<ul class="list-group flex">
  @foreach($markets as $market)

   <li class="list-group-item">
    
    <a href="{{ route('markets.show', $market) }}">

      {{ $market}}
      <h2>{{ $market->name }}</h2>
    <img src="img/farm.jpg" class="img">
    </a>
    

  </li>
  @endforeach
</ul>

 {!! $markets->render() !!}
@endsection