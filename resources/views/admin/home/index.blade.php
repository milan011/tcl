@extends('layouts.main')

@section('BreadcrumbTrail')
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="{{route('admin.index')}}">主页</a>  
			<i class="icon-angle-right"></i>
		</li>
	</ul>
@endsection

@section('content')
	<h1>{{$hehe}}</h1>
	<h1>{{$haha}}</h1>
	<h1>{{$xixi}}</h1>
	<h1>{{$currentUser['id']}}</h1>
	<h1>{{$currentUser['name']}}</h1>
	<h1>{{$currentUser['nick_name']}}</h1>
	<h1>{{ Auth::user()->name }}</h1>
	<!-- @foreach($currentUser as $user)
		<h1></h1>
	@endforeach -->
@endsection