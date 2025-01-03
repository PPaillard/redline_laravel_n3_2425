<form action="" method="post" class="vstack gap-2">
    @csrf
    @method($post->id?'PUT':'POST')
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ @old('title', $post->title) }}" />
        @error('title')
        {{ $message  }}
        @enderror
    </div>
    <div class="form-group">
        <label for="content">Contenu</label>
        <textarea id="content"  class="form-control" name="content">{{ @old('content', $post->content) }}</textarea>
        @error('content')
        {{ $message  }}
        @enderror
    </div>
    <div class="form-group">
        <label for="category">Catégorie</label>
        <select id="category" class="form-control" name="category_id">
            @foreach($categories as $category)
                <option @selected(old("category_id", $post->category_id) == $category->id)
                        value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        @error('category_id')
        {{ $message  }}
        @enderror
    </div>
    <div class="form-group">
        <label for="tag">Tags</label>
        <select id="tag"  class="form-control" name="tags[]" multiple>
            @foreach($tags as $tag)
                <option @selected(in_array($tag->id, old("tags",$post?->tags->pluck('id')->toArray() ?? []))) value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
        </select>
        @error('tags')
        {{ $message  }}
        @enderror
    </div>
    <button class="btn btn-primary">
        @if($post->id)
            Modifier
        @else
            Créer
        @endif
    </button>
</form>
