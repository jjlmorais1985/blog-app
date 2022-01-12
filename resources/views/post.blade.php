<!DOCTYPE html>
<html>
    <head>
        <title>Post</title>
        <link rel="stylesheet" href="/blog.css">
    </head>
    <body>
        <div>
        <article>
            <h1>{!! $post->title !!}</h1>
            <a href="#">{{ $post->category->name}}</a>
            <p>{{ $post->date }}</p>
            <div>
                {!! $post->body !!}
            </div>
            
        </article>
        <a href="/">Go Back</a>
        </div>
    </body>
</html>