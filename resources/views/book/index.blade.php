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

    <h2>Új könyv hozzáadása</h2>
    <form method="post">
        @csrf
        Cím:
        <input type="text" name="name" id="">
        <br><br>
        Iró:
        <input type="text" name="author" id="">
        <br><br>
        Műfaj:
        <select name="genre_id" id="">
            @foreach ($genres as $genre)
                <option value="{{$genre->id}}">{{$genre->name}}</option>
            @endforeach
        </select>
        <br><br>
        Megjelent:
        <input type="text" name="published_at" id="">
        <br><br>
        <button type="submit">Létrehozás</button>
    </form>
</body>
</html>