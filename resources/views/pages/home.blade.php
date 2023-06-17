@extends( 'layout.app' )

@section('titlePage')
    DC Comics | Home
@endsection

@section( 'content' )








<div class="maincore">
    <div id="jumbotron">
        <p>CURRENT SERIES</p>
    </div>
    <div class="col-10 m-auto">
        <div id="slide" >
            @foreach ($comics as $elem)

            <div class="slide2">

                {{-- Thumb --}}
                <img src="{{ $elem['thumb'] }}" alt="">

                {{-- Title --}}
                <a href="{{ route('comic.show', ['comic' => $elem->id]) }}" class="text-decoration-none">
                     <h5  class="text-center fw-bolder mb-2 " >{{ $elem['title'] }}</h5>
                </a>

                {{-- Other --}}
                <span>{{ $elem['series'] }}</span>
                <span>Price: {{ $elem['price'] }}</span>
                <span>Type: {{ $elem['type'] }}</span>

                <div class="mt-2 d-flex justify-content-between">
                    {{-- Edit button --}}
                    <a class="btn btn-warning col-5"  href=" {{ route('comic.edit', $elem)}} " role="button">Edit</a>
    
                    {{-- Delete button --}}
                    <form action=" {{ route('comic.destroy', $elem ) }} " method="POST" class="col-5"> 
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger col-12" role="button" onclick="return deleteConfirm()">Delete</button>
                    </form>
                </div>


            </div>

            @endforeach
        </div>
    </div>
</div>


@endsection

@section('script')
    
    function deleteConfirm() {
        return confirm('Sei sicuro di eliminare questo comic?');
    };
    
@endsection