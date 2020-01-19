@extends('layouts.app')

@section('content')
<div class="container">
    
<p>{{ $post->title}}</p>
<p>{{ $post->description }}</p>
<p><b>Autor: {{ $post->user->name }}</b>
    
</div>
@endsection