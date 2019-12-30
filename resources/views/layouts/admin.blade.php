@extends('layouts.plantilla')
@section('content')
<div class="container-fluid">
    

     
      <h2 class="h2">Users</h2>
      <table class="table table-condensed">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th style="width:15px"></th>
        <th style="width:15px"></th>
        <th style="width:15px"></th>
      </tr>
      </thead>
    <tbody>
      @foreach($users as $user)
              <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                  <form action="{{route('updateUserRole',['user'=>$user->id])}}" method="post" class="role_update">
                    @method('PUT')
                    @csrf
                    <select name="role">
                      @foreach($roles as $role)
                        <option value="{{$role->name}}" @if($user->role == $role->name) selected @endif>{{$role->name}}</option>
                      @endforeach
                    </select>
                  </form>
                </td>
              </tr>
            @endforeach
    </tbody>
    </table>
      
</div>
<script src="/js/jquery-3.4.1.slim.min.js.descarga" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/js/bootstrap.bundle.min.js.descarga" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
        <script src="/js/feather.min.js.descarga"></script>
        <script src="/js/Chart.min.js.descarga"></script>
        <script src="/js/dashboard.js.descarga"></script>

        <script>
          $(document).ready(function(){
            $('.role_update select').change(function(){
              $(this).parent('.role_update').submit();
            });
          });
        </script>
@endsection