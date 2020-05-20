
@extends('layouts.admin')


@section('title')
show details| Gestion d'article
@endsection
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Profile User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary float-right" href="/role-register"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $users->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $users->email }}
            </div>
            <br>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>UserType</strong>
                {{ $users->user_type }}
            </div>
        </div>

    </div>
@endsection
