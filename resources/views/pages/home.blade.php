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

                {{-- Edit button --}}
                <a class="btn btn-warning col-5 mt-2"  href=" {{ route('comic.edit', $elem)}} " role="button">Edit</a>

            </div>

            @endforeach
        </div>
    </div>
</div>



@endsection