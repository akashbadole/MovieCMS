@extends('admin_panel.app')

@section('content')

<section class="dashboard-wrap mtb-40">
    <div class="container">
        <div class="body-content">
            <div class="row">
                @include('admin_panel.layouts.sidenav')
                <div class="col-md-9">
                    <div class="dash-right">
                        <div class="dash-header">
                          <div class="dash-title">
                              <h1>Add Category</h1>
                          </div>
                        </div>
                        <div class="blog-form">
                          @if(session('success'))
                          <div class="alert alert-success">{{session('success')}}</div>
                        @endif
                          <form action="{{ url('addcategory-data')}}" method="post">
                            @csrf
                            <div class="form-group form-row">
                                <label class="col-md-3">Title <span class="required">*</span></label>
                                <div class="col-md-9">
                                  <input type="text" name="category" class="form-control" placeholder="Title" required>
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                  <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                          </form>
                        </div>
                    </div>   
                    <div style="border: 1px solid navyblue;">
                      <h2>All Category</h2>
                        <hr>
                        <ul>
                        @foreach ($Category_Data_All as $categoryAll)
                        <li class="mt-4 mb-4">{{$categoryAll->category}} <span><a href="{{url('category-edit')}}" class="btn btn-primary">Edit</a> | <a href="{{url('category-delete/'.$categoryAll->category_id)}}" class="btn btn-danger">Delete</a></span></li>

        
                        @endforeach
                      </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>


@endsection