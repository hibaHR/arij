
@extends('layouts.admin')



@section('content')

@endsection
<div class="container">
    <div class="row">
        <div class="col-md-12">
     <div class="card">
         <div class="card-header">
                <h3> Edit Profil users</h3>
            </div>
                <div class="card-body">
      <form method="post" action="{{route('users.update', $user)}}">
    {{ csrf_field() }}
    {{ method_field('patch') }}

    <input type="text" name="name"  value="{{ $user->name }}" />

    <input type="email" name="email"  value="{{ $user->email }}" />

    <input type="password" name="password" />

    <input type="password" name="password_confirmation" />

    <button type="submit">Send</button>
</form>

</div>
           </div>
      </div>
  </div>
</div>

@section('scripts')
@endsection
