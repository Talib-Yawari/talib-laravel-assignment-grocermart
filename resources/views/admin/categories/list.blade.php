@extends('admin.template')
@section('content')

<!-- Hoverable Table rows -->
<div class="card">
    <div class="row">
        <div class="col-md-2">
            <h5 class="card-header">Categories List</h5>
        </div>

        <div class="col-md-8"></div>

        <div class="col-md-2 mt-3">
            <a href="{{URL('/admin/categories/add')}}"  class="btn btn-primary">Add Category</a>
        </div>
    </div>
<button class="card-header></button>
<div class="table-responsive text-nowrap">
    <table class="table table-hover">
    <thead>
        <tr>
        <th>#</th>
        <th>Name</th>
        <th>Status</th>
        <th>Actions</th>  
        </tr>
    </thead>
    <tbody class="table-border-bottom-0">
        
    </tbody>
    </table>
</div>
</div>
<!--/ Hoverable Table rows -->


@endsection