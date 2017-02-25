<!DOCTYPE html>
<html lang="en">
<head> <div class="col-md-12">
    <meta charset="utf-12">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<style>
      html, body 
      {
       background-image: url(index.jpg);
       background-color: #00BFFF;
       font-color: #677b4f;
       font-family: 'papyerus';
       font-weight: 150;
       height: 150vh;
       margin:0;
      }
</style>
<body>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">


                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
            
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav">
                         
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Golongan<span class="caret"></span>
                            </a>

                    <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="{{ url('/golongan/create') }}">Create Data Golongan</a></li>
                     <li><a href="{{ url('/golongan')}}">Data Table Golongan</a></li>
                     </ul>

                <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Jabatan<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="{{ url('/jabatan/create') }}">Create Data Jabatan</a></li>
                     <li><a href="{{ url('/jabatan')}}">Data Table Jabatan</a></li></ul>

                     
                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Pegawai<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="{{ url('/pegawai/create') }}">Create Data Pegawai</a></li>
                     <li><a href="{{ url('/pegawai')}}">Data Table Pegawai</a></li></ul>
                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Kategori Lembur<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="{{ url('/kategori_lembur/create') }}">Create Data Kategori Lembur</a></li>
                     <li><a href="{{ url('/kategori_lembur')}}">Data Table Kategori Lembur</a></li></ul>

                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Lembur Pegawai<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="{{ url('/lembur_pegawai/create') }}">Create Data Lembur Pegawai</a></li>
                     <li><a href="{{ url('/lembur_pegawai')}}">Data Table Lembur Pegawai </a></li></ul>
                    
                     <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Tunjangan<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="{{ url('/tunjangan/create') }}">Create Data Tunjangan</a></li>
                     <li><a href="{{ url('/tunjangan')}}">Data Table Tunjangan</a></li></ul>

                     

                     

                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Tunjangan Pegawai<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                    
                     <li><a href="{{ url('/tunjangan_pegawai/create') }}">Create Tunjangan Pegawai  </a></li>
                     <li><a href="{{ url('/tunjangan_pegawai')}}">Data Table Tunjangan Pegawai   </a></li></ul>

                     
                     


                    

                </ul>
        
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>

                </div>
            </div>
        </nav>

        @yield('content')
    </div>


    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
