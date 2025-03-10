@extends("layouts.layout")
@section('content')
<link href="{{ asset('styleshow.css') }}" rel="stylesheet">

<section class="news-header">
    <h1 class="news-title">{{ $berita->title }}</h1>
</section>

<div class="news-container">

    <section class="news-body">
        @if($berita->picture)
            <div class="news-image-container">
                <img class="news-image" src="{{ asset('storage/' . $berita->picture) }}" alt="Picture">
            </div>
        @else
            <p class="no-picture">No Picture</p>
        @endif
        <p class="news-content">{{ $berita->content }}</p>
    </section>

    <section class="news-footer">
        <a href="/" class="return-link">Back to Home</a>
    </section>
</div>

@endsection 