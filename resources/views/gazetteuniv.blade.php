@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/official_pubs/officialpubs.jpg')}}" width="100%">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/officialpubs/cont-02.png')}}">
                <h4>{{trans('gazzette.title')}}</h4>
            </div>
        </div>
        {{--contents information--}}
        @if(count($gazettes) != 0)
            <div class="justify-content-around row">
                @php
                    $year = 0;
                @endphp
                @foreach($gazettes as $gazette)
                    @if($year != $gazette->date)
                        @php
                            $year = $gazette->date;
                        @endphp
                        <div class="col-sm-4 col-md-3 my-2 text-center" data-toggle="collapse" href={{"#gazette-$year"}} role="button" aria-expanded="false" aria-controls={{"#gazette-$year"}}>
                            <a id="campusbtn">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/officialpubs/cont-07.png')}}" width="80%">
                                <p class="fs-6 font-weight-bold text-center" id="name-funders">{{$year}}</p>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="justify-content-around" id="contevac">
                @php
                    $year = $gazettes[0]->date;
                @endphp
                <div class="collapse card-body mx-4 text-justify" id="{{"gazette-$year"}}">
                    <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{"Año $year"}}
                    </p>
                    <div class="row justify-content-around">
                        <div>
                            <ul>
                                @for($i = 0 ; $i < count($gazettes) ; $i++)
                                    @if($year != $gazettes[$i]->date)
                                        @php
                                            $year = $gazettes[$i]->date;
                                        @endphp
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse card-body mx-4 text-justify" id="{{"gazette-$year"}}">
                                            <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                                                {{"Año $year"}}
                                            </p>
                                            <div class="row justify-content-around">
                                                <div>
                                                    <ul>
                                    @endif
                                    <li>
                                        <a href={{ asset("storage/Gaceta/".$gazettes[$i]->date."/".$gazettes[$i]->file) }} target="_blank">{{($gazettes[$i]->name)}} (trimestre {{($gazettes[$i]->trimester)}})</a>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

@endsection
