<?php use App\Models\Video; ?>

<div class="outer-wrap inverse-wrapper">
    {{-- {{dd($video)}} --}}
    @foreach (Video::all() as $item)
        <div id="video-wrap" class="video-wrap">
            <video preload="metadata" playsinline autoplay muted loop id="video-office">
                <source src="{{ URL::asset('storage/' . $item->video) }}" type="video/mp4">
                <source src="style/video/office.webm" type="video/webm">
            </video>
            <div class="content-overlay container">
                <div class="headline text-center">
                    <h2>{{ $item->clarge }}</h2>
                    <p class="lead"> {{ $item->cmedium }} </p>
                </div>
            </div>
            <!-- /.container -->
        </div>
    @endforeach
    <!-- /.video-wrap -->
</div>
