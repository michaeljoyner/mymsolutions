<footer class="site-footer">
    <nav class="footer-nav">
        <ul>
            <li><i class="fa fa-home fa-2x"></i>
            @if(Request::path() === 'home' || Request::path() === '/')
                <a href="#">back to top</a>
            @else
                <a href="{{ url('/') }}">home</a>
            @endif
            </li>
            <li><i class="fa fa-play fa-2x"></i>
            @if(Request::path() === 'getstarted')
                <a href="#">back to top</a>
            @else
                <a href="{{ url('/getstarted') }}">get started</a>
            @endif
            </li>
            <li><i class="fa fa-envelope fa-2x"></i>
            @if(Request::path() === 'home' || Request::path() === '/')
                <a href="#contact">contact us</a>
            @else
                <a href="{{ url('/#contact') }}">contact us</a>
            @endif
            </li>
        </ul>
    </nav>
    <p>&copy; Copyright Reserved 2015</p>
</footer>