<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">           

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="jumbotron" style="margin-bottom: 0px;padding-bottom: 0px;padding-top:2rem">
        <li style="display:inline;font-size:150%"> SIMMI </li>
        <li style="display:inline;font-size:90%"> Sistem Informasi Masjid Manarul Ilmi</li>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="margin-top:2rem">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ 'Home' }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto" style="font-size:80%">
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('imamJumatIndex')}}">{{'Jadwal Imam Jumat'}}</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('keuanganIndex')}}">{{'Keuangan'}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('inventarisMasjidIndex')}}">{{'Inventaris Masjid'}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('jadwalKajianIndex')}}">{{'Jadwal Kajian dan Acara'}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('parkirIndex')}}">{{'Parkir'}}</a>
                        </li>
                    </ul>
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
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
                                    <a class="dropdown-item" href="{{route('imamJumatCreate')}}">
                                        Menambah Jadwal Imam
                                    </a>
                                    <a class="dropdown-item" href="{{route('inventarisMasjidCreate')}}">
                                        Menambah Daftar Inventaris
                                    </a>
                                    <a class="dropdown-item" href="{{ route('parkirPendaftar') }}">
                                        Lihat Pendaftar
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div style="padding-left:3cm;padding-rigth:3cm" id="app">
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
</script>
</body>
</html>
