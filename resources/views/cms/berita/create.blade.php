@extends("cms.layouts.layout")
<link href="{{ URL::asset("cms/berita/stylecreate.css") }}" rel="stylesheet">

@section("content")
  <h1>Create Berita</h1>
  <form action="/admin/beritastore" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
      <label for="title">Title</label><br>
      <input id="title" name="title" type="text" required>
    </div>
    <div>
      <label for="content">Content</label><br>
      <textarea id="content" name="content" required></textarea>
    </div>
    <div>
      <label for="picture">Picture</label><br>
      <input id="picture" name="picture" type="file">
    </div>
    <button class="btn" type="submit">Submit</button>
  </form>
  <br><a class="btn" href="/admin/berita">Back to All Berita</a>
@endsection
