@extends('layouts.plantilla')
@section('content')
	<form action="{{route('posts.update',['post'=>$post])}}" method="post" style="width: 40vw; margin:0 auto">
		@method('PUT')
		@include('posts._form',['btnText'=>'Edit'])
	</form>
@endsection