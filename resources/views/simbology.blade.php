@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/Banner1.jpg')}}">
        </div>
        <div class="content mt-4">
            <div class="row justify-content-center">
                <div class="btn bg-greey btn-lg text-wrap m-4 border-2 w-auto" type="button">
                    <a class="text-decoration-none" href="{{url('')}}">
                        <span class="small font-weight-bold">{{trans('simbology.simbology')}}</span>
                    </a>
                </div>
                <div class="btn bg-greey btn-lg text-wrap m-4 border-2 w-auto" type="button">
                    <a class="text-decoration-none" href="{{url('')}}">
                        <span class="small font-weight-bold">{{trans('simbology.temp-works')}}</span>
                    </a>
                </div>
                <div class="btn bg-greey btn-lg text-wrap m-4 border-2 w-auto" type="button">
                    <a class="text-decoration-none" href="{{URL('')}}">
                        <span class="small font-weight-bold">{{trans('simbology.temp-pptx')}}</span></a>
                </div>
                <div class="btn bg-greey btn-lg text-wrap m-4 border-2 w-auto" type="button">
                    <a class="text-decoration-none" href="{{URL('')}}">
                        <span class="small font-weight-bold">{{trans('simbology.logo-serv')}}</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="content">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/Banner2.jpg')}}" width="100%">
        </div>
        <div class="content">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/Banner3.jpg')}}" width="100%">
        </div>
        <div class="content">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/Banner4.jpg')}}" width="100%">
        </div>
        <div class="content flex-sm-column justify-content-center my-4">
            <div class="fs-6 font-weight-bold">
                <span>{{trans('simbology.donw-man')}}</span>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-4">
                    <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-02.png')}}" width="25%" style="margin: 0 auto;">
                </div>
            </div>
        </div>
        <div class="content">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/Banner5.jpg')}}" width="100%">
        </div>
        <div class="d-flex justify-content-center m-4"> {{--buttons download formats--}}
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-4 m-2">
                    <div class="fs-6 font-weight-bold">
                        <span>{{trans('simbology.donw-1')}}</span>
                    </div>
                    <div class="justify-content-center m-4">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-02.png')}}" width="25%" style="margin: 0 auto;">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-03.png')}}" width="25%" style="margin: 0 auto;">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-04.png')}}" width="25%" style="margin: 0 auto;">
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 m-2">
                    <div class="fs-6 font-weight-bold">
                        <span>{{trans('simbology.donw-2')}}</span>
                    </div>
                    <div class="justify-content-center m-4">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-02.png')}}" width="25%" style="margin: 0 auto;">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-03.png')}}" width="25%" style="margin: 0 auto;">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-04.png')}}" width="25%" style="margin: 0 auto;">
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 m-4"> {{-- Download Internal Formats --}}
                    <a href="#"><img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-07.png')}}" width="70%"></a>
                </div>
            </div>
        </div>
        <div class="content my-4">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/Banner6.jpg')}}" width="100%">
        </div>
        <div class="content my-4">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/Banner7.jpg')}}" width="100%">
        </div>
        <div class="content my-4">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/Banner8.jpg')}}" width="100%">
        </div>
        <div class="content flex-sm-column my-4">
            <div class="font-weight-bold fs-6">
                <span>{{trans('simbology.down-hinm')}}</span>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-4">
                    <a href="#" class="btn-link btn-lg" tabindex="-1" role="button" aria-disabled="true">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-02.png')}}" width="25%" style="margin: 0 auto;">
                    </a>
                </div>
            </div> {{-- Download Unimar Anthem --}}
        </div>
        <div class="content my-4">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/Banner9.jpg')}}" width="100%">
        </div>
        <div class="content my-4">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-4">
                    <a href="https://fonts.google.com/download?family=Montserrat" class="btn-link btn-lg" tabindex="-1" role="button" aria-disabled="true">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-05.png')}}" width="70%" style="margin: 0 auto;">
                    </a>
                </div>
            </div>
        </div>
        <div class="content my-4">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/Banner10.jpg')}}" width="100%">
        </div>
        <div class="content my-4">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/Banner11.jpg')}}" width="100%">
        </div>
        <div class="content my-4">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/Banner12.jpg')}}" width="100%">
        </div>
        <div class="content my-4">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/Banner13.jpg')}}" width="100%">
        </div>
        <div class="content justify-content-center flex-column m-4">
            <div class="row justify-content-center m-2">
                <div class="fs-6 font-weight-bold">
                    <span>{{trans('simbology.down-gral')}}</span>
                </div>
                <div class="col-sm-4 col-md-4 my-2">
                    <a href="#" class="btn-link btn-lg" tabindex="-1" role="button" aria-disabled="true">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-06.png')}}" width="25%" style="margin: 0 auto;">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-4 my-2">
                    <a href="#" class="btn-link btn-lg" tabindex="-1" role="button" aria-disabled="true">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-07.png')}}" width="70%">
                    </a>
                </div>
            </div>
        </div>
        <div class="content my-4">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/Banner14.jpg')}}" width="100%">
        </div>
        <div class="content justify-content-center m-4">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-4 m-2">
                    <a href="#" class="btn-link btn-lg" tabindex="-1" role="button" aria-disabled="true">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-08.png')}}" width="50%" style="margin: 0 auto;">
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 m-2">
                    <a href="#" class="btn-link btn-lg" tabindex="-1" role="button" aria-disabled="true">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-09.png')}}" width="50%" style="margin: 0 auto;">
                    </a>
                </div>
            </div>
        </div>
        <div class="content my-4">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/Banner15.jpg')}}" width="100%">
        </div>
        <div class="content my-4">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/Banner16.jpg')}}" width="100%">
        </div>
        <div class="content justify-content-center flex-column m-4">
            <div class="fs-6 font-weight-bold">
                <span>{{trans('simbology.down-guide')}}</span>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-4 m-2">
                    <a href="#"><img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-02.png')}}" width="25%" style="margin: 0 auto;"></a>
                </div>
            </div>
            <div class="fs-6 font-weight-bold m-2">
                <span>{{trans('simbology.down-temp')}}</span>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-4 m-2">
                    <a href="#" class="btn-link btn-lg" tabindex="-1" role="button" aria-disabled="true">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-10.png')}}" width="25%" style="margin: 0 auto;">
                    </a>
                </div>
            </div>
        </div>
        <div class="content my-4">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/Banner17.jpg')}}" width="100%">
        </div>
        <div class="content flex-column my-4">
            <div class="fs-6 font-weight-bold">
                <span>{{trans('simbology.down-format')}}</span>
            </div>
            <div class="row justify-content-center m-4">
                <div class="col-sm-4 col-md-4">
                    <a href="#" class="btn-link btn-lg" tabindex="-1" role="button" aria-disabled="true">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-06.png')}}" width="25%" style="margin: 0 auto;">
                    </a>
                </div>
            </div>
        </div>
        <div class="content my-4">
            <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/Banner18.jpg')}}" width="100%">
        </div>
        <div class="d-flex justify-content-center">
            <div class="text-center fw-bolder m-4" role="button" href="#"
                 style="background-color: #0d4d98; width: 35%; border-radius: 10px; color:#ffffff; padding: 0.35em;">
                <span>{{trans('simbology.serv-logo')}}</span>
            </div>
        </div>
        <div class="d-flex justify-content-center my-4">
            <h5>{{trans('simbology.id-use')}}</h5>
        </div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/qPstA0OWTCQ" title="YouTube video player"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
        <div class="content flex-column my-4">
            <div class="fs-6 font-weight-bold">
                <span>{{trans('simbology.donw-man')}}</span>
            </div>
            <div class="row justify-content-center m-4">
                <div class="col-sm-4 col-md-4">
                    <a href="#">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-02.png')}}" width="25%" style="margin: 0 auto;">
                    </a>
                </div>
            </div>
        </div>
        <div class="content my-4" style="background-color: #39393A;">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-4">
                    <img class="p-4 resize" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-identidy/icons/R-11.png')}}" width="50%">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center flex-column my-4 bg-greey">
            <div class="d-flex justify-content-center m-4">
                <h4 class="font-weight-bolder text-wrap">{{trans('simbology.text-duty')}}</h4>
            </div>
           <div class="d-flex p-4 flex-column">
               <div class="row justify-content-center">
                   <div class="col-sm-4 col-md-4">
                       <p>{{trans('simbology.text-duty-2')}}</p>
                   </div>
                   <span class="fs-6 font-weight-bold" style="color: #0d4d98;">{{trans('simbology.mail-PEV')}}</span>
               </div>
           </div>
        </div>
    </div>
@endsection
