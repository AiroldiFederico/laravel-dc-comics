@extends( 'layout.app' )

@section('descriptionPage')
    DC Comics | Create Comic
@endsection

@section( 'content' )








<div class="maincore">
    <div id="jumbotron">
        <p>Crea il Comic</p>
    </div>
    <div class="col-12 m-auto">
        <div id="slide" class="justify-content-center" >

            <form action=" {{ route( 'comic.store' ) }} " method="POST" class="col-3 vh-100">

                @csrf

                {{-- Titolo --}}
                <div class="mb-3" class="form-group">
                  <label for="comic-title" class="form-label">Title</label>
                  <input type="text" name="title" id="comic-title" class="form-control" placeholder="Inserisci il titolo">
                </div>

                {{-- Descrizione --}}
                <div class="mb-3" class="form-group">
                  <label for="comic-description" class="form-label">description</label>
                  <textarea name="description" id="comic-description" class="form-control" placeholder="Inserisci la descrizione"></textarea>
                </div>

                {{-- Immagine --}}
                <div class="mb-3" class="form-group">
                  <label for="comic-thumb" class="form-label">Thumbnail</label>
                  <input type="text" name="thumb" id="comic-thumb" class="form-control" placeholder="Inserisci la thumb">
                </div>

                {{-- Prezzo --}}
                <div class="mb-3" class="form-group">
                    <label for="comic-price" class="form-label">Price</label>
                    <input type="text" name="price" id="comic-price" class="form-control" placeholder="Inserisci il prezzo">
                </div>

                {{-- Serie --}}
                <div class="mb-3" class="form-group">
                  <label for="comic-text" class="form-label">Series</label>
                  <textarea name="series" id="comic-text" class="form-control" placeholder="Inserisci la serie"></textarea>
                </div>

                {{-- Date --}}
                <div class="mb-3" class="form-group">
                  <label for="comic-date" class="form-label">Sale date</label>
                  <input type="date" name="date" id="comic-date" class="form-control" placeholder="Inserisci la data">
                </div>

                {{-- Tipo --}}
                <div class="mb-3" class="form-group">
                  <label for="comic-type" class="form-label">Type</label>
                  <input type="text" name="type" id="comic-type" class="form-control" placeholder="Inserisci il titolo">
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Crea comics</button>
                </div>
                
            </form>

        </div>
    </div>
</div>



@endsection