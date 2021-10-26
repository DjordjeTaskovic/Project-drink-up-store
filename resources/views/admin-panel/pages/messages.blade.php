@extends('admin-panel.admin-panel-layout')
@section('title')Messages @endsection
@section('description')Admin-tables @endsection
@section('keywords') panel,admin @endsection
@section('content')
<div class="content pt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Messages</h4>
            <p class="category"> Here is a table of messages</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>Email
                  </th>
                  <th>Subject
                  </th>
                  <th>Note
                  </th>
                </thead>
                <tbody>
                    @foreach ($messages as $m )
                    <tr>
                      <td>{{$m->id}}</td>
                      <td> {{$m->email}}</td>
                      <td> {{$m->subject}}</td>
                      <td >{{$m->message}}</td>
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
