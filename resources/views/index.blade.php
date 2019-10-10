@extends('main')
@section('content')           
@if (session('status'))
      <div class="alert table-success text-success" role="alert">
          {{ session('status') }}
      </div>
    @endif 
            <div class="card">
              <div class="card-header bg-white">
                <h5 class="d-inline"><b>DASHBOARD</b></h5>
                <h6>
                  INI MERUPAKAN DASHBOARD APLIKASI PESANTREN
                  WELCOME {{Session::get('name')}}
                </h6>
            <div class="table-responsive">
                
              </div>
              </div>
          </div>
@endsection