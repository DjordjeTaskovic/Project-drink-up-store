@extends('admin-panel.admin-panel-layout')
@section('title')Orders @endsection
@section('description')Admin-tables @endsection
@section('keywords') panel,admin @endsection
@section('content')
<div class="content pt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Product Orders</h4>
            <p class="category"> Here is a table of orders form users.</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>UserID
                  </th>
                  <th>ProductID
                  </th>
                  <th>Product
                  </th>
                  <th>Price
                </th>
                <th>Quantity
                </th>
                <th>Subtotal
                </th>
                </thead>
                <tbody>
                    @foreach ($orders as $m )
                    <tr>
                      <td>{{$m->id}}</td>
                      <td> {{$m->user_id}}</td>
                      <td> {{$m->product_id}}</td>
                      <td >{{$m->name}}</td>
                      <td >{{$m->price}}</td>
                      <td >{{$m->quantity}}</td>
                      <td >{{$m->subtotal}}</td>
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
