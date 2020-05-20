@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <br />
                    <h2 class="panel-title">Create New Contract</h2>
                </div>
                <div class="panel-body">
            <form action="{{ route('contracts.store') }}" method="POST">
               @csrf
                <div class="form-group">
                    <label for="reponse1">Nom Locataire</label>
                    <input type="text" class="form-control" id="reponse1" name="reponse1">
                </div>
                <div class="form-group">
                    <label for="reponse2">Adresse </label>
                    <input type="text" class="form-control" id="reponse2" name="reponse2">
                </div>
                <div class="form-group">
                    <label for="reponse3">Tél</label>
                    <input type="text" class="form-control" id="reponse3" name="reponse3">
                </div>
                <div class="form-group">
                    <label for="reponse4">Marque Véhicule</label>
                    <input type="text" class="form-control" id="reponse4" name="reponse4">
                </div>
                <div class="form-group">
                    <label for="reponse5">Immatriculation</label>
                    <input type="text" class="form-control" id="reponse5" name="reponse5">
                </div>
                <div class="form-group">
                    <label for="reponse6">Nom propriétaire</label>
                    <input type="text" class="form-control" id="reponse6" name="reponse6">
                </div>
                <div class="form-group">
                    <label for="reponse7">Tél</label>
                    <input type="text" class="form-control" id="reponse7" name="reponse7">
                </div>
                <div class="form-group">
                    <label for="reponse8">Durée de la location </label>
                    <input type="text" class="form-control" id="reponse8" name="reponse8">
                </div>
                <div class="form-group">
                    <label for="reponse9">à partir du  </label>
                    <input type="date" class="form-control" id="reponse9" name="reponse9">
                </div>
                
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
{{--single post view --}}
{{--show number likes this post has --}}