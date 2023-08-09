<style>
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu a::after {
        transform: rotate(-90deg);
        position: absolute;
        right: 6px;
        top: 1.25em;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-left: .1rem;
        margin-right: .1rem;
    }
</style>
<script>
    fetch('/BCV')
    .then(function(response) {
        return response.json();
    })
    .then(function(myJson) {
        document.getElementById('dollar-bcv-price').innerHTML = myJson;
    });
</script>
<div class="top-bar">
    {{--    Dollar price --}}
    <marquee style="background-color: #d0e0fc; color:#0b3d91;">
        <i class="fa fa-info-circle" aria-hidden="true"></i>
        {{trans('home.dollar_price_txt')}} <span>{{ now()->format('d-m-Y')}} es </span><strong id="dollar-bcv-price"></strong>&nbsp;Bs
    </marquee>
{{--   rrss --}}
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-10">
                <div class="float-right mx-2">
                    <a href="http://pagonline.unimar.edu.ve/" target="_self" title="pagos-online">
                        <img src="{{URL::asset('./image/bank-onlineb.png')}}" style="width:25px;">
                    </a>
                </div>
{{--                <div class="float-right dropdown show">--}}
{{--                    <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"--}}
{{--                       aria-haspopup="true" aria-expanded="false">--}}
{{--                        <img src="{{URL::asset('./image/icons/idioma.png')}}" style="width:25px;">--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                        <a class="dropdown-item" href="{{URL('lang/es')}}">--}}
{{--                            <img class="rounded-circle"src="{{URL::asset('./image/flags/flag-spain.png')}}" style="width:25px;">--}}
{{--                            {{trans('home.lang-es')}}--}}
{{--                        </a>--}}
{{--                        <a class="dropdown-item" href="{{URL('lang/en')}}">--}}
{{--                            <img class="rounded-circle" src="{{URL::asset('./image/flags/flag-usa.png')}}" style="width:25px;">--}}
{{--                            {{trans('home.lang-en')}}--}}
{{--                        </a>--}}
{{--                        --}}{{--<a class="dropdown-item" href="lang/ita">--}}
{{--                            <img class="rounded-circle" src="{{URL::asset('./image/flags/flag-italy.png')}}" style="width:25px;">--}}
{{--                        {{trans('home.lang-it')}}--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="float-right">
                    <a class="text-reset text-decoration-none" href="mailto:info@unimar.edu.ve">
                        <img class="img-rrss" src="{{URL::asset('./image/rrss/email.png')}}">
                    </a>
                    <a class="text-reset text-decoration-none" href="https://www.facebook.com/univ.demargarita">
                        <img class="img-rrss" src="{{URL::asset('./image/rrss/facebook.png')}}">
                    </a>
                    <a class="text-reset text-decoration-none" href="https://www.instagram.com/universidademargarita">
                        <img class="img-rrss" src="{{URL::asset('./image/rrss/instagram.png')}}">
                    </a>
                    <a class="text-reset text-decoration-none" href="https://www.youtube.com/channel/UCnRVkJ1OW2oLN_TpvXAnUyw">
                        <img class="img-rrss" src="{{URL::asset('./image/rrss/youtube-03.png')}}">
                    </a>
                    <a class="text-reset text-decoration-none" href="https://www.twitter.com/somosunimar">
                        <img class="img-rrss" src="{{URL::asset('./image/rrss/gorjeo.png')}}">
                    </a>
                    <a class="text-reset text-decoration-none" href="https://www.linkedin.com/company/univdemargarita">
                        <img class="img-rrss" src="{{URL::asset('./image/rrss/linkedin.png')}}">
                    </a>
                </div>
            </div>
            <div class="col-2">
                @if(Route::has('login'))
                    <div class="text-right text-truncate mx-2">
                        @auth
                            <a class="loginuser" href="{{ url('/admin') }}" target="_self">{{auth()->user()->name}}</a>
                        @else
                            <a href="{{route('login')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Inicia Sesión" target="_self">
                                <img src="{{URL::asset('./image/login.png')}}" style="width: 25px;">
                            </a>
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <a class="navbar-brand text-dark" href="{{url('/home')}}" ><img class="logo horizontal-logo" src="{{asset('image/logounimar-22.jpg')}}" alt="UNIMAR logo" width="100%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#demo-navbar" aria-controls="demo-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="demo-navbar">
                <div class="navbar-nav mr-auto">
                    <li class="nav-item px-1 active">
                        <a class="nav-link text-dark" href="{{url('/home')}}">{{trans('header.start')}}
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item px-1 dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{trans('header.ourinstitut')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="{{url('/ourinstitution')}}">{{trans('header.unimar')}}</a>
                            <a class="dropdown-item" href="{{url('/organization')}}">{{trans('header.organization')}}</a>
{{--                            <a class="dropdown-item" href="{{url('/rectorade')}}">{{trans('header.rectorade')}}</a>--}}
                            <div class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">{{trans('header.rectorade')}}</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{url('/rectorade')}}">{{trans('header.ourdepto')}}</a></li>
                                    <li><a class="dropdown-item" href="{{url('/comcurricula')}}">{{trans('header.comisioncurricula')}}</a></li>
                                    <li><a class="dropdown-item" href="{{url('/rrhh')}}">{{trans('header.RRHH')}}</a></li>
                                    <li><a class="dropdown-item" href="{{url('/healthymental')}}">{{trans('header.healthy_mental')}}</a></li>
                                </ul>
                            </div>
                            <a class="dropdown-item" href="{{url('/administration_dir')}}">{{trans('header.administration')}}</a>
{{--                            <div class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">{{trans('header.administration')}}</a>--}}
{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li><a class="dropdown-item" href="{{url('/administration')}}">{{trans('header.ourdepto')}}</a></li>--}}
{{--                                    --}}{{--                                    <li><a class="dropdown-item" href="#">{{trans('header.finance')}}</a></li>--}}
{{--                                    --}}{{--                                    <li><a class="dropdown-item" href="{{url('rrhh')}}">{{trans('header.RRHH')}}</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                            <a class="dropdown-item" href="{{url('/regulations')}}">{{trans('header.h-regulations')}}</a>
                            <a class="dropdown-item" href="{{url('/oficialgazzette')}}">{{trans('header.gazzett')}}</a>
                        </div>
                    </li>
                    <li class="nav-item px-1 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{trans('header.secretariat')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="{{url('/generalsecretariat')}}">{{trans('header.ourdepto')}}</a>
                            <a class="dropdown-item" href="{{url('/controlstudies')}}">{{trans('header.ctrlestu')}}</a>
                            <a class="dropdown-item" href="{{url('/healthystudent')}}">{{trans('header.healthyestu')}}</a>
                        </div>
                    </li>
                    <li class="nav-item px-1 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{trans('header.academics')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="{{url('/vice-rectorate/academic')}}">{{trans('header.vicerectorade')}}</a>
                            <a class="dropdown-item" href="{{url('/library')}}">{{trans('header.library')}}</a>
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">{{trans('header.deanchip')}}</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{url('/genestud')}}">{{trans('header.estgen')}}</a></li>
                                        <li><a class="dropdown-item" href="{{url('/humarte')}}">{{trans('header.humarte')}}</a></li>
                                        <li><a class="dropdown-item" href="{{url('/ceys')}}">{{trans('header.ceys')}}</a></li>
                                        <li><a class="dropdown-item" href="{{url('/cjyp')}}">{{trans('header.cjyp')}}</a></li>
                                        <li><a class="dropdown-item" href="{{url('/engineerie')}}">{{trans('header.ding')}}</a></li>
                                        <li><a class="dropdown-item" href="{{url('/soc_com')}}">{{trans('header.comsoc')}}</a></li>
{{--                                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>--}}
{{--                                            <ul class="dropdown-menu">--}}
{{--                                                <li><a class="dropdown-item" href="#">{{trans('header.estgen')}}</a></li>--}}
{{--                                                <li><a class="dropdown-item" href="#">{{trans('header.humarte')}}</a></li>--}}
{{--                                                <li><a class="dropdown-item" href="#">{{trans('header.ceys')}}</a></li>--}}
{{--                                                <li><a class="dropdown-item" href="#">{{trans('header.cjyp')}}</a></li>--}}
{{--                                                <li><a class="dropdown-item" href="#">{{trans('header.ding')}}</a></li>--}}
{{--                                                <li><a class="dropdown-item" href="#">{{trans('header.comsoc')}}</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>--}}
{{--                                            <ul class="dropdown-menu">--}}
{{--                                                <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>--}}
{{--                                                <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
                                    </ul>
                                </div>
                        </div>
                    </li>
                    <li class="nav-item px-1 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{trans('header.extent')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="{{url('/vextension')}}">{{trans('header.vicerectorade')}}</a>
                            <a class="dropdown-item" href="{{url('/communityserv')}}">{{trans('header.communityserv')}}</a>
                        </div>
                    </li>
                    <li class="nav-item px-1 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{trans('header.student')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
{{--                            <a class="dropdown-item" href="{{url('/organization')}}">{{trans('header.organization')}}</a>--}}
                            <div class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">{{trans('header.pregrade')}}</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{url('/newstudents')}}">{{trans('header.new_additions')}}</a></li>
                                    <li><a class="dropdown-item" href="{{url('/regularstudents')}}">{{trans('header.regstudents')}}</a></li>
                                    <li><a class="dropdown-item" href="{{url('/intensive-course-2023')}}">Intensivo Agosto 2023</a></li>
                                    <li><a class="dropdown-item" href="{{url('/alumni')}}">{{trans('header.graduates')}}</a></li>
                                </ul>
                            </div>
                            <div class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">{{trans('header.postgrade')}}</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="postgrades/newstudents">{{trans('header.new_additions')}}</a></li>
{{--                                    <li><a class="dropdown-item" href="#">{{trans('header.regstudents')}}</a></li>--}}
                                </ul>
                            </div>
                            <div class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">{{trans('header.extent')}}</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">{{trans('header.diplomas')}}</a></li>
                                    <li><a class="dropdown-item" href="#">{{trans('header.courses')}}</a></li>
                                </ul>
                            </div>
                        </div>
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">--}}
{{--                            <a class="dropdown-item" href="{{url('/newstudents')}}">{{trans('header.new_additions')}}</a>--}}
{{--                            <a class="dropdown-item" href="{{url('/regularstudents')}}">{{trans('header.regstudents')}}</a>--}}
{{--                            <a class="dropdown-item" href="{{url('/alumni')}}">{{trans('header.graduates')}}</a>--}}
{{--                        </div>--}}
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="{{url('/postgrade')}}">{{trans('header.postgrade')}}</a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="{{url('/dptoinvest')}}">{{trans('header.investigation')}}</a>
                    </li>
                   <li class="nav-item px-1">
                       <a class="nav-link" href="{{url('/services')}}">{{trans('header.services')}}</a>
                    </li>
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            {{trans('header.services')}}--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">{{trans('header.administrative')}}</a>--}}
{{--                            <a class="dropdown-item" href="{{url('/')}}">{{trans('header.academics')}}</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                <form class="form-inline my-2 my-lg-0">--}}
{{--                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--                    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>--}}
{{--                </form>--}}
            </div>

        </nav>
    </div>
</div>
<script>
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');

        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass("show");
        });

        return false;
    });
</script>
<script>

</script>

