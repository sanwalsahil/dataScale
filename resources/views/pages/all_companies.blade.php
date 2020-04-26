@extends('layouts.app', ['activePage' => 'all_companies', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Companies List</h4>
            <p class="card-category"> All companies</p>
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <x-backend.table />
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
