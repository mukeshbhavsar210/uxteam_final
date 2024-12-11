<div>
    <h1>Blog</h1>

    <ul class="list-unstyled widget-list">		
        @if ($categories->isNotEmpty())
            @foreach ($categories as $category)
                <li><a wire:navigate href="{{ route('blog').'?categorySlug='.$category->slug }}">{{ $category->name }} <small class="ml-auto"></small></a></li>
            @endforeach
        @endif	
    </ul>

    <div class="row">
        @if ($articles->isNotEmpty())
            @foreach ($articles as $article)
                <div class="col-md-4">
                    <a wire:navigate href="{{ route('blogDetail',$article->id) }}">
                    <img src="{{ asset('storage/'.$article->image )}}" />
                    {{ \Carbon\Carbon::parse($article->created_at)->format('d M, Y') }}
                    <p>{{ $article->title }}</p>      
                    <p>
                        <img style="width: 100px; border-radius:100px" src="{{ asset('storage/'.$article->author_photo )}}" />
                        {{ $article->author_name }}
                    </p>
                </a>
                </div>                
            @endforeach
        @endif
    </div>
</div>
