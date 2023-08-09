@extends('layouts.layout')

@section('styles')
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- FontAwesome Icons core CSS -->
    <link href="{{ asset('plugins/tech-blog/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('plugins/tech-blog/style.css') }}" rel="stylesheet">
    <!-- Responsive styles for this template -->
    <link href="{{ asset('plugins/tech-blog/css/responsive.css') }}" rel="stylesheet">
    <!-- Version Tech CSS for this template -->
    <link href="{{ asset('plugins/tech-blog/css/version/tech.css') }}" rel="stylesheet">
    <style>
        .blog-meta small:after{
            padding: 0;
            margin: 0;
        }
    </style>
@endsection

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('/image/banners/'.trans('commons.lang-banner').'/news/newsunimar.jpg')}}" width="100%">
        </div>
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/logo-unimar.png')}}"><h4>{{trans('newsu.n-title')}}</h4>
            </div>
        </div>
    </div>

    <div id="wrapper">
        <section class="section single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area text-center">
                                <span class="color-orange"><a href="#" title="">{{ $new[0]->first_tag }}</a></span>
                                <h3>{{ $new[0]->title }}</h3>
                                <div class="blog-meta big-meta">
                                    <small style="margin: 0;"><a href="#" title="" class="recent-news-date">{{ $new[0]->created_at }}</a></small>
                                </div><!-- end meta -->

{{--                                <div class="post-sharing">--}}
{{--                                    <ul class="list-inline">--}}
{{--                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>--}}
{{--                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>--}}
{{--                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div><!-- end post-sharing -->--}}
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src={{ asset("image/newsimg/{$new[0]->image}") }} alt="" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">
                                {!!($new[0]->content)!!}
                            </div><!-- end content -->

                            <div class="blog-title-area">
                                <div id="tags" class="tag-cloud-single">
                                    <span>Tags</span>
                                    @foreach(explode(',', $tags) as $tag)
                                        <small><a href="#" title="">{{ $tag }}</a></small>
                                    @endforeach
                                </div><!-- end meta -->

{{--                                <div class="post-sharing">--}}
{{--                                    <ul class="list-inline">--}}
{{--                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>--}}
{{--                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>--}}
{{--                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div><!-- end post-sharing -->--}}
                            </div><!-- end title -->
                            <div class="custombox clearfix">
                                <h4 class="small-title">{{trans('newsu.n-interest')}}</h4>
                                <div class="row">
                                    @if(count($relatedNews) != 0)
                                        @foreach($relatedNews as $relatedNew)
                                            <div class="
                                                @if(count($relatedNews) == 1) col-lg-12
                                                @else col-lg-6
                                                @endif
                                            ">
                                                <div class="blog-box">
                                                    <div class="post-media">
                                                        <a href="/newsunimar/{{$relatedNew['first_tag']}}/{{$relatedNew['title']}}/{{$relatedNew['id']}}" title="">
                                                            <img src={{ asset("image/newsimg/{$relatedNew['image']}") }} alt="" class="img-fluid">
                                                            <div class="hovereffect">
                                                                <span class=""></span>
                                                            </div><!-- end hover -->
                                                        </a>
                                                    </div><!-- end media -->
                                                    <div class="blog-meta">
                                                        <h4><a href="/newsunimar/{{$relatedNew['first_tag']}}/{{$relatedNew['title']}}/{{$relatedNew['id']}}" title="">{{ $relatedNew['title'] }}</a></h4>
                                                        <small><a href="/newsunimar/{{$relatedNew['first_tag']}}/{{$relatedNew['title']}}/{{$relatedNew['id']}}" title="">{{ $relatedNew['first_tag'] }}</a></small>
                                                        <small><a href="/newsunimar/{{$relatedNew['first_tag']}}/{{$relatedNew['title']}}/{{$relatedNew['id']}}" title="" class="recent-news-date">{{ $relatedNew['created_at'] }}</a></small>
                                                    </div><!-- end meta -->
                                                </div><!-- end blog-box -->
                                            </div><!-- end col -->
                                        @endforeach
                                    @endif
                                </div><!-- end row -->
                            </div><!-- end custom-box -->
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                    @include('layouts.sidebarnews')
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
    </div><!-- end wrapper -->

    <script src="{{ asset('plugins/tech-blog/js/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/tech-blog/js/tether.min.js') }}"></script>
    <script src="{{ asset('plugins/tech-blog/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/tech-blog/js/custom.js') }}"></script>
    <script>
        @include('components.formatNewsDate')
    </script>
@endsection
