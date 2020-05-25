@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <br />
                    <h2 class="panel-title">Create New Freelance Contract</h2>
                </div>
                <div class="panel-body">
                @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
                <form method="post" action="{{ route('freelancecontract.store')}}">
                <div class="form-group">
                    @csrf
                    <label for="name">Employee’ Name:</label>
                    <input type="text" class="form-control" name="em_name"/>
                </div>
                <div class="form-group">
                    <label for="name">Employer’ Name:</label>
                    <input type="text" class="form-control" name="ep_name"/>
                </div>
                <div class="form-group">
                    <label for="name">From -> to :</label>
                    <input type="date" class="form-control" name="from"/>
                    <input type="date" class="form-control" name="to"/>
                </div>
                <div class="form-group">
                    <label for="name">Wage:</label>
                    <input type="number" class="form-control" name="wage"/>
                </div>
                <div class="form-group">
                    <label for="name">Probation Period:</label>
                    <input type="number" class="form-control" name="pb_periode"/>
                </div>
                <div class="form-group">
                    <label for="name">Place:</label>
                    <input type="text" class="form-control" name="place"/>
                </div>
                <div class="form-group">
                    <label for="name">Employee’ ID:</label>
                    <input type="number" class="form-control" name="em_id"/>
                </div>
                <div class="form-group">
                    <label for="name">Job duty:</label>
                    <textarea class="form-control" name="job_duty">
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="name">Employee’ sign date :</label>
                    <input type="date" class="form-control" name="sig_date_em"/>
                </div>
                <div class="form-group">
                    <label for="name">Employeer’ sign date:</label>
                    <input type="date" class="form-control" name="sig_date_ep"/>
                </div>
                <div class="form-check">
                    <input type='checkbox' value='1' class="form-check-input" name="fixed_period"/>
                    <label  class='form-check-label' for="name">fixed period:</label>
                    <!-- <input type="number" class="form-control" name="fixed_period"/> -->
                </div>
                <div class="form-group">
                    <label for="name">Periode duration:</label>
                    <input type="number" class="form-control" name="fixed_period_of"/>
                </div>
                <div class="form-check">
                    <input type='checkbox' value='1' class="form-check-input" class="form-control" name="break_partie"/>
                    <label class='form-check-label' for="name">Booth patie can break contract :</label>
                    <!-- <input type="number" class="form-control" name="wage"/> -->
                </div>
                <button type='submit' class='btn btn-primary' >Create contract</button>
                </form>
</div>
    </div>
</div>
</div>
</div>
@endsection
{{--single post view --}}
{{--show number likes this post has --}}
