@extends("layouts.layout")

@section("content")
  <style>
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
      border-radius: 8px;
    }

    h1 {
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      color: #333;
      margin-bottom: 16px;
    }

    p {
      text-align: center;
      font-size: 16px;
      color: #666;
      margin-bottom: 20px;
    }

    .image-container {
      text-align: center;
      margin-bottom: 40px;
    }

    .berita-img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      margin: 0 auto;
    }
  </style>

  <div class="container">
    <h1>{{ $berita->title }}</h1>

    @if ($berita->picture)
      <div class="image-container">
        <img class="berita-img" src="{{ asset("storage/" . $berita->picture) }}" alt="Picture">
      </div>
    @else
      <p style="text-align: center; font-style: italic; color: #888;">No Picture Available</p>
    @endif

    <p>{{ $berita->content }}</p>

    <div style="text-align: center;">
      <br><a class="btn back" href="/">Back to Home</a>
    </div>
  </div>
@endsection
