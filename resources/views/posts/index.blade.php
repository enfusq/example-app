<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All Posts</h1>
    <ul>
        @foreach($allPosts as $post) 
            <li>
                Title: {{ $post->title }} <br>
                Content: {{ $post->content }} <br>
            </li>
            <a href="/posts/{{ $post->id }}">View post</a>
        @endforeach
    </ul>
</body>
</html>