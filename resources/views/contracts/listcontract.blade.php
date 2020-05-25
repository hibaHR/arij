@extends('layouts.admin')
​
​
@section('title')
   Register Roles| Gestion d'article
@endsection
​
​
​
@section('content')
​
<div class="row">
    <div class="col-md-12">
      <h4 class="card-title">Liste Contracts</h4>
      <div class="card">
        <div class="card-header">

          @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        </div>
  <div class="card-body">
  <div class="table-responsive">
   <table class="table">
   <thead class=" text-primary">
    <th>ID</th>
    <th>Nom Locataire</th>
    <th>Adresse</th>
    <th>Tél</th>
    <th>Marque Véhicule</th>
    <th>Immatriculation</th>
    <th>Nom propriétaire</th>
    <th>Tél</th>
    <th>Durée de la location</th>
    <th>Date debut</th>
    <th>Action</th>
  </thead>
​
    @foreach($contracts  as $contract)
    <tr>
      <td>{{$contract->id}}</td>
      <td>{{$contract->reponse1}} ></td>
      <td>{{$contract->reponse2}}</td>
      <td>{{$contract->reponse3}}</td>
      <td>{{$contract->reponse4}}</td>
      <td>{{$contract->reponse5}}</td>
      <td>{{$contract->reponse6}}</td>
      <td>{{$contract->reponse7}}</td>
      <td>{{$contract->reponse8}}</td>
      <td>{{$contract->reponse9}}</td>
​
​
      <td><a href="{{action('ContractController@downloadPDF', $contract->id)}}">Download PDF</a></td>
    </tr>
    @endforeach

  </div>
</div>
</div>
</div>
​
</div>
​
​
@endsection
​
​
@section('scripts')
​
@endsection
