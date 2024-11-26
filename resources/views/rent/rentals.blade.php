<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Szűrő</h2>
    <form method="get">
        Cím:
        <input type="text" name="book_name" id="">
        <br><br>
        Email:
        <input type="text" name="email" id="">
        <br><br>
        Műfaj:
        <input type="text" name="genre_name">
        <br><br>
        Kölcsönzés dátuma:
        <input type="date" name="rented_at" id="">
        <br><br>
        Visszahozás dátuma:
        <input type="date" name="returned_at" id="">
        <br><br>
        <button type="submit">Szűrés</button>
    </form>
    <h2>Kölcsönzések</h2>
    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Kölcsönzés dátuma</th>
                <th>Visszahozás dátuma</th>
                <th>Könyv cím</th>
                <th>Szerző</th>
                <th>Műfaj</th>
                <th>Megjelenés dátuma</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rents as $rent)
                <tr>
                    <td>{{$rent->email}}</td>
                    <td>{{$rent->rented_at}}</td>
                    <td>{{$rent->returned_at}}</td>
                    <td>{{$rent->book->name}}</td>
                    <td>{{$rent->book->author}}</td>
                    <td>{{$rent->book->genre->name}}</td>
                    <td>{{$rent->book->published_at}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
