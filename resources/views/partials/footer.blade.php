<footer>

    <div class="footer">

        <div class="container">

            <div class="f-links">

                <ul>
                    <h3>DC COMICS</h3>

                    @foreach ($arrDComics['dcomics'] as $link)
                        <li>
                            <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                        </li>
                    @endforeach

                    <h3>SHOP</h3>

                    @foreach ($arrDComics['shop'] as $link)
                        <li>
                            <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                        </li>
                    @endforeach
                </ul>

                <ul>
                    <h3>DC</h3>

                    @foreach ($arrDComics['dc'] as $link)
                        <li>
                            <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                        </li>
                    @endforeach
                </ul>

                <ul>
                    <h3>SITES</h3>

                    @foreach ($arrDComics['sites'] as $link)
                        <li>
                            <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="f-pic">

                <img src="{{ asset('img/dc-logo-bg.png') }}" alt="logo">
            </div>
        </div>
    </div>
</footer>
