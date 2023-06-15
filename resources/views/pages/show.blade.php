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
        <div id="slide" class="justify-content-center" >

            {{-- @php
                dd( $comic );
            @endphp --}}

            <div class="slide2">
                <img src="{{ $comic->thumb }}" alt="">
                <h5 class="text-center fw-bolder mb-2">{{ $comic->title }}</h5>
                <span>{{ $comic->series }}</span>
                <span>Price: {{ $comic->price }}</span>
                <span>Type: {{ $comic->type}}</span>
            </div>

        </div>
    </div>
</div>



@endsection