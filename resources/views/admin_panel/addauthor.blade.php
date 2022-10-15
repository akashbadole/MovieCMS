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
                              <h1>Add Author</h1>
                          </div>
                        </div>
                        <div class="blog-form">
                          @if(session('success'))
                          <div class="alert alert-success">{{session('success')}}</div>
                          @endif
                          @if(session('danger'))
                          <div class="alert alert-danger">{{session('danger')}}</div>
                          @endif
                          <form action="{{ url('addauthor-data')}}" method="post">
                            @csrf
                            <div class="form-group form-row">
                                <label class="col-md-3">Add Author Name <span class="required">*</span></label>
                                <div class="col-md-9">
                                  <input type="text" name="authorName" class="form-control" placeholder="Add Author Name" required>
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
                        <hr />
                        <div>
                          <h2>Author Data</h2>
                          <ul>
                          @foreach ($authorData as $author )
                            <li class="mt-4 mb-4">{{$author->authorName}} <span>   <a href="{{url('author-edit/'.$author->author_id)}}" class="btn btn-primary">Edit</a> | 
                              <a href="{{url('author-delete/'.$author->author_id)}}" class="btn btn-danger">Delete</a></span></li>
                          @endforeach
                        </ul>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</section>


@endsection