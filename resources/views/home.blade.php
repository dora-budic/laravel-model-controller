@extends ('layouts.app')

@section('main')
<div class="card-container">
  @foreach($movies as $movie)
  <div class="card">
    <h2>Title: {{$movie->title}}</h2>
    <h3>Original title: {{$movie->original_title}}</h3>
    <p>Nationality: {{$movie->nationality}}</p>
    <p>Date: {{$movie->date}}</p>
    <p>Vote: {{$movie->vote}}</p>
  </div>
  @endforeach
</div>
@endsection
