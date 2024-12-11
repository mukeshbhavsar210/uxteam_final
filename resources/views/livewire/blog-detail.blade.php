<div>
    <p>{{ $articles->category_name }}</p>
    {{ \Carbon\Carbon::parse($articles->created_at)->format('d M, Y') }}
    <h1>{{ $articles->title }}</h1>
    <img style="width: 100px; border-radius:100px" src="{{ asset('storage/'.$articles->author_photo )}}" />
    {{ $articles->author_name }}
    <p>{!! $articles->description !!}</p>
</div>
