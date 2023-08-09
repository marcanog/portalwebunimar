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
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}"><h4>{{trans('degrees/ceys/publicaccounting.title')}}</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4"> {{--profile--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/ceys/publicaccounting.career_profile')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>{{trans('degrees/ceys/publicaccounting.c_profile_1')}}</p>
                    <p>{{trans('degrees/ceys/publicaccounting.c_profile_2')}}</p>
                    <p>{{trans('degrees/ceys/publicaccounting.c_profile_3')}}</p>
                </div>
            </div> {{--to whom--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/ceys/publicaccounting.to_whom')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>{{trans('degrees/ceys/publicaccounting.to_whom_1')}}</p></li>
                        <li><p>{{trans('degrees/ceys/publicaccounting.to_whom_2')}}</p></li>
                        <li><p>{{trans('degrees/ceys/publicaccounting.to_whom_3')}}</p></li>
                        <li><p>{{trans('degrees/ceys/publicaccounting.to_whom_4')}}</p></li>
                    </ul>
                </div>
            </div> {{--objetives--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/ceys/publicaccounting.career_objs')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>{{trans('degrees/ceys/publicaccounting.objs_1')}}</p></li>
                        <li><p>{{trans('degrees/ceys/publicaccounting.objs_2')}}</p></li>
                    </ul>
                </div>
            </div> {{--oportunities jobs--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/ceys/publicaccounting.jobs')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>{{trans('degrees/ceys/publicaccounting.jobs_1')}}</p></li>
                        <li><p>{{trans('degrees/ceys/publicaccounting.jobs_2')}}</p></li>
                        <li><p>{{trans('degrees/ceys/publicaccounting.jobs_3')}}</p></li>
                        <li><p>{{trans('degrees/ceys/publicaccounting.jobs_4')}}</p></li>
                        <li><p>{{trans('degrees/ceys/publicaccounting.jobs_5')}}</p></li>
                        <li><p>{{trans('degrees/ceys/publicaccounting.jobs_6')}}</p></li>
                        <li><p>{{trans('degrees/ceys/publicaccounting.jobs_7')}}</p></li>
                        <li><p>{{trans('degrees/ceys/publicaccounting.jobs_8')}}</p></li>
                    </ul>
                </div>
            </div>{{--compentences--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/ceys/publicaccounting.competences')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>{{trans('degrees/ceys/publicaccounting.competences_1')}}</p></li>
                        <li><p>{{trans('degrees/ceys/publicaccounting.competences_2')}}</p></li>
                        <li><p>{{trans('degrees/ceys/publicaccounting.competences_3')}}</p></li>
                        <li><p>{{trans('degrees/ceys/publicaccounting.competences_4')}}</p></li>
                        <li><p>{{trans('degrees/ceys/publicaccounting.competences_5')}}</p></li>
                        <li><p>{{trans('degrees/ceys/publicaccounting.competences_6')}}</p></li>
                        <li><p>{{trans('degrees/ceys/publicaccounting.competences_7')}}</p></li>
                        <li><p>{{trans('degrees/ceys/publicaccounting.competences_8')}}</p></li>
                    </ul>
                </div>
            </div> {{--research lines--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/ceys/publicaccounting.research_lines')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        @for($i = 0 ; $i < count($research_lines) ; $i++)
                            <li><a href={{ asset("storage/Lineamiento/".$folderName."/".$research_lines[$i]->date."/".$research_lines[$i]->file) }} target="_blank">{{($research_lines[$i]->name)}} - {{($research_lines[$i]->date)}}</a></li>
                        @endfor
                    </ul>
                </div>
            </div>{{--pensums--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/ceys/publicaccounting.pensums')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        @for($i = 0 ; $i < count($pensum) ; $i++)
                            <li><a href={{ asset("storage/Pensum/".$folderName."/".$pensum[$i]->date."/".$pensum[$i]->file) }} target="_blank">{{($pensum[$i]->name)}} - {{($pensum[$i]->date)}}</a></li>
                        @endfor
                    </ul>
                </div>
            </div>{{--mode--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/ceys/publicaccounting.mode')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>{{trans('degrees/ceys/publicaccounting.mode_1')}}</p>
                </div>
            </div> {{--prom title--}}
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/ceys/publicaccounting.title_obt')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p class="font-weight-bold">{{trans('degrees/ceys/publicaccounting.title_obt_1')}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
