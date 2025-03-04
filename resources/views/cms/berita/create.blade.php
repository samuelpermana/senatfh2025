@extends("cms.layouts.layout")

@section('content')
    <h1>Create Berita</h1>
    <form action="/admin/beritastore" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" required></textarea>
        </div>
        <div>
            <label for="picture">Picture</label>
            <input type="file" name="picture" id="picture">
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection 