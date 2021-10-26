@extends('admin-panel.admin-panel-layout')
@section('title')Site Users @endsection
@section('description')Admin-dashboard @endsection
@section('keywords') panel,admin @endsection

@section('content')
<div class="content pt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> All User Roles</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID</th>
                      <th>Email</th>
                      <th>Role</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->email}}</td>
                            <td>{{$p->role_name}}</td>
                          </tr>
                        @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> All User Informations</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Adrress</th>
                  <th>Date</th>
                </thead>
                <tbody>
                    @foreach ($users as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->firstname}}</td>
                        <td>{{$p->lastname}}</td>
                        <td>{{$p->email}}</td>
                        <td>{{$p->password}}</td>
                        <td>{{$p->address}}</td>
                        <td> {{$p->date}}</td>
                      </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
@endsection
