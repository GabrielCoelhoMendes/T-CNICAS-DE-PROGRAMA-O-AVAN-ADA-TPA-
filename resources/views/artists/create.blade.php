<form action="/artists" method="POST">
    @csrf

    <input type="text"
           name="name"
           placeholder="Nome do artista">

    <button type="submit">
        Salvar
    </button>
</form>