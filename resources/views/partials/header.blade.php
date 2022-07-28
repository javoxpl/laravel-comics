<header>

    <div class="navbar">

        <div class="container">

            <div class="logo">

                <img src="{{ asset('img/dc-logo.png') }}" alt="dc-logo">
            </div>
            <ul class="navlist">

                @foreach (config('links') as $link)

                    <li>
                        <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                    </li>
                @endforeach

            </ul>
        </div>
      </div>
</header>
