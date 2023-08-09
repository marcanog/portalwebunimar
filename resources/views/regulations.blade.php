@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/norms/norms.jpg')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/norms/norms-02.png')}}">
                <h4>{{trans('regulations.title')}}</h4>
            </div>
        </div>
        {{--contents information--}}
        <div class="content justify-content-around my-4">
            <div class="row justify-content-around">
                {{--Normative--}}
                <div class="col-sm-4 col-md-4" data-toggle="collapse" href="#collapse-normatives"
                     role="button" aria-expanded="false" aria-controls="collapse-normatives">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/norms/norms-04.png')}}" width="80%">
{{--                        <span>{{trans('regulations.regulations')}}</span>--}}
                    </a>
                </div>
                {{--Manuals--}}
                <div class="col-sm-4 col-md-4" data-toggle="collapse" href="#collapse-manuals"
                     role="button" aria-expanded="false" aria-controls="collapse-manuals">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/norms/norms-05.png')}}" width="80%">
{{--                        <span>{{trans('regulations.manuals')}}</span>--}}
                    </a>
                </div>
            </div>
        </div>
        {{--card bodies normatives--}}
        @if(count($normatives) != 0)
            <div class="card-body m-4 text-justify collapse" id="collapse-normatives">
                <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                    Listado de Normativas
                </p>
                <div class="content-areas">
                    <div class="card border-0 card-body">
                        <div class="sectionbody">
                            <ul>
                                @foreach($normatives as $normative)
                                    <li>
                                        <a href={{ asset("storage/Normativa/".$normative->date."/".$normative->file) }} target="_blank">{{($normative->name)}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        {{--card bodies normatives--}}
        @if(count($manuals) != 0)
            <div class="card-body m-4 text-justify collapse" id="collapse-manuals">
                <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                    Listado de Manuales
                </p>
                <div class="content-areas">
                    <div class="card border-0 card-body">
                        <div class="sectionbody">
                            <ul>
                                @foreach($manuals as $manual)
                                    <li>
                                        <a href={{ asset("storage/Manual/".$manual->date."/".$manual->file) }} target="_blank">{{($manual->name)}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
