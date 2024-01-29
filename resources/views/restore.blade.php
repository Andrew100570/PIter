

@endif @foreach ($articles as $article) @endforeach


{{ ++$i }}	{{ $article->text}}	 {{ date_format($article->deleted_at, 'jS M Y') }}

