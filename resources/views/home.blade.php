@extends('app')
@section('content')

@foreach ($post as $post)
{{$post}}<br>
@endforeach

@endsection