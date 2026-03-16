<!DOCTYPE html>
<html>
<head>
    <title>My Portfolio</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <h1>My Portfolio</h1>
    <div class="projects">

        @foreach($projects as $project)
        <div class="card">
            <h3>{{ $project['title'] }}</h3>
            <p>{{ $project['description'] }}</p>

            <a class="btn" href="{{ $project['link'] }}">
                View Project
            </a>
        </div>
        @endforeach

    </div>
</body>
</html>