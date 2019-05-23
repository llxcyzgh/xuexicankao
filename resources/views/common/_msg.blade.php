@foreach(['danger','success','info'] as $value)
    @if (session()->has($value))
        <div class="alert alert-{{ $value }}">
            {{ session()->get($value) }}
        </div>
    @endif
@endforeach

