<form action="{{ route('markets.update', $farm)}}" method="post">
{{ method_field('patch')}}

@foreach($markets as $id => $market)
<div>
    <label for"{{ $market}}">
        <input type="checkbox" name="markets[]" value="{{ $id }}">
        {{ $market}}

        {{ $farm->markets()
        ->allRelatedIds()
        ->contains($id) ? "checked" : "" }}

    </label>
</div>
@endforeach
</form>