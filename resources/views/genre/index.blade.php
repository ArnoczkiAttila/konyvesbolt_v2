<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <h2>Új műfaj létrehozása</h2>
    <form method="post">
        @csrf
        Műfaj megnevezése:
        <input type="text" name="name" id="">
        <br><br>
        <button type="submit">Létrehozás</button>
    </form>
</body>
</html>