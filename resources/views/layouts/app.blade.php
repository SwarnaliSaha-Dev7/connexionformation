<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    <!-- Header start -->
    @include('partials.header')
    <!-- Header end -->

    {{-- Page Content --}}
    <div class="pagecontent">
        @yield('content')
    </div>

    <!-- Footer part start -->
    @include('partials.footer')
    <!-- Footer part end -->

    <!-- back to top start -->
    <div class="back_to_top">
        <a id="back-to-top" style="display: inline;">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
                height="30" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512"
                xml:space="preserve" class="">
                <g>
                    <path
                        d="M16.71 15.29a1 1 0 0 0-1.42 0l-10 10a1 1 0 0 0 1.42 1.42l9.29-9.3 9.29 9.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z"
                        fill="#000000" opacity="1" data-original="#000000" class=""></path>
                    <path
                        d="M6.71 16.71 16 7.41l9.29 9.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-10-10a1 1 0 0 0-1.42 0l-10 10a1 1 0 0 0 1.42 1.42z"
                        fill="#000000" opacity="1" data-original="#000000" class=""></path>
                </g>
            </svg>
        </a>
    </div>
    <!-- back to top start -->

    @yield('modalComponent')
    @include('layouts.scripts')
    @yield('customJS')
</body>

</html>
