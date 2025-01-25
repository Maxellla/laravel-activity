
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Example</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <ul>
        @foreach ($items as $item)
            <li>{{ $item->name }} - {{ $item->description }}</li>
        @endforeach
    </ul>
    <!-- Link to JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>