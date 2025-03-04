@extends("cms.layouts.layout")

@section('content')
    <h1>All Berita</h1>
    <a href="/admin/berita/create">Create New Berita</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Picture</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($beritas as $berita)
                <tr>
                    <td>
                        <a href="/admin/beritashow/{{ $berita->id }}">{{ $berita->title }}</a>
                    </td>
                    <td>{{ Str::limit($berita->content, 50) }}</td>
                    <td>
                        @if($berita->picture)
                            <img src="{{ asset('storage/' . $berita->picture) }}" alt="Picture" style="max-width: 100px;">
                        @else
                            No Picture
                        @endif
                    </td>
                    <td>
                        <a href="/admin/beritaedit/{{ $berita->id }}/edit">Edit</a>
                        <form action="/admin/beritadelete/{{ $berita->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection