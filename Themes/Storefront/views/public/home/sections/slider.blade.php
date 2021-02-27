@foreach ($slider->slides as $slide)
    @if($loop->iteration == 1)
        <div class="carousel-item active">
            <img src="{{ $slide->file->path }}" width="1100" height="500">
        </div>
    @else
        <div class="carousel-item">
            <img src="{{ $slide->file->path }}" width="1100" height="500">
        </div>
    @endif
@endforeach

