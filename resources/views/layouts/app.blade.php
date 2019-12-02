<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.j') }}s"></script>
    <script src="{{ asset('js/theme.js ') }}"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">           

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon//simmi-32x32trans.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon//simmi-96x96trans.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon//simmi16x16trans.png') }}">
    <link rel="manifest" href="{{ asset('js/app.js') }}images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
</head>
<body>
    <div class="jumbotron" >
        <header class="site-header header-one">
                <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                    <div class="container clearfix">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="logo-box clearfix">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="images/logo-1-simmi.png" class="main-logo" alt="SIMMI" href="{{ url('/') }}">
                            </a>
                            <button class="menu-toggler" data-target=".header-one .main-navigation">
                                <span class="fa fa-bars"></span>
                            </button>
                        </div><!-- /.logo-box -->
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="main-navigation">
                            <ul class=" navigation-box one-page-scroll-menu ">
                                <!-- <li class="current scrollToLink"> -->
                                    <!-- <a href="#home">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home One</a></li>
                                        <li><a href="index-2.html">Home Two</a></li>
                                    </ul> -->
                                    <!--/.sub-menu--> 
                                <!-- <li class="scrollToLink">
                                    <a href="#services">Jadwal Imam Masjid</a>
                                </li>
                                <li class="scrollToLink">
                                    <a href="#screens">Inventaris Masjid</a>
                                </li>
                                <li class="scrollToLink">
                                    <a href="#screens">Jadwal Kajian & Acara</a>
                                </li> -->
                                <li class="scrollToLink">
                                    <a href="#blog">Features</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('imamJumatIndex')}}">Jadwal Imam Masjid</a></li>
                                        <li><a href="{{route('keuanganIndex')}}">Keuangan</a></li>
                                        <li><a href="{{route('inventarisMasjidIndex')}}">Inventaris Masjid</a></li>
                                        <li><a href="{{route('jadwalKajianIndex')}}">Jadwal Kajian & Acara</a></li>
                                        <li><a href="{{route('barangTertinggalIndex')}}">Barang Tertinggal</a></li>
                                        <li><a href="{{route('jadwalPuasaIndex')}}">Jadwal Puasa Sunnah</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                        <div class="right-side-box">                       
                            <ul class=" navigation-box one-page-scroll-menu ">
                                    @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->isAdmin())
                                    <a class="dropdown-item" href="{{ route('beritaCreate') }}">
                                        Menambah Berita
                                    </a>
                                    <a class="dropdown-item" href="{{ route('beritaDaftar') }}">
                                        Melihat Daftar Berita
                                    </a> 
                                    <a class="dropdown-item" href="{{route('imamJumatCreate')}}">
                                        Menambah Jadwal Imam
                                    </a>
                                    <a class="dropdown-item" href="{{route('inventarisMasjidCreate')}}">
                                        Menambah Daftar Inventaris
                                    </a>
                                    <a class="dropdown-item" href="{{route('jadwalKajianCreate')}}">
                                        Menambah Jadwal Kajian
                                    </a>
                                    <a class="dropdown-item" href="{{ route('parkirPendaftar') }}">
                                        Lihat Pendaftar
                                    </a>
                                    <a class="dropdown-item" href="{{ route('barangTertinggalCreate') }}">
                                        Menambah Barang Tertinggal
                                    </a>
                                    <a class="dropdown-item" href="{{ route('jadwalPuasaCreate') }}">
                                        Menambah Jadwal Puasa Sunnah
                                    </a>
                                    <a class="dropdown-item" href="{{ route('keuanganCreate') }}">
                                        Menambah File Rekap Keuangan
                                    </a>
                                    @elseif (Auth::user()->isUser())
                                    <a class="dropdown-item" href="{{route('parkirIndex')}}">
                                        Daftar Kartu Parkir
                                    </a>
                                    <a class="dropdown-item" href="{{route('userKegiatanList')}}">
                                        Daftar Kajian Acara
                                    </a>
                                    <a class="dropdown-item" href="{{route('userKegiatanIndex')}}">
                                        Lihat Kajian yang diikuti
                                    </a> 
                                    <a class="dropdown-item" href="{{route('userKegiatanUpload')}}">
                                        Upload Berkas
                                    </a>                               
                                    @endif
                                @else
                                    <li class="scrollToLink">
                                        <a href="#" >
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
        
                                        <ul class="sub-menu" >
                                            @if (Auth::user()->isAdmin())
                                            <a class="dropdown-item" href="{{ route('beritaCreate') }}">
                                                Menambah Berita
                                            </a>
                                            <a class="dropdown-item" href="{{ route('beritaDaftar') }}">
                                                Melihat Daftar Berita
                                            </a> 
                                            <a class="dropdown-item" href="{{route('imamJumatCreate')}}">
                                                Menambah Jadwal Imam
                                            </a>
                                            <a class="dropdown-item" href="{{route('inventarisMasjidCreate')}}">
                                                Menambah Daftar Inventaris
                                            </a>
                                            <a class="dropdown-item" href="{{route('jadwalKajianCreate')}}">
                                                Menambah Jadwal Kajian
                                            </a>
                                            <a class="dropdown-item" href="{{ route('parkirPendaftar') }}">
                                                Lihat Pendaftar
                                            </a>
                                            <a class="dropdown-item" href="{{ route('barangTertinggalCreate') }}">
                                                Menambah Barang Tertinggal
                                            </a>
                                            <a class="dropdown-item" href="{{ route('jadwalPuasaCreate') }}">
                                                Menambah Jadwal Puasa Sunnah
                                            </a>
                                            @elseif (Auth::user()->isUser())
                                            <a class="dropdown-item" href="{{route('parkirIndex')}}">
                                                Daftar Kartu Parkir
                                            </a>
                                            <a class="dropdown-item" href="{{route('userKegiatanList')}}">
                                                Daftar Kajian Acara
                                            </a>
                                            <a class="dropdown-item" href="{{route('userKegiatanIndex')}}">
                                                Lihat Kajian yang diikuti
                                            </a>                                
                                            @endif
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                @endguest
                            </ul>
                        </div><!-- /.right-side-box -->
                    </div>
                    <!-- /.container -->
                </nav>
            </header><!-- /.header-one -->
        </div>  
            <div id="app">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        
         

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" defer></script>
<script>
    $(document).ready( function () {
        $('#tabel-imam').DataTable();
    } );

    // $('#input_starttime').pickatime({});
</script>
</body>
</html>
