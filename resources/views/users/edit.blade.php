
@extends('layouts.admin')



@section('title')
 Edit Profile| Gestion d'article
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
        <h4 class="form-text text-muted"> Edit Profil</h4>
          @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    </div>
        <div class="card-body">
      <form method="post" action="{{route('users.update', $user)}}">
    {{ csrf_field() }}
    {{ method_field('patch') }}
    <div class="form-group row">
    <label  for="exampleInputEmail1" >Name</label>

    <input type="text" name="name"  value="{{ $user->name }}" class= "form-control form-control-sm"/><br>
    </div>
    <div class="form-group row">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control form-control-sm"  name="email"  value="{{ $user->email }}" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group row">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"  name="password"  value= "$user->password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <small id="passwordHelpInline" class="text-muted">
      Must be 6-20 characters long.
    </small>
  </div>





   <center> <button type="submit" class="badge badge-pill badge-success">Update</button></center>
</form>


</div>
                 </div>
           </div>
      </div>


@endsection


@section('scripts')
@endsection
