@extends("cms.layouts.layout")

@section('content')
    <h1>Edit Berita</h1>
    <form action="/admin/berita/{{ $berita->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $berita->title }}" required>
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" required>{{ $berita->content }}</textarea>
        </div>
        <div>
            <label for="picture">Picture</label>
            <input type="file" name="picture" id="picture">
            @if($berita->picture)
                <img src="{{ asset('storage/' . $berita->picture) }}" alt="Current Picture" style="max-width: 100px;">
            @endif
        </div>
        <button type="submit">Update</button>
    </form>
    <a href="/admin/berita">Back to All Berita</a>
@endsection 