@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/deansoffice/CEYS/ceys.jpg')}}" width="100%">
        </div>
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}"><h4>{{trans('degrees/ceys/administration.title')}}</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4"> {{--Perfil career--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/ceys/administration.career_profile')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>{{trans('degrees/ceys/administration.c_profile_1')}}</p>
                    <p>{{trans('degrees/ceys/administration.c_profile_2')}}</p>
                    <p>{{trans('degrees/ceys/administration.c_profile_3')}}</p>
                </div>
            </div> {{-- to whom--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/ceys/administration.to_whom')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>{{trans('degrees/ceys/administration.to_whom_1')}}</p></li>
                        <li><p>{{trans('degrees/ceys/administration.to_whom_2')}}</p></li>
                        <li><p>{{trans('degrees/ceys/administration.to_whom_3')}}</p></li>
                    </ul>
                </div>
            </div> {{--objetives--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/ceys/administration.career_objs')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>{{trans('degrees/ceys/administration.objs_1')}}</p></li>
                        <li><p>{{trans('degrees/ceys/administration.objs_2')}}</p></li>
                        <li><p>{{trans('degrees/ceys/administration.objs_3')}}</p></li>
                    </ul>
                </div>
            </div> {{--oportunities jobs--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/ceys/administration.jobs')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <ul>
                        <li><p>{{trans('degrees/ceys/administration.jobs_1')}}</p></li>
                        <li><p>{{trans('degrees/ceys/administration.jobs_2')}}</p></li>
                        <li><p>{{trans('degrees/ceys/administration.jobs_3')}}</p></li>
                        <li><p>{{trans('degrees/ceys/administration.jobs_4')}}</p></li>
                        <li><p>{{trans('degrees/ceys/administration.jobs_5')}}</p></li>
                        <li><p>{{trans('degrees/ceys/administration.jobs_6')}}</p></li>
                    </ul>
                </div>
            </div>{{--competences--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/ceys/administration.competences')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <ul>
                        <li><p>{{trans('degrees/ceys/administration.competences_1')}}</p></li>
                        <li><p>{{trans('degrees/ceys/administration.competences_2')}}</p></li>
                        <li><p>{{trans('degrees/ceys/administration.competences_3')}}</p></li>
                        <li><p>{{trans('degrees/ceys/administration.competences_4')}}</p></li>
                        <li><p>{{trans('degrees/ceys/administration.competences_5')}}</p></li>
                        <li><p>{{trans('degrees/ceys/administration.competences_6')}}</p></li>
                        <li><p>{{trans('degrees/ceys/administration.competences_7')}}</p></li>
                        <li><p>{{trans('degrees/ceys/administration.competences_8')}}</p></li>
                    </ul>
                </div>
            </div>{{--research lines--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/ceys/administration.research_lines')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        @for($i = 0 ; $i < count($research_lines) ; $i++)
                            <li><a href={{ asset("storage/Lineamiento/".$folderName."/".$research_lines[$i]->date."/".$research_lines[$i]->file) }} target="_blank">{{($research_lines[$i]->name)}} - {{($research_lines[$i]->date)}}</a></li>
                        @endfor
                    </ul>
                </div>
            </div> {{--pensums--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/ceys/administration.pensums')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        @for($i = 0 ; $i < count($pensum) ; $i++)
                            <li><a href={{ asset("storage/Pensum/".$folderName."/".$pensum[$i]->date."/".$pensum[$i]->file) }} target="_blank">{{($pensum[$i]->name)}} - {{($pensum[$i]->date)}}</a></li>
                        @endfor
                    </ul>
                </div>
            </div> {{--studies mode--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/ceys/administration.mode')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>{{trans('degrees/ceys/administration.mode_1')}}</p>
                </div>
            </div> {{--title prom--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/ceys/administration.title_obt')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p class="font-weight-bold">{{trans('degrees/ceys/administration.title_obt_1')}}</p>
                    <p class="font-weight-bold">{{trans('degrees/ceys/administration.title_obt_2')}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
