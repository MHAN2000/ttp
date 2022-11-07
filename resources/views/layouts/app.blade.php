@extends('base')
@section('body')
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="bg-white">
            <div class="sidebar-header text-center">
                {{-- <h3>Secretaría de educación</h3> --}}
                <img src="{{ asset('img/logo_se.png') }}" alt="" width="50%" class="rounded-3">
            </div>

            <ul class="list-unstyled components">
                {{-- <p>Dummy Heading</p> --}}
                {{-- <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li> --}}
                <li class="active">
                    <a href="#"><i class="fas fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="#"> <i class="fas fa-chart-line"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-file-signature"></i> Registro</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-search-location"></i> Municipios</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-level-up-alt"></i> Niveles</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-envelope-open-text"></i> Asuntos</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-blue">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link">SECRETARÍA DE EDUCACIÓN</a>
                            </li>
                            {{--  <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a> 
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="content-p">
                @yield('content')
                {{-- <h2>Collapsible Sidebar Using Bootstrap 4</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex
                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit
                    anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex
                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit
                    anim id est laborum.</p>

                <div class="line"></div> --}}

            </div>


        </div>
    </div>
@endsection
    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
    @endpush
