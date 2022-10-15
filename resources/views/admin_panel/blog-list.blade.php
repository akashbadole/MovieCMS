@extends('admin_panel/app')

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
                                <h1>Blogs</h1>
                            </div>
                            <div class="dash-nav">
                                <a href="{{('/addblog')}}" class="btn btn-success">Add Post</a>
                            </div>
                        </div>
                        @if(session('danger'))
                          <div class="alert alert-danger">{{ session('danger') }}</div>
                        @endif
                        <table class="table table-bordered table-striped table-responsive">
                            <tr>
                                <th>#ID</th>
                                <th>Image</th>
                                <th>Blog Category</th>
                                <th>Blog Title</th>
                                <th>Blog Author</th>
                                <th>Blog Description</th>
                                <th>Blog Created</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($blogData as $blogvalue)
                                
                            <tr>
                                <td>{{$blogvalue->blog_id}}</td>
                                <td><img src="{{$blogvalue->blog_pic}}"  style="border: solid red 1px;border-radius: 75%;" ></td>
                                <td>{{$blogvalue->blog_category}}</td>
                                <td>{{$blogvalue->blog_title}}</td>
                                <td>{{$blogvalue->blog_author}}</td>
                                <td>{{$blogvalue->blog_desc}}</td>
                                <td>{{$blogvalue->created_at}}</td>
                                <td>
                                    <a href="{{url('update-record/'.$blogvalue->blog_id)}}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{ url('delete-data/'.$blogvalue->blog_id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
    
                        </table>
                        <div align="center" style="margin:auto">{{ $blogData->links() }}</div>
                        <style>
                          .w-5 {
                                display: none !important;
                            }
                        </style>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
