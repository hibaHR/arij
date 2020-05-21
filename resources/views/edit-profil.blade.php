
@extends('layouts.admin')


@section('title')
    Edit-Registered| Gestion d'article
@endsection
@section('content')
<form method="POST" action="/update-profil',{{$user->id}} ">

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" value="{{ $user->email }}" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fa fa-btn fa-sign-in"></i>Update
  </button>
</form>
@endsection


@section('scripts')
@endsection
