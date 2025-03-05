@extends("cms.layouts.layout")
<link href="{{ URL::asset("cms/berita/styleshow.css") }}" rel="stylesheet">

@section('content')
    <h1>{{ $berita->title }}</h1><br>
    <p class="description">{{ $berita->content }}</p><br><br>
    @if($berita->picture)
        <img src="{{ asset('storage/' . $berita->picture) }}" alt="Picture" style="max-width: 300px;">
    @else
        <p>No Picture</p>
    @endif
    <br><br><a class="btn" href="/admin/berita">Back to All Berita</a>
@endsection 