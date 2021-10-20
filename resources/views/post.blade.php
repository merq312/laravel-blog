<!DOCTYPE html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">
<script src="/app.js"></script>

<body>
<article>
    <h1>{{ $post->title }}</h1>
    {!! $post->body !!}

    <div>
        {!! $post->body !!}
    </div>
</article>

<a href="/">Go Back</a>
</body>
