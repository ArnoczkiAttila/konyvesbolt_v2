<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Cím</th>
                <th>Szerző</th>
                <th>Email</th>
                <th>Kölcsönzés dátuma</th>
                <th>Visszahozatal dátuma</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rents as $rent)
                <tr>
                    <td>{{$rent->book->name}}</td>
                    <td>{{$rent->book->author}}</td>
                    <td>{{$rent->email}}</td>
                    <td>{{$rent->rented_at}}</td>
                    <td>
                        <form method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$rent->id}}">
                            <input type="date" name="returned_at" id="" min="{{$rent->rented_at}}">
                            <button type="submit">Mentés</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>