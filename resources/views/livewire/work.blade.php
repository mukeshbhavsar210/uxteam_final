<div>
    <h1>Works</h1>

    @if ($works->isNotEmpty())
        @foreach ($works as $work)
            <h3>{{ $work->title }}</h3>
            <p>{{ $work->short_desc }}</p>
            <img src="{{ asset('storage/'.$work->image ) }}" style="width: 100px" />
        @endforeach
    @else
        <p>Data not found</p>
    @endif
</div>
