@extends("layout")

@section("title", "Liste des articles")


@section("content")

    <h1>Liste des articles</h1>

        <div class="container mt-4">
            <div>
            <a class="mb-3" href="{{route("posts.create")}}">Créer un article</a>
            </div>
            @if(!$posts->isEmpty())
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-6">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <!--<strong class="d-inline-block mb-2 text-primary">World</strong>-->
                                <h3 class="mb-0">{{$post->title}}</h3>
                                <div class="mb-1 text-muted">{{$post->created_at}}</div>
                                <p class="card-text mb-auto">{{$post->content}}</p>
                                <a href="{{ route("posts.show",["post"=>$post->id])}}" class="stretched-link">Suite</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @else
                Aucun article en base
            @endif
        </div>
@endsection
