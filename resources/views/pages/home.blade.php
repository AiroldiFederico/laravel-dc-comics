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
            @foreach ($comics as $comic)
            <div class="slide2">
                <img src="{{ $comic['thumb'] }}" alt="">
                <span>{{ $comic['series'] }}</span>
                <span>{{ $comic['price'] }}</span>
                <span>{{ $comic['type'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>



@endsection