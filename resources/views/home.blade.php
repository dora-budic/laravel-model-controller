@extends ('layouts.app')

@section('main')
  @foreach($movies as $movie)
  {{$movie}}
  @endforeach
@endsection
