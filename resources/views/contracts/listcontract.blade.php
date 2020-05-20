@extends('layouts.admin')
@section('content')
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>reponse1</th>
    <th>reponse2</th>
    <th>reponse3</th>
    <th>reponse4</th>
    <th>reponse5</th>
    <th>reponse6</th>
    <th>reponse7</th>
    <th>reponse8</th>
    <th>reponse9</th>
    <th>Action</th>
  </thead>
  <tbody>
    @foreach($contracts  as $contract)
    <tr>
      <td>{{$contract->id}}</td>
      <td>{{$contract->reponse1}} {{$contract->reponse2}}</td>
      <td>{{$contract->reponse3}}</td>
      <td>{{$contract->reponse4}}</td>
      <td>{{$contract->reponse5}}</td>
      <td>{{$contract->reponse6}}</td>
      <td>{{$contract->reponse7}}</td>
      <td>{{$contract->reponse8}}</td>
      <td>{{$contract->reponse9}}</td>


      <td><a href="{{ action('ContractController@downloadPDF', $contract->id) }}">Download PDF</a></td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection
