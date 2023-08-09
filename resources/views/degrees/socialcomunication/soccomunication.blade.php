@extends('layouts.layout')

@section('content')
    <div class="content">
{{--        banner --}}
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/careers/socialucsar.jpg')}}" width="100%">
        </div>
{{--        --}}{{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}"><h4>{{trans('degrees/soccomunication/soccom.title')}}</h4>
            </div>
        </div>
{{-- coordinations information--}}
        <div class="d-flex justify-content-around flex-column">
            <div class="card-group">
                <div class="card border-0 m-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/avatar.png')}}" alt="{{trans('vacademy.vacad-atitle')}}" width="100%" style="max-width: 8em; height: 10.25em; background-color: #336699;" alt="{{trans('degrees/soccomunication/soccom.role')}}" style="max-width: 8em; height: 10.25em;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('degrees/soccomunication/soccom.coord_name')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('degrees/soccomunication/soccom.role')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('degrees/soccomunication/soccom.coord_mail')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 m-4 invisible">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="rounded" src="{{URL::asset('/image/personal/Humarte/greizy.jpg')}}" alt="{{trans('estgen.asist-role')}}" style="max-width: 8em; height: 10.25em; background-color: #336699;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-left">
                                <h3 class="card-title fs-6">{{trans('degrees/soccomunication/soccom.asist-name')}}</h3>
                                <p class="card-text fs-6 font-weight-bold">{{trans('degrees/soccomunication/soccom.asist-role')}}</p>
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('degrees/soccomunication/soccom.asist-mail')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          {{--information--}}
        <div class="content m-4"> {{--profile--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/soccomunication/soccom.career_profile')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>{{trans('degrees/soccomunication/soccom.c_profile_1')}}</p></li>
                        <li><p>{{trans('degrees/soccomunication/soccom.c_profile_2')}}</p></li>
                        <li><p>{{trans('degrees/soccomunication/soccom.c_profile_3')}}</p></li>
                        <li><p>{{trans('degrees/soccomunication/soccom.c_profile_4')}}</p></li>
                    </ul>
                </div>
            </div> {{--to whom--}}
{{--            <div class="card text-black text-justify border-0 m-2">--}}
{{--                <div class="card-text font-weight-bold">--}}
{{--                    <h5 id="name-funders">{{trans('degrees/soccomunication/soccom.to_whom')}}</h5>--}}
{{--                </div>--}}
{{--                <div class="card-text">--}}
{{--                    <ul>--}}
{{--                        <li><p>{{trans('degrees/soccomunication/soccom.to_whom_1')}}</p></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div> --}}{{--objetives--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/soccomunication/soccom.career_objs')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>{{trans('degrees/soccomunication/soccom.objs_1')}}</p></li>
                        <li><p>{{trans('degrees/soccomunication/soccom.objs_2')}}</p></li>
                    </ul>
                </div>
            </div> {{--oportunities jobs--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/soccomunication/soccom.jobs')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>{{trans('degrees/soccomunication/soccom.jobs_1')}}</p></li>
                        <li><p>{{trans('degrees/soccomunication/soccom.jobs_2')}}</p></li>
                        <li><p>{{trans('degrees/soccomunication/soccom.jobs_3')}}</p></li>
                        <li><p>{{trans('degrees/soccomunication/soccom.jobs_4')}}</p></li>
                    </ul>
                </div>
            </div>{{--compentences--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/soccomunication/soccom.competences')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>{{trans('degrees/soccomunication/soccom.competences_1')}}</p></li>
                        <li><p>{{trans('degrees/soccomunication/soccom.competences_2')}}</p></li>
                        <li><p>{{trans('degrees/soccomunication/soccom.competences_3')}}</p></li>
                        <li><p>{{trans('degrees/soccomunication/soccom.competences_4')}}</p></li>
                        <ul>
                            <li><p>{{trans('degrees/soccomunication/soccom.competences_5')}}</p></li>
                            <li><p>{{trans('degrees/soccomunication/soccom.competences_6')}}</p></li>
                            <li><p>{{trans('degrees/soccomunication/soccom.competences_7')}}</p></li>
                        </ul>
                    </ul>
                </div>
            </div> {{--research lines--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/soccomunication/soccom.research_lines')}}</h5>
                </div>
                <div class="card-text">
                     {{--Contenido en pdf lineas de investigación--}}
                    <ul>
                        @for($i = 0 ; $i < count($research_lines) ; $i++)
                            <li><a href={{ asset("storage/Lineamiento/".$folderName."/".$research_lines[$i]->date."/".$research_lines[$i]->file) }} target="_blank">{{($research_lines[$i]->name)}} - {{($research_lines[$i]->date)}}</a></li>
                        @endfor
                    </ul>
                </div>
            </div>
            {{--pensums--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/soccomunication/soccom.pensums')}}</h5>
                </div>
                <div class="card-text">
                    {{--Contenido en pdf Pensums--}}
                    <ul>
                        @for($i = 0 ; $i < count($pensum) ; $i++)
                            <li><a href={{ asset("storage/Pensum/".$folderName."/".$pensum[$i]->date."/".$pensum[$i]->file) }} target="_blank">{{($pensum[$i]->name)}} - {{($pensum[$i]->date)}}</a></li>
                        @endfor
                    </ul>
                </div>
            </div>{{--mode--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/soccomunication/soccom.mode')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>{{trans('degrees/soccomunication/soccom.mode_1')}}</p>
                </div>
            </div> {{--prom title--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/soccomunication/soccom.title_obt')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p class="font-weight-bold">{{trans('degrees/soccomunication/soccom.title_obt_1')}}</p>
                    <p class="font-weight-bold">{{trans('degrees/soccomunication/soccom.title_obt_2')}}</p>
                    <p class="font-weight-bold">{{trans('degrees/soccomunication/soccom.title_obt_3')}}</p>
                </div>
            </div>
        </div>
{{--    </div>--}}
{{--        <div class="banner-main my-4">--}}
{{--            <img src="{{URL::asset('/image/banners/'.trans('commons.lang-banner').'/construction.jpg')}}">--}}
{{--        </div>--}}
    </div>
@endsection
