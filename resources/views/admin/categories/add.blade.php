@extends('admin.template')
@section('content')
<!-- Basic Layout -->
<div class="row">
    <div class="col-md-8">
        <form action="{{URL('/admin/categories/add')}}" method="post"></form>
        @csrf
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Categories</h5>
                    
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Category Name</label>
                            <input type="text" Name="category_name" class="form-control" id="basic-default-fullname"  />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Category Description</label>
                            <textarea rows="5" type="text" Name="category_description" class="form-control" id="basic-default-company"></textarea>
                        </div>
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" value="1" checked="">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Category Status</label>
                        </div>

                        <button type="submit" class="btn btn-primary mt-5">Submit</button>
                    </form>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection