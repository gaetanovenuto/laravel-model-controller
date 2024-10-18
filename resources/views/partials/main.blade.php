<main class="container">
    <table class="table">
        <thead>
            <th scope="col">
                ID
            </th>
            <th scope="col">
                Titolo
            </th>
            <th scope="col">
                Titolo originale
            </th>
            <th scope="col">
                Paese
            </th>
            <th scope="col">
                Data di uscita
            </th>
            <th scope="col">
                Voto
            </th>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <th scope="row">
                        {{ $movie->id }}
                    </th>
                    <td>
                        {{ $movie->title }}
                    </td>
                    <td>
                        {{ $movie->original_title }}
                    </td>
                    <td>
                        {{ $movie->nationality }}
                    </td>
                    <td>
                        {{ $movie->date }}
                    </td>
                    <td>
                        {{ $movie->vote }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</main>
