@extends("layouts.layout")
@section("content")
  <link href="{{ asset("styleshow.css") }}" rel="stylesheet">

  <section class="news-header">
    <h1 class="news-title">{{ $berita->title }}</h1>
  </section>

  <div class="news-container">

    <section class="news-body">
      @if ($berita->picture)
        <div class="news-image-container">
          <img class="news-image" src="{{ asset("storage/" . $berita->picture) }}" alt="Picture">
        </div>
      @else
        <p class="no-picture">No Picture</p>
      @endif
      <p class="news-content">{{ $berita->content }}</p>
    </section>

    <section class="news-footer">
      <a class="return-link" href="/">Back to Home</a>
    </section>
  </div>
  <section>
    <div class="container1">
      <h1>BERITA TERKAIT</h1>
      <div class="border-b-2"></div>
      <div class="grid">
        @foreach (App\Models\Berita::latest()->take(3)->get() as $berita)
          <div class="card">
            <img src="{{ asset("storage/" . $berita->picture) }}" alt="Picture" style="max-width: 600px; height: auto;">
            <div class="content">
              <h2><a href="/beritapublic/{{ $berita->id }}" style="color:black">{{ $berita->title }}</a></h2>
              <p><i class="fas fa-calendar-alt"></i> {{ $berita->created_at->format("d F Y") }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <div class="btn-wrapper">
    <a class="btn1" href="{{ url("/beritamore") }}">More Berita</a>
  </div>
@endsection
