@extends('layouts.app')

@section('content')
    <h2>Note #{{ $note->id }}</h2>
    <p>Title: {{ $note->title }}</p>
    <p>Content: {{ $note->description }}</p>
@endsection
