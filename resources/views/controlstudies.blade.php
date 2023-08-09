@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('/image/banners/es/studiescontrol.jpg')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/studyctrl/Ctr-02.png')}}"><h4>{{trans('studyctrl.title')}}</h4>
            </div>
        </div>
        {{--presentations cards --}}
        <div class="d-flex justify-content-around flex-column mx-4">
            <div class="card-deck">
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/studyctrl/Maruanny.png')}}" alt="{{trans('studyctrl.ctrl-chief')}}" style="max-width: 8em; height: 10.25em; background-color: #0d4d98;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('studyctrl.ctrl-chief')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('studyctrl.ctrl-chief-title')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/studyctrl/Celia.png')}}" alt="{{trans('studyctrl.ctrl-asist-title')}}" style="max-width: 8em; height: 10.25em; background-color: #0d4d98;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('studyctrl.ctrl-aist-grade')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('studyctrl.ctrl-asist-title')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/studyctrl/Ricci.png')}}" alt="{{trans('studyctrl.ctrl-analist-title')}}" style="max-width: 8em; height: 10.75em; background-color: #0d4d98;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('studyctrl.ctrl-analist-grade')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('studyctrl.ctrl-analist-title')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/studyctrl/Nelson.png')}}" alt="{{trans('studyctrl.ctrl-aux-equiv-title')}}" style="max-width: 8em; height: 10.75em; background-color: #0d4d98;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('studyctrl.ctrl-aux-equiv')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('studyctrl.ctrl-aux-equiv-title')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/studyctrl/Ana.png')}}" alt="Asistente" style="max-width: 8em; height: 10.75em; background-color: #0d4d98;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('studyctrl.ctrl-aux-servest')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('studyctrl.ctrl-aux-serviest-title')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- content information --}}
        <div class="content justify-content-around content-vext mx-4">
            <div class="row justify-content-center mx-4">
                {{-- principies --}}
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                     aria-controls="collapse3">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/studyctrl/Ctr-05.png')}}" width="75%">
                    </a>
                </div>
                {{-- functions --}}
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse4" role="button"
                     aria-expanded="false"
                     aria-controls="collapse4">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/studyctrl/Ctr-06.png')}}" width="75%">
                    </a>
                </div>
                {{-- organigram --}}
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse5" role="button"
                     aria-expanded="false"
                     aria-controls="collapse5">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/studyctrl/Ctr-07.png')}}" width="75%">
                    </a>
                </div>
                {{--fin struct--}}
            </div>
            {{-- card-bodies --}}
            {{-- principies --}}
            <div class="collapse m-4" id="collapse3">
                <div class="card border-0 card-body">
                    <p class="card-text text-left font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('studyctrl.ctrl-valors-title')}}
                    </p>
                    <ul class="text-justify">
                        <li><p> {{trans('studyctrl.ctrl-valors-1')}}</p></li>
                        <li><p> {{trans('studyctrl.ctrl-valors-2')}}</p></li>
                        <li><p> {{trans('studyctrl.ctrl-valors-3')}}</p></li>
                        <li><p> {{trans('studyctrl.ctrl-valors-4')}}</p></li>
                        <li><p> {{trans('studyctrl.ctrl-valors-5')}}</p></li>
                        <li><p> {{trans('studyctrl.ctrl-valors-6')}}</p></li>
                        <li><p> {{trans('studyctrl.ctrl-valors-7')}}</p></li>
                    </ul>
                </div>
            </div>
            {{-- functions --}}
            <div class="collapse mx-4" id="collapse4">
                <div class="card border-0 card-body">
                    <p class="card-text text-left font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('studyctrl.ctrl-function-title')}}
                    </p>
                    <ul class="text-justify">
                        <li><p> {{trans('studyctrl.ctrl-function-1')}}</p></li>
                        <li><p> {{trans('studyctrl.ctrl-function-2')}}</p></li>
                        <li><p> {{trans('studyctrl.ctrl-function-3')}}</p></li>
                        <li><p> {{trans('studyctrl.ctrl-function-4')}}</p></li>
                        <li><p> {{trans('studyctrl.ctrl-function-5')}}</p></li>
                        <li><p> {{trans('studyctrl.ctrl-function-6')}}</p></li>
                        <li><p> {{trans('studyctrl.ctrl-function-7')}}</p></li>
                    </ul>
                </div>
            </div>
            {{-- organigram --}}
            <div class="collapse m-4" id="collapse5">
                <p class="card-text text-left font-weight-bold mx-4" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                    {{trans('studyctrl.ctrl-organigram')}}
                </p>
                <div class="card-body border-0 m-4">
                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/studyctrl/orgctrl.png')}}" width="50%">
                </div>
            </div>
        </div>
        <!--Contacts information-->
        <div class="d-flex border-0 justify-content-around mx-4 text-left card card-body">
            <h5 class="font-weight-bold">{{trans('studyctrl.ctrl-info-title')}}</h5>
            <div class="flex-row">
                <p><b>{{trans('studyctrl.ctrl-email-title')}}</b></p><p id="name-funders">&nbsp {{trans('studyctrl.ctrl-email')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('studyctrl.ctrl-telf-title')}}</b></p><p id="name-funders">&nbsp{{trans('studyctrl.ctrl-telf')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('studyctrl.ctrl-sched-title')}}</b></p><p id="name-funders">&nbsp{{trans('studyctrl.ctrl-sched')}}</p>
            </div>
        </div>
    </div>
@endsection
