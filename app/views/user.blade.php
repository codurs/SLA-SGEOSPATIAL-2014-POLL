@extends('layouts/layout')

@section('profile_details')
    @if (!empty($data))
    <div class="media">
        <a class="pull-left col-lg-12" href="#">
            <img class="media-object img-rounded" src="{{ $data['photo']}}" alt="Profile image">
        </a>
        <div class="media-body col-lg-12 text-center">
            <h4 class="media-heading">{{{ $data['name'] }}} </h4>
            Your email is {{ $data['email']}}
        </div>
    </div>
    <hr>
    @endif
@stop

@section('content')


            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {{ Session::get('message')}}
                </div>
            @endif

			<div class="jumbotron text-center">
            @if (!empty($data))
                @if(!$pageLiked && !$hasVoted)
                <div id="like-fb-page-container">
                    <h1>Like the OneMap page to proceed</h1>
                        <div id="fb-root"></div>
                            <script type="text/javascript">
                                <!--
                                window.fbAsyncInit = function() {
                                    FB.init({appId: '742052522503418', status: true, cookie: true, xfbml: true});
                                    FB.Event.subscribe('edge.create', function(href, widget) {
                                        // Do something, e.g. track the click on the "Like" button here
                                        //location.reload();
                                        //console.log(widget)
                                        $("#poll-container").removeClass('hide');
                                        $("#like-fb-page-container").addClass('hide');
                                    });
                                };
                                (function() {
                                    var e = document.createElement('script');
                                    e.type = 'text/javascript';
                                    e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
                                    e.async = true;
                                    document.getElementById('fb-root').appendChild(e);
                                }());
                                //-->
                            </script>
                    <div class="fb-like" data-href="https://facebook.com/OneMap" data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>
                </div>
                @endif
            @else
                <h1>To get stared:</h1>
                <p class="text-center">
                    <a class="btn btn-lg btn-primary" href="{{url('login/fb')}}"><i class="icon-facebook"></i> Login with Facebook</a>
                </p>
            @endif

                <div id="poll-container" class="{{ $pageLiked || $hasVoted ? ''  : 'hide'}}">
                    @if($poll)
                        @include('poll', array('poll'=> $poll))
                    @endif
                </div>
		</div>

    <h3 class="text-center text-muted">Courtesy of</h3>
    <p class="text-center""><a href="https://facebook.com/codurs" target="_blank"><img src="{{ asset('codurs-logo.png') }}" width="200px"/></a></p>
@stop