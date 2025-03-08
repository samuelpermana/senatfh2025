@extends("cms.layouts.layout")
<link href="{{ URL::asset("cms/berita/styleedit.css") }}" rel="stylesheet">

@section('content')
    <h1>Edit Berita</h1>
    <form action="/admin/berita/{{ $berita->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label><br>
            <input type="text" name="title" id="title" value="{{ $berita->title }}" required>
        </div>
        <div>
            <label for="content">Content</label><br>
            <textarea name="content" id="content" required>{{ $berita->content }}</textarea>
        </div>
        <div>
            <label for="picture">Picture</label><br>
            <input type="file" name="picture" id="picture"><br><br>
            @if($berita->picture)
                <img src="{{ asset('storage/' . $berita->picture) }}" alt="Current Picture" style="max-width: 100px;">
            @endif
        </div>
        <br><button class="btn" type="submit">Update</button>
    </form>
    <br><a class="btn" href="/admin/berita">Back to All Berita</a>
@endsection 