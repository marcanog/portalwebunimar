@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/our-funders/founders.jpg')}}">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-org/Org-02.png')}}">
                <h4>{{trans('org.organizat')}}</h4>
            </div>
        </div>
        <div class="d-flex justify-content-center mb-4 mx-4">
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-3 border-0 my-2" data-toggle="collapse"
                     href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
                    <a id="foundbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-org/Org-03.png')}}" width="100%">
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 border-0 my-2" data-toggle="collapse"
                     href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                    <a id="campusbtn">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-org/Org-04.png')}}" width="100%">
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 border-0 my-2">
                    <a id="campusbtn btn" type="nav-link" style="cursor: pointer" data-toggle="modal" data-target="#campus">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-org/Org-05.png')}}" width="100%">
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 border-0 my-2">
                    <a id="orgbtn" type="nav-link" style="cursor: pointer" data-toggle="modal" data-target="#organigram">
                        <img src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/our-org/Org-06.png')}}" width="100%">
                    </a>
                </div>
            </div>
        </div>
        <div class="m-4 collapse" id="collapse">
            <p class="card-title titlefound text-left">{{trans('org.superior-council')}}</p>
                <div class="card-group justify-content-around">
                    <div class="row justify-content-center">
                        <div class="col-sm-4 col-md-4" role="button" data-toggle="collapse" href="#multiCollapse1"
                             aria-expanded="false" aria-controls="multiCollapse1">
                            <div class="card border-0" id="cardauthor">
                                <img class="card-img-top" id="imgcrd" src="{{URL::asset('./image/founders/pedrocabello.jpg')}}" alt="{{trans('org.a-peter-title')}}">
                                <div class="card-title w-100 rounded-pill bg-greey">
                                    <p class="font-weight-bold" id="name-funders">{{trans('org.a-peterc')}}</p>
                                    <p style="font-size: 0.65em">{{trans('org.a-peter-title')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4" data-toggle="collapse" href="#multiCollapse2" role="button"
                             aria-expanded="false" aria-controls="multiCollapse2">
                            <div class="card border-0" id="cardauthor">
                                <img class="card-img-top" id="imgcrd" src="{{URL::asset('./image/founders/pedrobeauperthuy.jpg')}}"
                                     alt="{{trans('org.a-peterb-title')}}">
                                <div class="card-title w-100 rounded-pill bg-greey">
                                    <p class="font-weight-bold" id="name-funders">{{trans('org.a-peterb')}}</p>
                                    <p style="font-size: 0.65em">{{trans('org.a-peterb-title')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4" data-toggle="collapse" href="#multiCollapse3" role="button"
                             aria-expanded="false" aria-controls="multiCollapse3">
                            <div class="card border-0" id="cardauthor">
                                <img class="card-img-top" id="imgcrd" src="{{URL::asset('./image/founders/maeugeniamorales.jpg')}}"
                                     alt="Esp. Ma Eugenia Morales">
                                <div class="card-title w-100 rounded-pill bg-greey">
                                    <p class="font-weight-bold" id="name-funders">{{trans('org.a-mamorales')}}</p>
                                    <p style="font-size: 0.65em">{{trans('org.a-mamorales-title')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4" data-toggle="collapse" href="#multiCollapse4" role="button"
                             aria-expanded="false" aria-controls="multiCollapse4">
                            <div class="card border-0" id="cardauthor">
                                <img class="card-img-top" id="imgcrd" src="{{URL::asset('./image/founders/raquelperez.jpg')}}"
                                     alt="Dra. Raquel Pérez">
                                <div class="card-title w-100 rounded-pill bg-greey">
                                    <p class="font-weight-bold" id="name-funders">{{trans('org.a-raquelp')}}</p>
                                    <p style="font-size: 0.65em">{{trans('org.a-raquelp-title')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4" data-toggle="collapse" href="#multiCollapse5" role="button"
                             aria-expanded="false" aria-controls="multiCollapse5">
                            <div class="card border-0" id="cardauthor">
                                <img class="card-img-top" id="imgcrd" src="{{URL::asset('./image/founders/anibalgomez.jpg')}}"
                                     alt="Ing. Anibal Gómez">
                                <div class="card-title w-100 rounded-pill bg-greey">
                                    <p class="font-weight-bold" id="name-funders">{{trans('org.a-anibalg')}}</p>
                                    <p style="font-size: 0.65em">{{trans('org.a-anibalg-title')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-left">
                    <div class="d-flex">
                        {{--infor card P.Cabello--}}
                        <div class="card border-0 mb-4 collapse multi-collapse" id="multiCollapse1">
                            <div class="card card-body" id="card-b-author">
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('org.a-peterc')}}</p>
                                <p>{{trans('org.a-peter-info')}}</p>
                                <p>{{trans('org.a-peter-info-2')}}</p>
                                <p>{{trans('org.a-peter-info-3')}}</p>
                            </div>
                        </div>
                    </div>
                    {{--info card P. Beauperthuy--}}
                    <div class="d-flex">
                        <div class="card border-0 mb-4 collapse multi-collapse" id="multiCollapse2">
                            <div class="card card-body" id="card-b-author">
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('org.a-peterb')}}</p>
                                <p>{{trans('org.a-peterb-info')}}</p>
                                <p>{{trans('org.a-peterb-info-2')}}</p>
                                <p>{{trans('org.a-peterb-info-3')}}</p>
                                <p>{{trans('org.a-peterb-info-4')}}</p>
                                <p>{{trans('org.a-peterb-info-5')}}</p>
                            </div>
                        </div>
                    </div>
                    {{-- info card Ma. Morales --}}
                    <div class="d-flex">
                        <div class="card border-0 mb-4 collapse multi-collapse" id="multiCollapse3">
                            <div class="card card-body" id="card-b-author">
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('org.a-mamorales')}}</p>
                                <p>{{trans('org.a-mamorales-info')}}</p>
                                <p>{{trans('org.a-mamorales-info-2')}}</p>
                                <ul>
                                    <li>{{trans('org.a-mamorales-info-2-1')}}</li>
                                    <li>{{trans('org.a-mamorales-info-2-2')}}</li>
                                    <li>{{trans('org.a-mamorales-info-2-3')}}</li>
                                    <li>{{trans('org.a-mamorales-info-2-4')}}</li>
                                    <li>{{trans('org.a-mamorales-info-2-5')}}</li>
                                    <li>{{trans('org.a-mamorales-info-2-6')}}</li>
                                </ul>
                                <p>{{trans('org.a-mamorales-info-3')}}</p>
                                <ul>
                                    <li>{{trans('org.a-mamorales-info-3-1')}}</li>
                                    <li>{{trans('org.a-mamorales-info-3-2')}}</li>
                                    <li>{{trans('org.a-mamorales-info-3-3')}}</li>
                                    <li>{{trans('org.a-mamorales-info-3-4')}}</li>
                                    <li>{{trans('org.a-mamorales-info-3-5')}}</li>
                                    <li>{{trans('org.a-mamorales-info-3-6')}}</li>
                                    <li>{{trans('org.a-mamorales-info-3-7')}}</li>
                                    <li>{{trans('org.a-mamorales-info-3-8')}}</li>
                                    <li>{{trans('org.a-mamorales-info-3-9')}}</li>
                                </ul>
                                <p>{{trans('org.a-mamorales-info-4')}}</p>
                            </div>
                        </div>
                    </div>
                    {{-- Info card R. Perez--}}
                    <div class="d-flex">
                        <div class="card border-0 mb-4 collapse multi-collapse" id="multiCollapse4">
                            <div class="card card-body" id="card-b-author">
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('org.a-raquelp')}}</p>
                                <p>{{trans('org.a-raquelp-info')}}</p>
                                <p>{{trans('org.a-raquelp-info-2')}}</p>
                                <p>{{trans('org.a-raquelp-info-3')}}</p>
                                <p>{{trans('org.a-raquelp-info-4')}}</p>
                            </div>
                        </div>
                    </div>
                    {{-- info card A. Gomez--}}
                    <div class="d-fex">
                        <div class="card border-0 mb-4 collapse multi-collapse" id="multiCollapse5">
                            <div class="card card-body" id="card-b-author">
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('org.a-anibalg')}}</p>
                                <p>{{trans('org.a-anibalg-info')}}</p>
                                <p>{{trans('org.a-anibalg-info-2')}}</p>
                                <p>{{trans('org.a-anibalg-info-3')}}</p>
                                <ul>
                                    <li>{{trans('org.a-anibalg-info-3-1')}}</li>
                                    <li>{{trans('org.a-anibalg-info-3-2')}}</li>
                                    <li>{{trans('org.a-anibalg-info-3-3')}}</li>
                                </ul>
                                <p>{{trans('org.a-anibalg-info-4')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="m-4 collapse" id="collapse2">
            <p class="titlefound text-justify">{{trans('org.university-council')}}</p>
            <div class="justify-content-center">
                <div class="card-group justify-content-around">
                    <div class="row justify-content-center">
                        <div class="col-sm-4 col-md-4" role="button" data-toggle="collapse" href="#multiCollapse6"
                             aria-expanded="false" aria-controls="multiCollapse6">
                            <div class="card border-0" id="cardauthor">
                                <img class="card-img-top" id="imgcrd" src="{{URL::asset('./image/csuperior/rectora.jpg')}}"
                                     alt="{{trans('org.cs-rector-title')}}">
                                <div class="card-title w-100 rounded-pill bg-greey">
                                    <p class="font-weight-bold" id="name-funders">{{trans('org.cs-rector')}}</p>
                                    <p style="font-size: 0.65em">{{trans('org.cs-rector-title')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4" data-toggle="collapse" href="#multiCollapse7" role="button"
                             aria-expanded="false" aria-controls="multiCollapse7">
                            <div class="card border-0" id="cardauthor">
                                <img class="card-img-top" id="imgcrd" src="{{URL::asset('./image/csuperior/vicerectoracad.jpg')}}"
                                     alt="{{trans('org.cs-vice-chancellor-title')}}">
                                <div class="card-title w-100 rounded-pill bg-greey">
                                    <p class="font-weight-bold" id="name-funders">{{trans('org.cs-vice-chancellor')}}</p>
                                    <p style="font-size: 0.65em">{{trans('org.cs-vice-chancellor-title')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4" data-toggle="collapse" href="#multiCollapse8" role="button"
                             aria-expanded="false" aria-controls="multiCollapse8">
                            <div class="card border-0" id="cardauthor">
                                <img class="card-img-top" id="imgcrd" src="{{URL::asset('./image/csuperior/vicerectorext.jpg')}}"
                                     alt="{{trans('org.cs-vicerector-ext-title')}}">
                                <div class="card-title w-100 rounded-pill bg-greey">
                                    <p class="font-weight-bold" id="name-funders">{{trans('org.cs-vicerector-ext')}}</p>
                                    <p style="font-size: 0.65em">{{trans('org.cs-vicerector-ext-title')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4" data-toggle="collapse" href="#multiCollapse9" role="button"
                             aria-expanded="false" aria-controls="multiCollapse9">
                            <div class="card border-0" id="cardauthor">
                                <img class="card-img-top" id="imgcrd" src="{{URL::asset('./image/csuperior/secretariageneral.jpg')}}"
                                     alt="{{trans('org.cs-general-secretary-title')}}">
                                <div class="card-title w-100 rounded-pill bg-greey">
                                    <p class="font-weight-bold" id="name-funders">{{trans('org.cs-general-secretary')}}</p>
                                    <p style="font-size: 0.65em">{{trans('org.cs-general-secretary-title')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4" data-toggle="collapse" href="#multiCollapse10" role="button"
                             aria-expanded="false" aria-controls="multiCollapse10">
                            <div class="card border-0" id="cardauthor">
                                <img class="card-img-top" id="imgcrd" src="{{URL::asset('./image/csuperior/dir_administracion.png')}}"
                                     alt="{{trans('org.cs-direction-admin-title')}}">
                                <div class="card-title w-100 rounded-pill bg-greey">
                                    <p class="font-weight-bold" id="name-funders">{{trans('org.cs-direction-admin')}}</p>
                                    <p style="font-size: 0.65em">{{trans('org.cs-direction-admin-title')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-justify">
                    <div class="d-flex">
                        {{--infor Rectora--}}
                        <div class="card border-0 mb-4 collapse multi-collapse" id="multiCollapse6">
                            <div class="card card-body" id="card-b-author">
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('org.cs-rector')}}</p>
                                <p>{{trans('org.cs-rector-info')}}</p>
                                <p>{{trans('org.cs-rector-info-2')}}</p>
                                <p>{{trans('org.cs-rector-info-3')}}</p>
                                <p>{{trans('org.cs-rector-info-4')}}</p>
                            </div>
                        </div>
                    </div>
                    {{--info card Vice Academico--}}
                    <div class="d-flex">
                        <div class="card border-0 mb-4 collapse multi-collapse" id="multiCollapse7">
                            <div class="card card-body" id="card-b-author">
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('org.cs-vice-chancellor')}}</p>
                                <p>{{trans('org.cs-vice-chancellor-info')}}</p>
                                <p>{{trans('org.cs-vice-chancellor-info-2')}}</p>
                                <p>{{trans('org.cs-vice-chancellor-info-3')}}</p>
                                <p>{{trans('org.cs-vice-chancellor-info-4')}}</p>
                                <p>{{trans('org.cs-vice-chancellor-info-5')}}</p>
                            </div>
                        </div>
                    </div>
                    {{-- info card Vice Extensión --}}
                    <div class="d-flex">
                        <div class="card border-0 mb-4 collapse multi-collapse" id="multiCollapse8">
                            <div class="card card-body" id="card-b-author">
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('org.cs-vicerector-ext')}}</p>
                                <p>{{trans('org.cs-vicerector-ext-info')}}</p>
                                <p>{{trans('org.cs-vicerector-ext-info-2')}}</p>
                            </div>
                        </div>
                    </div>
                    {{-- Info card Secretaria General--}}
                    <div class="d-flex">
                        <div class="card border-0 mb-4 collapse multi-collapse" id="multiCollapse9">
                            <div class="card card-body" id="card-b-author">
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('org.cs-general-secretary')}}</p>
                                <p>{{trans('org.cs-general-secretary-info')}}</p>
                                <p>{{trans('org.cs-general-secretary-info-2')}}</p>
                            </div>
                        </div>
                    </div>
                    {{-- info card Administración--}}
                    <div class="d-flex">
                        <div class="card border-0 mb-4 collapse multi-collapse" id="multiCollapse10">
                            <div class="card card-body" id="card-b-author">
                                <p class="card-text font-weight-bold" id="name-funders">{{trans('org.cs-direction-admin')}}</p>
                                <p>{{trans('org.cs-direction-admin-info')}}</p>
                                <p>{{trans('org.cs-direction-admin-info-2')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal campus map-->
        <div class="modal fade" id="campus">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <!-- dialog header -->
                    <div class="modal-header">
                        <h4 class="modal-title">{{trans('org.campus')}}</h4>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <!-- dialog content -->
                    <div class="modal-body">
                       <img src="{{URL::asset('./image/campus-map/campus.png')}}" width="100%" alt="{{trans('org.campus')}}">
                    </div>
                  <!-- dialog footer -->
                    <footer class="modal-footer">
                        <span class= "footermodal blockquote-footer" style="color:#FFF;">{{trans('ourconcept.our-modal-footer')}}</span>
                    </footer>
                </div>
            </div>
        </div>
        {{-- Modal Organigram UNIMAR--}}
        <div class="modal fade" id="organigram">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <!-- dialog header -->
                    <div class="modal-header">
                        <h4 class="modal-title">{{trans('org.struct-org')}}</h4>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <!-- dialog content -->
                    <div class="modal-body">
                        <img src="{{URL::asset('./image/organigram/organigram-v6.jpg')}}" width="100%" alt="{{trans('org.campus')}}">
                    </div>
                    <!-- dialog footer -->
                    <footer class="modal-footer">
                        <span class= "footermodal blockquote-footer" style="color: #FFF;">{{trans('ourconcept.our-modal-footer')}}</span>
                    </footer>
                </div>
            </div>
        </div>
    </div>
@endsection
