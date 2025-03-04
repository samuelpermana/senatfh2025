@extends("cms.layouts.layout")

@section('content')
    <h1>{{ $berita->title }}</h1>
    <p>{{ $berita->content }}</p>
    @if($berita->picture)
        <img src="{{ asset('storage/' . $berita->picture) }}" alt="Picture" style="max-width: 300px;">
    @else
        <p>No Picture</p>
    @endif
    <a href="/admin/berita">Back to All Berita</a>
@endsection 