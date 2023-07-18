<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Intro</title>
</head>
<body>
    <header>
        <h1>{{$intro}}</h1>

        <nav>
            <ul>
                <li>
                    <a href="{{ route('about-us') }}">About us</a>
                </li>
                <li>
                    <a href="{{ route('discover') }}">Discover</a>
                </li>
                <li>
                    <a href="{{ route('support') }}">Support</a>
                </li>
            </ul>
        </nav>
    </header>

</body>
</html>