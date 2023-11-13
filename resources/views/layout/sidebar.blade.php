<div class="navbar-wrapper  ">
    <div class="navbar-content scroll-div ">

        <div class="">
            <div class="main-menu-header">
                <img class="img" src="{{ asset('/') }}assets/dist/assets/images/SMKRemove.png" width="40%">
            </div>
        </div>

        <ul class="nav pcoded-inner-navbar ">
            <li class="nav-item pcoded-menu-caption">
                <label>Navigation</label>
            </li>
            <li class="nav-item">
                <a href="{{ route('pilketos.index') }}" class="nav-link "><span class="pcoded-micon"><i
                            class="feather icon-home"></i></span><span class="pcoded-mtext">Data Calon Ketua
                        OSIS</span></a>
            </li>
            </li>
            <li class="nav-item">
                <a href="{{ route('siswa.index') }}" class="nav-link "><span class="pcoded-micon"><i
                            class="feather icon-home"></i></span><span class="pcoded-mtext">Siswa
                    </span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('riwayat.index') }}" class="nav-link "><span class="pcoded-micon"><i
                            class="feather icon-home"></i></span><span class="pcoded-mtext">Riwayat</span></a>
            </li>
        </ul>
    </div>
</div>
