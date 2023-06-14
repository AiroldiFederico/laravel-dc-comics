



<?php
$sections = [
    [ "name" => "characters", "active" => false ],
    [ "name" => "comics", "active" => true ],
    [ "name" => "movies", "active" => false ],
    [ "name" => "tv", "active" => false ],
    [ "name" => "games", "active" => false ],
    [ "name" => "collectibles", "active" => false ],
    [ "name" => "video", "active" => false ],
    [ "name" => "fans", "active" => false ],
    [ "name" => "news", "active" => false ],
    [ "name" => "shop", "active" => false ]
];


?>

<div class="mainnav col-10 m-auto">
    <div><img src=" {{ Vite::asset('resources/images/dc-logo.png') }}" alt=""></div>
    <nav>
        <ul class="ulnav">
            @foreach ($sections as $section)
                <li class="{{ $section['active'] ? 'active' : '' }}">
                    <a href="#">{{ $section['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</div>
