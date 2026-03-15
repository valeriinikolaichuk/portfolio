<!DOCTYPE html>
<html>
<head>
    <title>My Portfolio</title>

    <style>
        body{
            font-family: Arial;
            background:#f4f4f4;
            margin:0;
            padding:40px;
        }

        h1{
            text-align:center;
        }

        .projects{
            display:grid;
            grid-template-columns: repeat(3,1fr);
            gap:20px;
            margin-top:40px;
        }

        .card{
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        }

        .card h3{
            margin-top:0;
        }

        .btn{
            display:inline-block;
            margin-top:10px;
            padding:8px 14px;
            background:#3490dc;
            color:white;
            text-decoration:none;
            border-radius:6px;
        }
    </style>

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