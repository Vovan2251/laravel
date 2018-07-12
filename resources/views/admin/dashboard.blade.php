@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">Categories 0</span></p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">Materials 0</span></p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">Guests 0</span></p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">Today 0</span></p>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <a href="{{route('admin.category.create')}}" class="btn btn-block bth-default">Create cat</a>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">Cat 1</h4>
          <p class="list-group-item-text">
            Count materials
          </p>
        </a>
      </div>
      <div class="col-sm-6">
        <a href="#" class="btn btn-block bth-default">Create material</a>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">Mat 1</h4>
          <p class="list-group-item-text">
            Category
          </p>
        </a>
      </div>
    </div>

  </div>
@endsection
