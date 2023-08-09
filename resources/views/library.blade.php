@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{asset('./image/banners/'.trans('commons.lang-banner').'/library/library.png')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('/image/views/'.trans('commons.lang-banner').'/library/Biblio-13.png')}}" width="100%"><h4>{{trans('library.title')}}</h4>
            </div>
        </div>
        <div class="content mx-4"> {{--introduction--}}
            <div class="card border-0 justify-content-around mx-4">
               <div class="text-justify sectionbody">
                   <p>{{trans('library.intro_1')}}</p>
                   <p>{{trans('library.intro_2')}}</p>
               </div>
            </div>
        </div>
        {{--contens--}}
        <div class="d-inline-flex justify-content-around m-4 content-vext">
            <div class="row justify-content-around">
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                     aria-controls="collapse">
                    <a id="foundbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/library/Biblio-02.png')}}" width="75%">
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
                     aria-controls="collapse2">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/library/Biblio-03.png')}}" width="75%">
                    </a>
                </div>
                <div class="col-sm-4 col-md-4 my-2"
                     data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
                     aria-controls="collapse3">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/library/Biblio-04.png')}}" width="75%">
                    </a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around flex-column" id="contevext">
            <div class="collapse m-4" id="collapse">
                <div class="card border-0 card-body">
                    <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('library.serv_title')}}
                    </p>
                    <ul class="text-justify">
                        <li><p> {{trans('library.serv_1')}}</p></li>
                        <li><p> {{trans('library.serv_2')}}</p></li>
                        <li><p> {{trans('library.serv_3')}}</p></li>
                        <li><p> {{trans('library.serv_3')}}</p></li>
                    </ul>
                </div>
            </div>
            <div class="collapse m-4" id="collapse2">
                <div class="card border-0 card-body">
                    <p class="card-text font-weight-bold text-left" id="name-funders" style="font-size: 1.25rem; font-weight: 600;">
                        {{trans('library.repo_title')}}
                    </p>
                    <div class="d-flex justify-content-center">
                        <div class="col-md-3 col-sm-3 m-2 border-0">
                            <a id="link-subsystem" href="{{url('/')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/library/Biblio-05.png')}}" width="80%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 m-2 border-0">
                            <a id="link-subsystem" href="{{url('/')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/library/Biblio-06.png')}}" width="80%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 m-2 border-0">
                            <a id="link-subsystem" href="{{url('/')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/library/Biblio-07.png')}}" width="80%">
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3 m-2 border-0">
                            <a id="link-subsystem" href="{{url('/')}}">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/library/Biblio-08.png')}}" width="80%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse mb-4" id="collapse3">
                    <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/library/unimarcientifica.jpg')}}" width="100%">
                    <div class="d-grid col-md-4 mx-auto my-4">
                        <a class="rounded p-2 fw-bold" role="button" style="background-color:#274952; color:#FFF;" href="https://unimarcientifica/revista">{{trans('library.in_unimarcientifica')}}</a>
                    </div>
            </div>
        </div>
        <div class="content">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/library/library_card.jpg')}}" width="100%">
            <div class="d-grid col-md-4 mx-auto my-4">
                <a class="rounded p-2 fw-bold" role="button" data-toggle="modal" data-target="#benefitscard" style="background-color:#0d4d98; color:#FFF;" href="#">{{trans('library.benefits_card')}}</a>
            </div>
        </div>
    {{-- library carnet --}}
        <!--Modal campus map-->
        <div class="modal fade" id="benefitscard">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <!-- dialog header -->
                    <div class="modal-header">
                        <h4 class="modal-title">{{trans('library.benefits_card')}}</h4>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <!-- dialog content -->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/library/inf_library01.jpg')}}" width="100%" alt="{{trans('library.benefits_card')}}">
                            </div>
                            <div class="col-6">
                                <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/library/inf_library02.jpg')}}" width="100%" alt="{{trans('library.benefits_card')}}">
                            </div>
                    </div>
                    <!-- dialog footer -->
                    <footer class="modal-footer">
                        <span class= "footermodal blockquote-footer" style="color:#FFF;">{{trans('ourconcept.our-modal-footer')}}</span>
                    </footer>
                </div>
            </div>
        </div>
    </div>
@endsection
