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
                    <div class="row">
                        <div class="col-md-6">
                    <form action="/role-register-update/{{$users->id}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT')  }}
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="username" value = "name" class="from-control">
                        </div>

                             <div class="form-group">
                               <label>Give Role</label>
                               <select name="user_type" class="from-control">
                               <option value="admin">Admin</option>
                               <option value="user">Vendor</option>
                              </select>
                           </div>
                             <button type="submit" class="btn btn-success">Update</button>
                             <button type="submit" class="btn btn-danger">Cancel</button>
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
