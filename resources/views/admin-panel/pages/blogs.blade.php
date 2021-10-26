@extends('admin-panel.admin-panel-layout')
@section('title')Blogs @endsection
@section('description')Admin-dashboard @endsection
@section('keywords') panel,admin @endsection

@section('content')
<div class="content pt-5">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> All Blog Informations</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Informations</th>
                  <th>Date </th>
                </thead>
                <tbody>
                    @foreach ($blogs as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->name}}</td>
                        <td>{{$p->info}}</td>
                        <td> {{$p->date}}</td>
                      </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
            <div class="card-header">
              <h4 class="card-title">Blog Images</h4>
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
                      @foreach ($blogs as $p)
                      <tr>
                          <td>{{$p->id}}</td>
                          <td>
                              @foreach ($p->images as $i)
                                      <img class="w-25" src="{{ ('public/assets/img/blog/' . $i->url) }}" />
                              @endforeach
                          </td>
                          <td>
                            @foreach ($p->images as $i)
                                   <p>{{$i->alt}}</p>
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
