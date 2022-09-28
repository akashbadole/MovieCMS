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
                          <form action="">
                            <div class="form-group form-row">
                                <label class="col-md-3">Title <span class="required">*</span></label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control" placeholder="Title" required>
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
                </div>
            </div>
        </div>
    </div>
</section>


@endsection