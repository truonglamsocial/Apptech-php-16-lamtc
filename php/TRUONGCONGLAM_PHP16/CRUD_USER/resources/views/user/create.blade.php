@extends('layouts.app2')
@section('content')
<!-- http://localhost/Aptech-php-16/PHP/09-2019-01-22/democrud1/public/users == {{route('users.store')}} -->
<div class="container">
  <div class="row">
    <div class="col">
      <form action="{{route('users.store')}}" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="name"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
           <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
         </div>
         <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
             <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
         </div>
         {{csrf_field()}}
         <button type="submit" class="btn btn-primary">Submit</button>
     </form>
    </div>
  </div>
</div>
@endsection