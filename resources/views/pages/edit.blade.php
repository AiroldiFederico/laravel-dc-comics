@extends( 'layout.app' )

@section('descriptionPage')
    DC Comics | Edit Comic
@endsection

@section( 'content' )



<div class="maincore">
    <div id="jumbotron">
        <p>Modifica il Comic</p>
    </div>
    <div class="col-12 m-auto">
        <div id="slide" class="justify-content-center" >

            <form action=" {{ route( 'comic.store' ) }} " method="POST" class="col-3 vh-100">

                @csrf

                {{-- Titolo --}}
                <div class="mb-3" class="form-group">
                  <label for="comic-title" class="form-label">Title</label>
                  <input type="text" name="title" id="comic-title" class="form-control" placeholder="Inserisci il titolo"
                  value=" {{ old('title') ?? $comic->title }}">
                </div>

                {{-- Descrizione --}}
                <div class="mb-3" class="form-group">
                  <label for="comic-description" class="form-label">description</label>
                  <textarea name="description" id="comic-description" class="form-control" placeholder="Inserisci la descrizione" 
                  >{{ old('description') ?? $comic->description }}</textarea>
                </div>

                {{-- Immagine --}}
                <div class="mb-3" class="form-group">
                  <label for="comic-thumb" class="form-label">Thumbnail</label>
                  <input type="text" name="thumb" id="comic-thumb" class="form-control" placeholder="Inserisci la thumb"
                  value=" {{ old('thumb') ?? $comic->thumb }}">
                </div>

                {{-- Prezzo --}}
                <div class="mb-3" class="form-group">
                    <label for="comic-price" class="form-label">Price</label>
                    <input type="text" name="price" id="comic-price" class="form-control" placeholder="Inserisci il prezzo"
                    value=" {{ old('price') ?? $comic->price }}">
                </div>

                {{-- Serie --}}
                <div class="mb-3" class="form-group">
                  <label for="comic-text" class="form-label">Series</label>
                  <textarea name="series" id="comic-text" class="form-control" placeholder="Inserisci la serie"
                  >{{ old('series') ?? $comic->series }}</textarea>
                </div>

                {{-- Date --}}
                <div class="mb-3" class="form-group">
                  <label for="comic-date" class="form-label">Sale date</label>
                  <input type="date" name="date" id="comic-date" class="form-control" placeholder="Inserisci la data"
                  value=" {{ old('date') ?? $comic->date }}">
                </div>

                {{-- Tipo --}}
                <div class="mb-3" class="form-group">
                  <label for="comic-type" class="form-label">Type</label>
                  <input type="text" name="type" id="comic-type" class="form-control" placeholder="Inserisci il titolo"
                  value=" {{ old('sale_date') ?? $comic->sale_date }}">
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Modifica comics</button>
                </div>
                
            </form>

        </div>
    </div>
</div>



@endsection