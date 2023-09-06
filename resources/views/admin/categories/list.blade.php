@extends('admin.template')
@section('content')

<!-- Hoverable Table rows -->
<div class="card">
    <div class="row">
        <div class="col-md-2">
            <h6 class="card-header">Categories List</h6>
        </div>

        <div class="col-md-8"></div>

        <div class="col-md-2 mt-3">
            <a href="{{URL('/admin/categories/add')}}"  class="btn btn-primary btn-sm">Add Category</a>
        </div>
    </div>
    <!-- Remove the incorrect button element here -->
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
            @foreach($Categories as $category) <!-- Use the variable name $Categories -->
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        @if($category->isActive == "1")
                            <span class="badge bg-label-success me-1">Active</span>
                        @else
                            <span class="badge bg-label-danger me-1">In Active</span>
                        @endif
                    </td>
                    <td>
                        <!-- Add actions for each category here -->
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
<!--/ Hoverable Table rows -->

@endsection
