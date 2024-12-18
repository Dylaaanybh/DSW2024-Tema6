<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>app</title>
</head>
<body>
    <ul>
        @include('layouts.menu')
    </ul>
    <h1>@yield('title')</h1>

    <main>
        @section('content')
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint quis aspernatur porro ut, tempora laudantium esse est placeat cupiditate ea asperiores aliquam possimus illo at eos. Ea deleniti vero odio.</p>
        @show
    </main>
</body>
</html>