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
                              <h1>Update Author name</h1>
                          </div>
                        </div>
                        <div class="blog-form">
                          @if(session('success'))
                          <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                          
                          <form action="{{url('author-update-data/'.$AuthorData[0]->author_id)}}" method="post">
                            @csrf
                            <div class="form-group form-row">
                                <label class="col-md-3">Author Name <span class="required">*</span></label>
                                <div class="col-md-9">
                                  <input type="text" value="{{ $AuthorData[0]->authorName }}" name="authorName" class="form-control" placeholder="Title" required>
                                </div>
                            </div>

                           
                            <div class="form-group form-row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                  <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                          </form>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

