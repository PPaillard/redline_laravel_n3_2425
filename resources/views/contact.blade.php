@extends("layout")

@section("title", "Formulaire de contact")


@section("content")

    <div class="container mt-4">
        <form action="" method="post" class="vstack gap-2">
            @csrf
            <div class="form-group">
                <label for="subject">Sujet</label>
                <input type="text" class="form-control" id="subject" name="subject" value="{{ @old('subject') }}" />
                @error('subject')
                {{ $message  }}
                @enderror
            </div>
            <div>
                <label for="content">Contenu</label>
                <textarea id="content"  class="form-control" name="content">{{ @old('content') }}</textarea>
                @error('content')
                {{ $message  }}
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ @old('email') }}" />
                @error('email')
                {{ $message  }}
                @enderror
            </div>
            <div class="form-group">
                <label for="meeting_date">Date du rdv</label>
                <input type="date" class="form-control" id="meeting_date" name="meeting_date" value="{{ @old('meeting_date') }}" />
                @error('meeting_date')
                {{ $message  }}
                @enderror
            </div>
            <button class="btn btn-primary">
                Soumettre
            </button>
        </form>

        </ul>
    </div>
@endsection
