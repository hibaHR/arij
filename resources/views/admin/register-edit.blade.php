@extends('layouts.admin')


@section('title')
    Edit-Registered| Gestion d'article
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
     <div class="card">
         <div class="card-header">
                <h3> Edit Role for Registered users</h3>
            </div>
                <div class="card-body">


                    <form action="/role-register-update/{{$users->id}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT')  }}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input type="text" name="username" value = "{{ $users->name}}" class="form-control form-control-sm">
                        </div>
                        </div>

                        <div class="form-group row">
                               <label class="col-sm-2 col-form-label">Give Role</label>
                               <div class="col-sm-10">
                               <select name="user_type"  class="form-control form-control-sm">
                               <option value="admin">Admin</option>
                               <option value="user">User</option>
                              </select>
                           </div>
                           </div>
                           <br>
                           <center>
                             <button type="submit" class="btn btn-success">Update</button>
                             <button type="submit" class="btn btn-danger">Cancel</button></center>
                    </form>
</div>
</div>
                 </div>
           </div>
      </div>
  </div>
</div>

@endsection


@section('scripts')
@endsection
