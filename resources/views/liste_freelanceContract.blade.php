@extends('layouts.admin')
@section('content')
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Creation date</th>
    <th>Employee name</th>
    <th>Employeer name</th>
    <th>start</th>
    <th>end</th>
    <th>place</th>
    <th>Action</th>
  </thead>
  <tbody>
    @foreach($contracts  as $contract)
    <tr>
      <td>{{$contract->id}}</td>
      <td>{{$contract->created_at}}</td>
      <td>{{$contract->em_name}}</td>
      <td>{{$contract->ep_name}}</td>
      <td>{{$contract->from}}</td>
      <td>{{$contract->to}}</td>
      <td>{{$contract->place}}</td>
      <td><a href="{{ action('FreelanceContractController@downloadPDF', $contract->id) }}">Download PDF</a></td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection
