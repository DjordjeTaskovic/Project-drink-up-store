@extends('admin-panel.admin-panel-layout')
@section('title')Dashboard @endsection
@section('description')Admin-dashboard @endsection
@section('keywords') panel,admin @endsection

@section('content')
<div class="content pt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> All Products Stats</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Informations</th>
                  <th >Price</th>
                  <th>Date </th>
                  <th>Availability</th>
                  <th>Category</th>
                  <th>Update/Delete</th>
                </thead>
                <tbody>
                    @foreach ($products as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->product_name}}</td>
                        <td>{{$p->info}}</td>
                        <td>${{$p->price}}</td>
                        <td> {{$p->date}}</td>
                        <td>
                            @foreach ($p->availabilities as $i)
                                    {{$i->state}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($p->categories as $i)
                                    {{$i->category_name}}
                            @endforeach
                        </td>
                        <td>
                <a href="{{ route('products.edit',["product" => $p->id]) }}"
                class="d-flex align-items-center justify-content-center btn btn-warning">
                Update<span class="now-ui-icons arrows-1_refresh-69" aria-hidden="true"></span></a>
                 <br>
                <form method="POST" action="{{route('products.destroy',["product" => $p->id]) }}">
                @method('DELETE')
                @csrf
                <button onclick="return confirm('Are you sure you want to delete item?')"
                 class="d-flex align-items-center justify-content-center btn btn-danger"
                type="submit"> Delete <span class="now-ui-icons ui-1_simple-remove"
                     aria-hidden="true"></span></button>
                </form>
                        </td>
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
              <h4 class="card-title">Products Images</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                  </thead>
                  <tbody>
                      @foreach ($products as $p)
                      <tr>
                          <td>{{$p->id}}</td>
                          <td>
                              @foreach ($p->images as $i)
                                      <img class="w-25" src="{{ ('public/assets/img/products/' . $i->url) }}" />
                              @endforeach
                          </td>
                          <td>
                              @foreach ($p->images as $i)
                                      {{$i->url}}
                              @endforeach
                          </td>
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
