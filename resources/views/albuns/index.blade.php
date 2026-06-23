@foreach ($albuns as $album)
<div class="disco-neon">
    <h3>{{ $album->nome }}</h3>
    <p>{{ $album->artista }}</p>
    <img src="{{ $album->url_imagem }}">
</div>
@endforeach