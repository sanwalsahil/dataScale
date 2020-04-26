@extends('layouts.app', ['activePage' => 'all_users', 'titlePage' => __('Table List')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Users List</h4>
                            <p class="card-category"> All users</p>
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

