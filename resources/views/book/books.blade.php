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

    <h2>Kölcsönözhető könyvek</h2>
    <table>
        <thead>
            <tr>
                <th>
                    Szerző
                </th>
                <th>
                    Cím
                </th>
                <th>
                    Kiadás éve
                </th>
                <th>
                    Kölcsönzés
                </th>
                <th>
                    Törlés
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{$book->author}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->published_at}}</td>
                    <td><button onclick="window.location.href='books/book/{{$book->id}}'">Kölcsönzés</button></td>
                    <td>
                        <form method="post" action="{{route('book.destroy')}}">
                            @csrf
                            <input type="hidden" name="id" value="{{$book->id}}">
                            <button type="submit">Törlés</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>