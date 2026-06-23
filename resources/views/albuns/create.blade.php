<form action="/albuns" method="POST">
    @csrf

    <input type="text"
           name="nome"
           placeholder="Nome da Track">

    <input type="text"
           name="album"
           placeholder="Nome do Álbum">

    <select name="artist_id">
        @foreach($artists as $artist)
            <option value="{{ $artist->id }}">
                {{ $artist->name }}
            </option>
        @endforeach
    </select>

    <button type="submit">
        Lançar Álbum
    </button>
</form>