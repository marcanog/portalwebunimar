@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/deansoffice/CEYS/administration_mention_csf.jpg')}}" width="100%">
        </div>
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}"><h4>Administración Mención Criptomonedas y Sistemas Financieros</h4>
            </div>
        </div>
        {{--<div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">{{trans('degrees/humarte/psicology.pensums')}}</h5>
                </div>
                <div class="card-text">
                    <ul>
                        @for($i = 0 ; $i < count($pensum) ; $i++)
                            <li><a href={{ asset("storage/Pensum/".$folderName."/".$pensum[$i]->date."/".$pensum[$i]->file) }} target="_blank">{{($pensum[$i]->name)}} - {{($pensum[$i]->date)}}</a></li>
                        @endfor
                    </ul>
                </div>
            </div>
        </div>--}}
        <div class="banner-main my-4">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/construction.jpg')}}" width="100%">
        </div>
    </div>
@endsection
