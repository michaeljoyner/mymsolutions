<footer class="site-footer">
    <nav class="footer-nav">
        <ul>
            <li>
                <a href="#">
                    <i class="fa fa-home fa-2x"></i>
                    back to top</a>
            </li>

            {{--<li><i class="fa fa-envelope fa-2x"></i>--}}
            {{--@if(Request::path() === 'home' || Request::path() === '/')--}}
                {{--<a href="#contact">contact us</a>--}}
            {{--@else--}}
                {{--<a href="{{ url('/#contact') }}">contact us</a>--}}
            {{--@endif--}}
            {{--</li>--}}
        </ul>
    </nav>
    <p>&copy; Copyright Reserved {{ \Carbon\Carbon::now()->year }}</p>
</footer>