<div>
    <h1>Services</h1>
    <div class="row">
        @if ($services->isNotEmpty())
            @foreach ($services as $service)
                <div class="col-md-4">
                    <h4>{{ $service->project_name }}</h4>
                    <p>{{ $service->project_type }}</p>
                    <p>{{ $service->project_duration }}</p>
                    <p>{{ $service->short_desc }}</p>
                    <img src="{{ asset('storage/'.$service->banner_image ) }}" />
                </div>
            @endforeach
        @endif
    </div>
</div>