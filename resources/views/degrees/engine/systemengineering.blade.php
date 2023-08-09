@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/deansoffice/ing/ing.jpg')}}" width="100%">
        </div>
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}"><h4>{{trans('degrees/engine/sysengineering.title')}}</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/engine/sysengineering.career_profile')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>{{trans('degrees/engine/sysengineering.c_profile_1')}}</p>
                    <p>{{trans('degrees/engine/sysengineering.c_profile_2')}}</p>
                    <p>{{trans('degrees/engine/sysengineering.c_profile_3')}}</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/engine/sysengineering.to_whom')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>{{trans('degrees/engine/sysengineering.to_whom_1')}}</p></li>
                        <li><p>{{trans('degrees/engine/sysengineering.to_whom_2')}}</p></li>
                        <li><p>{{trans('degrees/engine/sysengineering.to_whom_3')}}</p></li>
                        <li><p>{{trans('degrees/engine/sysengineering.to_whom_4')}}</p></li>
                        <li><p>{{trans('degrees/engine/sysengineering.to_whom_5')}}</p></li>
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/engine/sysengineering.career_objs')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>{{trans('degrees/engine/sysengineering.objs_1')}}</p></li>
                        <li><p>{{trans('degrees/engine/sysengineering.objs_2')}}</p></li>
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/engine/sysengineering.jobs')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>{{trans('degrees/engine/sysengineering.jobs_1')}}</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/engine/sysengineering.competences')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>{{trans('degrees/engine/sysengineering.competences_1')}}</p>
                    <p>{{trans('degrees/engine/sysengineering.competences_2')}}</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/engine/sysengineering.research_lines')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        @for($i = 0 ; $i < count($research_lines) ; $i++)
                            <li><a href={{ asset("storage/Lineamiento/".$folderName."/".$research_lines[$i]->date."/".$research_lines[$i]->file) }} target="_blank">{{($research_lines[$i]->name)}} - {{($research_lines[$i]->date)}}</a></li>
                        @endfor
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/engine/sysengineering.pensums')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        @for($i = 0 ; $i < count($pensum) ; $i++)
                            <li><a href={{ asset("storage/Pensum/".$folderName."/".$pensum[$i]->date."/".$pensum[$i]->file) }} target="_blank">{{($pensum[$i]->name)}} - {{($pensum[$i]->date)}}</a></li>
                        @endfor
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/engine/sysengineering.mode')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>{{trans('degrees/engine/sysengineering.mode_1')}}</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/engine/sysengineering.title_obt')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p class="font-weight-bold">{{trans('degrees/engine/sysengineering.title_obt_1')}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
