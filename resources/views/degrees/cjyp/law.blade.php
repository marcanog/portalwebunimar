@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/deansoffice/CJYP/cjyp.jpg')}}" width="100%">
        </div>
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}"><h4>{{trans('degrees/cjyp/law.title')}}</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/cjyp/law.career_profile')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>{{trans('degrees/cjyp/law.c_profile_1')}}</p></li>
                        <li><p>{{trans('degrees/cjyp/law.c_profile_2')}}</p></li>
                        <li><p>{{trans('degrees/cjyp/law.c_profile_3')}}</p></li>
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/cjyp/law.to_whom')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>{{trans('degrees/cjyp/law.to_whom_1')}}</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/cjyp/law.career_objs')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>{{trans('degrees/cjyp/law.objs_1')}}</p></li>
                        <li><p>{{trans('degrees/cjyp/law.objs_2')}}</p></li>
                        <li><p>{{trans('degrees/cjyp/law.objs_3')}}</p></li>
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/cjyp/law.jobs')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>{{trans('degrees/cjyp/law.jobs_1')}}</p>
                    <p>{{trans('degrees/cjyp/law.jobs_2')}}</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/cjyp/law.competences')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>{{trans('degrees/cjyp/law.competences_1')}}</p></li>
                        <li><p>{{trans('degrees/cjyp/law.competences_2')}}</p></li>
                        <li><p>{{trans('degrees/cjyp/law.competences_3')}}</p></li>
                        <li><p>{{trans('degrees/cjyp/law.competences_4')}}</p></li>
                    </ul>
                </div>
            </div>
            <div  class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/cjyp/law.research_lines')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        @for($i = 0 ; $i < count($research_lines) ; $i++)
                            <li><a href={{ asset("storage/Lineamiento/".$folderName."/".$research_lines[$i]->date."/".$research_lines[$i]->file) }} target="_blank">{{($research_lines[$i]->name)}} - {{($research_lines[$i]->date)}}</a></li>
                        @endfor
                    </ul>
                </div>
            </div>
            <div  class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/cjyp/law.pensums')}}</h5>
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
                    <h5 id="name-funders">{{trans('degrees/cjyp/law.mode')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>{{trans('degrees/cjyp/law.mode_1')}}</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/cjyp/law.title_obt')}}</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p class="font-weight-bold">{{trans('degrees/cjyp/law.title_obt_1')}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
