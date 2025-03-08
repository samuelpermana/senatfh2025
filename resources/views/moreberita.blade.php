@extends("layouts.layout")

@section('content')
    <h1>All Berita</h1>
    <div class="news-container">
        @foreach($beritas as $berita)
            <div class="news-item">
                <h3><a href="/beritapublic/{{ $berita->id }}">{{ $berita->title }}</a></h3>
                <p>{{ Str::limit($berita->content, 100) }}</p>
                <p><i class="fas fa-calendar-alt"></i> {{ $berita->created_at->format('d F Y') }}</p>
                @if($berita->picture)
                    <img src="{{ asset('storage/' . $berita->picture) }}" alt="Picture" style="max-width: 100px;">
                @endif
            </div>
        @endforeach
    </div>
    <div class="pagination">
        {{ $beritas->links() }}
    </div>
@endsection 