@extends('layout')

@section('content')
<article>
    <h1>{{ $post->title }}</h1>
    {!! $post->body !!}

    <div>
        {!! $post->body !!}
    </div>
</article>

<a href="/">Go Back</a>
@endsection
