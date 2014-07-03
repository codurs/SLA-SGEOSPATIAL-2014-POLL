@extends('layouts/layout')

@section('content')
	@if(Session::has('message'))
		<div class="alert alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  {{ Session::get('message')}}
		</div>
	@endif

	@if (!empty($data))
	    <div class="media">
	      <a class="pull-left" href="#">
	        <img class="media-object" src="{{ $data['photo']}}" alt="Profile image">
	      </a>
	      <div class="media-body">
	        <h4 class="media-heading">{{{ $data['name'] }}} </h4>
	        Your email is {{ $data['email']}}
	      </div>
	    </div>
	    <hr>
	    <a href="{{url('logout')}}">Logout</a>
	@else
		<div class="jumbotron text-center">
		    <h1>Which is your favourite team?</h1>

		    <p class="text-center">
		      <a class="btn btn-lg btn-primary" href="{{url('login/fb')}}"><i class="icon-facebook"></i> Login with Facebook</a>
		    </p>
		</div>
	@endif

    <p class="text-right">Courtesy of <a href="http://twitter.com/codurs" target="_blank">CODURS</a></p>

@stop