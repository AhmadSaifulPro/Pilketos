@include('layout.head')

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    @if (auth()->guard('siswa')->check())
    <nav class="pcoded-navbar menu-light brand-blue theme-horizontal-dis">

    </nav>
    @elseif (auth()->guard('admin')->check())
    <nav class="pcoded-navbar menu-light">
        @include('layout.sidebar')
    </nav>
    @endif
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">

        @include('layout.header')

    </header>
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        @yield('content')
    </div>

    <!-- Required Js -->

    @include('layout.script')
    @stack('js')
</body>

</html>
