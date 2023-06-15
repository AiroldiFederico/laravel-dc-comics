@extends( 'layout.app' )

@section('titlePage')
    DC Comics | SHOW COMIC
@endsection

@section( 'content' )








<div class="maincore">
    <div id="jumbotron">
        <p>CURRENT SERIES</p>
    </div>
    <div class="col-10 m-auto">
        <div id="slide" class="justify-content-center col-12" >

            {{-- @php
                dd( $comic );
            @endphp --}}

            <div class="slide2 w-25">
                <img src="{{ $comic->thumb }}" alt="">
                <h5 class="text-center fw-bolder mb-2">{{ $comic->title }}</h5>

                <span class="my-2">{{ $comic->series }}</span>
                <span class="text-center overflow-y-auto">Description: {{ $comic->description }}</span>
                <span class="my-2">Date: {{ $comic->sale_date }}</span>
                <span class="my-2">Price: {{ $comic->price }}</span>
                <span>Type: {{ $comic->type}}</span>
            </div>

        </div>
    </div>
</div>



@endsection