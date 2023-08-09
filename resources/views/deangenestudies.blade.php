@extends('layouts.layout')

@section ('content')
    <div class="content">
        {{-- main banner --}}
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/deansoffice/est-gen/genestudiesdeans.jpg')}}">
        </div>
        {{--    section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/est-gen/estgen-02.png')}}"><h4>{{trans('estgen.title')}}</h4>
            </div>
        </div>
        <!-- Information depto -->
        {{--        cards presentations --}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Gen-Estudies/damelis.jpg')}}" alt="{{trans('estgen.chief-role')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('estgen.chief-name')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('estgen.chief-role')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('estgen.chief-email')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Gen-Estudies/julianny.jpg')}}" alt="{{trans('estgen.asist-role')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('estgen.asist-name')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('estgen.asist-role')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('estgen.asist-email')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--        content information --}}
        <div class="d-flex justify-content-around content-vext m-4">
            <div class="row justify-content-around">
                <div class="col-sm-4 col-md-4 my-2" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
                    <a id="foundbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/est-gen/estgen-03.png')}}" width="100%">
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 my-2 invisible "></div>
                <div class="col-sm-4 col-md-4 my-2" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                    <a id="campusbtn">
                        <img src="{{URL::asset('../image/views/'.trans('commons.lang-banner').'/est-gen/estgen-04.png')}}" width="100%">
                    </a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around flex-column" id="contevext">
            <div class="collapse mx-4" id="collapse">
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">{{trans('estgen.resume-title')}}</p>
                    <p class="sectionbody"> {{trans('estgen.resume')}}</p>
                </div>
            </div>
            <div class="collapse mx-4" id="collapse2">
                <div class="card border-0 card-body text-justify">
                    <p class="card-text font-weight-bold" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('estgen.perfil-title')}}
                    </p>
                    <p class="sectionbody"> {{trans('estgen.student-perfil-1')}}</p>
                    <ul>
                        <li><p> {{trans('estgen.student-perfil-2')}}</p></li>
                        <li><p> {{trans('estgen.student-perfil-3')}}</p></li>
                        <li><p> {{trans('estgen.student-perfil-4')}}</p></li>
                        <li><p> {{trans('estgen.student-perfil-5')}}</p></li>
                        <li><p> {{trans('estgen.student-perfil-6')}}</p></li>
                        <li><p> {{trans('estgen.student-perfil-7')}}</p></li>
                        <li><p> {{trans('estgen.student-perfil-8')}}</p></li>
                        <li><p> {{trans('estgen.student-perfil-9')}}</p></li>
                        <li><p> {{trans('estgen.student-perfil-10')}}</p></li>
                        <li><p> {{trans('estgen.student-perfil-11')}}</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-flex m-4 card border-0 card-body text-left">
            <h5 class="font-weight-bold fs-5">{{trans('engineering.deaneng-info-title')}}</h5>
            <div class="flex-row">
                <p><b>{{trans('engineering.deaneng-info-etitle')}}</b></p>
                <p id="name-funders">&nbsp {{trans('estgen.info-mail')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('engineering.deaneng-info-teltit')}}</b></p>
                <p id="name-funders">&nbsp{{trans('engineering.deaneng-info-telf')}}</p>
            </div>
            <div class="flex-row">
                <p><b>{{trans('engineering.deaneng-info-schedtit')}}</b></p>
                <p id="name-funders">&nbsp{{trans('engineering.deaneng-info-sched')}}</p>
            </div>
        </div>
    </div>
@endsection
