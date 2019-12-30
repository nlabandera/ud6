@extends('layouts.plantilla')

@section('content')
<br>
  <!-- Page Content -->
  <div class="container">
  <table class="table table-condensed">
      <tr>
        <th class="bg-dark text-light">Id</th>
        <td>{{$post->id}}</td>
      </tr>
      <tr>
        <th class="bg-dark text-light">Title</th>
        <td>{{$post->title}}</td>
      </tr>
      <tr>
        <th class="bg-dark text-light">Fecha/Hora</th>
        <td>{{date("d/m/Y H:i:s", strtotime($post->published_at))}}</td>
      </tr>
      <tr>
        <th class="bg-dark text-light">Category</th>
        <td>{{$post->category->name}}</td>
      </tr>
      <tr>
        <td>
          <a class="btn btn-primary" title="Editar" href="{{route ('posts.edit',$post->id)}}">Edit</a>
        </td>
        <td>
        <form style="display:inline" action="{{ route('posts.destroy',$post->id) }}" method="POST">
           @method('DELETE')
           @csrf
           <button type="submit" id="delete" style="background: none;padding: 0px;border: none;">
              <a class="btn btn-danger text-light">Delete</a>
            </button>
        </form>
        </td>
      </tr>
    </table>
  </div>
  @endsection