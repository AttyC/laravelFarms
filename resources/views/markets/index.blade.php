@extends('layouts.app')
@section('main')

<ul>
  @foreach($markets as $market)
  <li>
    <a href="{{ route('markets.show', $market) }}">
        {{ $market->name }}
        <?php
        echo 'current pphp version ' . phpversion();
        ?>

    </a>

  </li>
  @endforeach
</ul>

 {!! $markets->render() !!}
@endsection