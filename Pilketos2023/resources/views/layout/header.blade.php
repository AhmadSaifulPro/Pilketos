<div class="m-header">
    @if (auth()->guard('siswa')->check())
    {{-- <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a> --}}
    @elseif (auth()->guard('admin')->check())
    <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
    @endif
    <a href="#!" class="b-brand">
        <!-- ========   change your logo hear   ============ -->
        <h3 style="color: white; font-family: 'Times New Romans'" class="pt-2">SMK SLF</h3>
        <img src="{{ asset('/') }}assets/dist/assets/images/logo.png" alt="" class="logo-thumb">
    </a>
    <a href="#!" class="mob-toggler">
        <i class="feather icon-more-vertical"></i>
    </a>
</div>
<div class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto">
        {{-- <li>
        </li> --}}
        @if (auth()->guard('siswa')->check())
        <li>
            <div class="dropdown drp-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="feather icon-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-notification">

                    <ul class="pro-body">
                        <form action="{{ route('logout_siswa') }}" method="post">
                            @csrf
                            <li><button class="dropdown-item"><i class="feather icon-log-out"></i>
                                    Logout</button></li>
                        </form>

                    </ul>
                </div>
            </div>
        </li>
        @elseif (auth()->guard('admin')->check())
        <li>
            <div class="dropdown drp-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="feather icon-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-notification">

                    <ul class="pro-body">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <li><button class="dropdown-item"><i class="feather icon-log-out"></i>
                                    Logout</button></li>
                        </form>

                    </ul>
                </div>
            </div>
        </li>
        @endif
    </ul>
</div>
