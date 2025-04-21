@extends("layouts.layout")

<link rel="stylesheet" href="{{ asset('moreberita.css') }}">

@section('content')
    <div class="container1">
        <h1>BERITA TERKAIT</h1>
        <div class="border-b-2"></div>
        <div class="grid">
            @foreach($beritas as $berita)
                <div class="card">
                    @if($berita->picture)
                        <img src="{{ asset('storage/' . $berita->picture) }}" alt="Picture">
                    @endif
                    <div class="content">
                        <h2>{{ strtoupper($berita->title) }}</h2>
                        <p><i class="fas fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($berita->created_at)->format('d F Y') }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination">
            {{ $beritas->links() }}
        </div>
    </div>
    <div class="btn-wrapper">
        <a class="btn1" href="{{ url('/beritapublic/5') }}">back to news</a>
      </div>
@endsection