<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ url('/dashboard') }}"><img style="width: 40px; height: 45px;" class="mr-2"
                    src="{{ asset('images/Kalsel.png') }}" alt=""><b class="mr-4">INVENTORI</b></a>
            <a class="navbar-brand hidden" href="{{ url('/dashboard') }}"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="@yield('dashboard')">
                    <a href="{{ url('/dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <li class="menu-item-has-children dropdown @yield('barang_masuk')">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-download"></i>Master Data</a>
                    <ul class="sub-menu children dropdown-menu">
                        @if (auth()->user()->role == 'Admin')
                        <li><i class="menu-icon fa fa-plus"></i><a href="{{ url('/user') }}">Daftar User</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="{{ url('/pegawai') }}">Daftar Pegawai</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="{{ url('/kategori') }}">Daftar Kategori</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="{{ url('/kondisi') }}">Daftar Kondisi</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="{{ url('/jabatan') }}">Daftar Jabatan</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="{{ url('/barang') }}">Daftar Barang</a>
                        </li>
                        @endif
                    </ul>
                </li>
                @if (auth()->user()->role == 'Admin')
                <!-- /.menu-title -->
                <h3 class="menu-title">Data Barang</h3><!-- /.menu-title -->
                <li class="@yield('kiba')">
                    <a href="{{ url('/kiba') }}"> <i class="menu-icon fa fa-suitcase"></i>Daftar KIB-A</a>
                </li>
                <li class="@yield('kibb')">
                    <a href="{{ url('/kibb') }}"> <i class="menu-icon fa fa-suitcase"></i>Daftar KIB-B</a>
                </li>
                <li class="@yield('kibc')">
                    <a href="{{ url('/kibc') }}"> <i class="menu-icon fa fa-suitcase"></i>Daftar KIB-C</a>
                </li>
                <li class="@yield('kibd')">
                    <a href="{{ url('/kibd') }}"> <i class="menu-icon fa fa-suitcase"></i>Daftar KIB-D</a>
                </li>
                <li class="@yield('kibe')">
                    <a href="{{ url('/kibe') }}"> <i class="menu-icon fa fa-suitcase"></i>Daftar KIB-E</a>
                </li>
                @endif
                <h3 class="menu-title">Laporan</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown @yield('barang_masuk')">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-download"></i>Laporan Data KIB</a>
                    <ul class="sub-menu children dropdown-menu">
                        @if (auth()->user()->role == 'Admin')
                        <li><i class="menu-icon fa fa-plus"></i><a href="{{ url('ctkKIBA') }}">KIB - A</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="{{ url('ctkKIBB') }}">KIB - B</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="{{ url('ctkKIBC') }}">KIB - C</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="{{ url('ctkKIBD') }}">KIB - D</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="{{ url('ctkKIBE') }}">KIB - E</a>
                        </li>
                        @elseif (auth()->user()->role == 'Kepala Bidang')
                        <li><i class="menu-icon fa fa-plus"></i><a href="{{ url('ctkKIBA') }}">KIB - A</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="{{ url('ctkKIBB') }}">KIB - B</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="{{ url('ctkKIBC') }}">KIB - C</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="{{ url('ctkKIBD') }}">KIB - D</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="{{ url('ctkKIBE') }}">KIB - E</a>
                        </li>
                        @endif
                    </ul>
                </li>
                {{-- @if (auth()->user()->role == 'Admin')
                <li class="@yield('laporan')">
                    <a href="{{ url('/laporan') }}"><i class="menu-icon fa fa-print"></i> Cetak Laporan</a>
                </li>
                @endif --}}
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
