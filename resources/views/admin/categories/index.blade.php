@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
@component('admin.components.breadcrumb')
  @slot('title') List of categories @endslot
  @slot('parent') Main @endslot
  @slot('active') Categories @endslot
@endcomponent

<hr>
<a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right">
<i class="fa fa-plus-square-o"></i>Create category
</a>
<table>
  <thead>
    <th>Name</th>
    <th>Publication</th>
    <th class="text-right">Action</th>
  </thead>
  <tbody>
    @forelse($categories as $category)
    <tr>
      <td>{{$category->title}}</td>
      <td>{{$category->published}}</td>
      <td>
        <a href="{{route('admin.category.edit',$category)}}">
          <i class="fa fa-edit"></i>
        </a>
      </td>
    </tr>
    <tr>
      @empty
      <tr>
        <td colspan="3" class="text-center"><h2>Data absent</h2></td>
      </tr>
      @endforelse
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td colspan="3">
        <ul class="pagination pull-right">
          {{$categories->links()}}
        </ul>
      </td>
    </tr>
  </tfoot>
</table>


</div>

@endsection
