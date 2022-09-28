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
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>#ID</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Posted On</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="assets/images/img1.jpg" ></td>
                                <td>Sample blog post 1</td>
                                <td>Technology</td>
                                <td>October 22, 2018</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="assets/images/img2.jpg" ></td>
                                <td>Sample blog post 2</td>
                                <td>Business</td>
                                <td>October 22, 2018</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="assets/images/img3.jpg" ></td>
                                <td>Sample blog post 3</td>
                                <td>Science</td>
                                <td>October 22, 2018</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><img src="assets/images/img4.jpg" ></td>
                                <td>Sample blog post 4</td>
                                <td>Technology</td>
                                <td>October 22, 2018</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><img src="assets/images/img5.jpg" ></td>
                                <td>Sample blog post 5</td>
                                <td>Business</td>
                                <td>October 22, 2018</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        </table>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
