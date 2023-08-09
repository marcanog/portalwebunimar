@extends('layouts.layout')

@section('styles')
    <style>
        #card-content p {
            height: auto !important;
            display: -webkit-box;
        }
        .card-outline {
            border-top: 3px solid #336699 !important;
        }
        .responsive{
            height: 100% !important;
        }
        .owl-theme .owl-dots .owl-dot {
            zoom: 1.3 !important;
        }
        .owl-theme .owl-dots .owl-dot span {
            margin: 0 1.5px !important;
        }
        @media (min-width: 576px) {
            .owl-theme .owl-dots{
                position: absolute;
                right: 5px;
            }
            .owl-theme .owl-dots .owl-dot {
                zoom: 2 !important;
            }
        }
        .no-gutters{
            border-radius: 15px !important;
        }
        .event-title-adjust-md{
            padding: 0 !important;
        }
        .event-title-adjust-md img{
            margin-left: 0 !important;
        }
        .event-title-adjust-md h4{
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .content-date{
            border-top-left-radius: 15px !important;
            border-top-right-radius: 15px !important;
        }
        @media (min-width: 768px) {
            .content-date{
                border-top-left-radius: 15px !important;
                border-bottom-left-radius: 15px !important;
                border-top-right-radius: 0 !important;
            }
        }
        .card-link{
            color: #336699;
            font-size: small;
        }
        .card-link-whatch-more:before {
            content: "|";
            margin-right: 0.2em;
            color: #e0ded9;
        }
    </style>
@endsection

@section('scripts')
    <!-- Owl Carousel -->
    <script src="{{ asset('plugins/owlcarousel/dist/owl.carousel.min.js') }}" defer></script>
    <script>
        $(document).ready(
            function(){
                $(".news-carousel").owlCarousel({
                    margin: 10,
                    responsive:{
                        0:{items:1, nav:!1},
                        600:{items:3, nav:!1},
                        1e3:{items:4, nav:!1, loop:!1}
                    }
                });
                $(".home-carousel").owlCarousel({
                    loop: 1,
                    items: 1,
                    mouseDrag: 0,
                    margin: 15,
                    dots: 1,
                    responsiveClass: 1,
                    autoplay: 1,
                    autoplayHoverPause: 1,
                });
            }
        )
    </script>
@endsection

@section('content')
    <!-- Modal -->
    <!-- <script>
        $(document).ready(function() {
            $("#exampleModalLong").modal("show");
            $("#exampleModalLong").click(function() {
                $("#exampleModalLong").modal("hide");
            });
        });
    </script>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document" style="padding: 0">
            <div class="modal-content" style="padding: 0">
                <img src="{{URL::asset('image/banners/'.trans('commons.lang-banner').'/home/maintenance-statement.png')}}" class="img_size" style="width: 100%">
            </div>
        </div>
    </div>-->
    <div class="content">
        {{--main carousel--}}
        <div class="home-carousel owl-carousel owl-theme">
            <a href="/scientific-congress-I">
                <div class="owl_text"><img src="{{URL::asset('image/banners/'.trans('commons.lang-banner').'/home/scientific_congress_1.png')}}" class="img_size"></div>
            </a>
            <a href="/graduations">
                <div class="owl_text"><img src="{{URL::asset('image/banners/'.trans('commons.lang-banner').'/home/Beauperthuy-XXXVII.png')}}" class="img_size"></div>
            </a>
            <a href="/fcPayments">
                <div class="owl_text"><img src="{{URL::asset('image/banners/'.trans('commons.lang-banner').'/home/bank-onlineb.png')}}" class="img_size"></div>
            </a>
            <div class="owl_text"><img src="{{URL::asset('image/banners/'.trans('commons.lang-banner').'/home/correo-web.png')}}" class="img_size"></div>
            <!--<div class="owl_text"><img src="{{URL::asset('image/banners/'.trans('commons.lang-banner').'/home/Bannerweb_23a.png')}}" class="img_size"></div>-->
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="section-content">
                    <div class="d-flex justify-content-start">
                        <img id="img-section" src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-02.png')}}">
                        <h4>{{trans('home.news')}} <a class="card-link card-link-whatch-more" href="/newsunimar">Ver mas</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-none d-md-block event-title-adjust-md">
                <div class="section-content">
                    <div class="d-flex justify-content-start">
                        <img id="img-section" src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-03.png')}}" width="100%">
                        <h4>{{trans('home.events')}} <a class="card-link card-link-whatch-more" href="/eventsunimar">Ver mas</a></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-4">
                @foreach($news as $new)
                    <div class="col-sm-6 col-md-3 my-2">
                        <div class="card bg-greey border-0 responsive">
                            <img src={{ asset("image/newsimg/".$new->image) }} alt="image-news" style="border-radius: 15px 15px 0 0;">
                            <div class="card-body">
                                <a class="card-link" href="/newsunimar/.{{$new->first_tag}}/{{$new->title}}/{{$new->id}}">
                                    <h6 class="card-title font-weight-bold">{{($new->title)}}</h6>
                                </a>
                                <div class="card-content" id="card-content" style="font-size: x-small;">
                                    <div class="text-justify m-0">{!!($new->resume)!!}</div>
                                </div>
        
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-12 d-md-none d-block d-sm-none" style="padding-left: 0;">
                    <div class="section-content">
                        <div class="d-flex justify-content-start">
                            <img id="img-section" src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-03.png')}}" style="margin-left: 0;">
                            <h4>{{trans('home.events')}} <a class="card-link card-link-whatch-more" href="/eventsunimar">Ver mas</a></h4>
                        </div>
                    </div>
                </div>
                <div class="row col-sm-6 col-md-3">
                    <div class="col-md-12 d-none d-sm-block d-md-none">
                        <div class="section-content">
                            <div class="d-flex justify-content-start">
                                <img id="img-section" src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-03.png')}}" width="100%">
                                <h4>{{trans('home.events')}} <a class="card-link card-link-whatch-more" href="/eventsunimar">Ver mas</a></h4>
                            </div>
                        </div>
                    </div>
                    @foreach($events as $event)
                        <div class="col-md-12 my-2" style="padding: 0;">
                            <div class="row no-gutters bg-greey" style="height:100%;">
                                <div class="col-md-4 text-white content-date" style="border-radius:0px;">
                                    <p>{{\Carbon\Carbon::parse(strtotime($event->start))->formatLocalized("%d %b")}}</p>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body" id="card-content">
                                        <h5 class="card-title font-weight-bold text-left mx-2">{{($event->title)}}</h5>
                                        <p class="card-text text-justify mx-2" style="width: 80%;">{{($event->description)}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
        
        {{--section content--}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-04.png')}}" width="100%">
                <h4>{{trans('home.academics_areas')}}</h4>
            </div>
        </div>
        
        {{--content academics areas--}}
        <div class="content mx-4">
            <div class="row justify-content-center border-0 m-2">
                <div class="col-sm-3 col-dm-3 my-2">
                    <a href="{{URL('/humarte')}}">
                        <img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-15.png')}}" alt="{{trans('home.humarte')}}" width="100%">
                    </a>
                </div>
                <div class="col-sm-3 col-dm-3 my-2">
                    <a href="{{URL('/cjyp')}}">
                        <img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-16.png')}}" alt="{{trans('home.cjyp')}}" width="100%">
                    </a>
                </div>
                <div class="col-sm-3 col-dm-3 my-2">
                    <a href="{{URL('/ceys')}}">
                        <img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-17.png')}}" alt="{{trans('home.ceys')}}" width="100%">
                    </a>
                </div>
                <div class="col-sm-3 col-dm-3 my-2">
                    <a href="{{URL('/engineerie')}}">
                        <img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-18.png')}}" alt="{{trans('home.ingsyst')}}" width="100%">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center border-0 m-2">
                <div class="col-sm-3 col-dm-3 my-2">
                    <a href="{{URL('/genestud')}}">
                        <img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-19.png')}}" alt="{{trans('home.estgen')}}" width="100%">
                    </a>
                </div>
                <div class="col-sm-3 col-dm-3 my-2">
                    <a href="{{URL('/vextension')}}">
                        <img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-20.png')}}" alt="{{trans('home.extent')}}" width="100%">
                    </a>
                </div>
                <div class="col-sm-3 col-dm-3 my-2">
                    <a href="{{URL('/postgeinvestig')}}">
                        <img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-22.png')}}" alt="{{trans('home.posteinvg')}}" width="100%">
                    </a>
                </div>
                <div class="col-sm-3 col-dm-3 my-2">
                    <a href="{{URL('/agreements')}}">
                        <img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-21.png')}}" alt="{{trans('home.acadconvens')}}" width="100%">
                    </a>
                </div>
            </div>
        </div>
        {{--section content--}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-05.png')}}" width="100%"><h4>{{trans('home.links_interest')}}</h4>
            </div>
        </div>
        {{--links contents--}}
        <div class="content mx-4">
            <div class="row justify-content-center border-0 m-2">
                <div class="col-sm-3 col-dm-3 my-2">
                    <a href="{{url('/study-offers')}}">
                        <img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-07.png')}}" alt="{{trans('home.study_offers')}}" width="100%">
                    </a>
                </div>
                <div class="col-sm-3 col-dm-3 my-2">
                    <a href="https://www.unimarcientifica.edu.ve/adminmoodle/" target="_blank">
                        <img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-08.png')}}" alt="{{trans('home.elearning')}}" width="100%">
                    </a>
                </div>
                <div class="col-sm-3 col-dm-3 my-2">
                    <a href="https://www.unimarcientifica.edu.ve/revista/">
                        <img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-09.png')}}" alt="{{trans('home.cientific_unimar')}}" width="100%">
                    </a>
                </div>
                <div class="col-sm-3 col-dm-3 my-2">
                    <a href="{{URL('/regulations')}}">
                        <img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-10.png')}}" alt="{{trans('home.h-regulations')}}" width="100%">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center border-0 m-2">
                <div class="col-sm-3 col-dm-3 my-2">
                    <a href="{{url('/generalsecretariat')}}">
                        <img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-11.png')}}" alt="{{trans('home.general-secretary')}}" width="100%">
                    </a>
                </div>
                <div class="col-sm-3 col-dm-3 my-2">
                    <a href="{{URL('/healthystudent')}}">
                        <img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-12.png')}}"  alt="{{trans('home.students-healthy')}}" width="100%">
                    </a>
                </div>
                <div class="col-sm-3 col-dm-3 my-2">
                    <a href="{{url('/healthymental')}}">
                        <img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-13.png')}}" alt="{{trans('home.psicologyc-healthy')}}" width="100%">
                    </a>
                </div>
                <div class="col-sm-3 col-dm-3 my-2">
                    <a href="https://twitter.com/uniradio_unimar?s=20" target="_blank">
                        <img src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-14.png')}}" alt="{{trans('home.uniradio')}}" width="100%">
                    </a>
                </div>
            </div><!-- end content-links-->
        </div>
        {{--section content--}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('image/views/'.trans('commons.lang-banner').'/home/home-06.png')}}" width="100%"><h4>{{trans('home.location')}}</h4>
            </div>
        </div>
        {{--location unimar--}}
        <div class="location-content d-flex">
            <div class="row justify-content-center m-4">
                <div class="map-location col-sm-6 col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.7972847852143!2d-63.88208018566738!3d10.978668292184503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c318c3b89e345cd%3A0xbaf23c34b11f9d7!2sUniversidad%20De%20Margarita!5e0!3m2!1ses-419!2sve!4v1620079489335!5m2!1ses-419!2sve"
                        width="600" height=350" style="border:0;" allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
                <div class="map-direction col-sm-6 col-md-6 text-left">
                    <p>{{trans('home.location-footer')}}</p>
                    <p>{{trans('home.location-code')}}</p>
                    <p>{{trans('home.location-telf')}}</p>
                    <p>{{trans('home.location-code-plus')}}</p>
                    <p>{{trans('home.location-mail')}}</p>
                </div>
            </div>
        </div>
        {{--modal content--}}
    </div>

    {{--end content--}}
@endsection
