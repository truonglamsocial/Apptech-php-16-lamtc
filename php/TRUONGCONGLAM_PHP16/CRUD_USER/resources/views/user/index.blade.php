@extends('layouts.app2')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
    <table class="table text-center table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td class="d-flex justify-content-around">
            <form action="{{route('users.show',$user->id)}}">
              <button type="submit" class="btn btn-sm btn-primary">Show</button>
            </form>
            <form action="{{route('users.edit',$user->id)}}">
              <button type="submit" class="btn btn-sm btn-warning">Edit</button>
            </form>
            <form action="{{route('users.destroy',$user->id)}}" method="post">
              <input type="hidden" name="_method" value="delete">
                {{csrf_field()}}
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
      </table>
    </div>
  </div>
</div>

{{ $users->links()}}
 
@endsection