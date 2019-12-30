@extends('layouts.plantilla')
@section('content')
	<form action="{{route('posts.store')}}" method="post" style="width: 40vw; margin:0 auto">
		@include('posts._form',['btnText'=>'Add'])
	</form>
@endsection