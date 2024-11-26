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

    <h2>Könyv adatai</h2>
    <ul>
        <li>Cím: {{$book->name}}</li>
        <li>Szerző: {{$book->author}}</li>
        <li>Műfaj: {{$book->genre->name}}</li>
        <li>Kiadás dátuma: {{$book->published_at}}</li>
    </ul>
    <h2>Kölcsönzés adatai</h2>
    <form method="post">
        @csrf
        Email: 
        <input type="email" name="email" id="">
        <br><br>
        Kölcsönzés dátuma:
        <input type="date" name="rented_at" id="">
        <br><br>
        <button type="submit">Kölcsönzés</button>
    </form>
</body>
</html>
