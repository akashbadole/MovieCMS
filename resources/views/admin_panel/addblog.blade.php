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
                              <h1>Create Blog</h1>
                          </div>
                        </div>
                        <div class="blog-form">
                          @if(session('success'))
                          <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                          {{-- <form action="{{url("add-blog-data")}}" action="post">
                            @csrf
                            <div class="form-group form-row">
                                <label class="col-md-3">Title <span class="required">*</span></label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control" placeholder="Title" required>
                                </div>
                            </div>
                            <div class="form-group form-row">
                              <label class="col-md-3">Is Featured</label>
                              <div class="col-md-9">
                                <input type="radio" name="is_featured" value="1" /> Yes
                                <input type="radio" name="is_featured" value="0" checked /> No
                              </div>
                            </div>
                            <div class="form-group form-row">
                              <label class="col-md-3">Is Active</label>
                              <div class="col-md-9">
                                <input type="radio" name="is_active" value="1" checked /> Yes
                                <input type="radio" name="is_active" value="0" /> No
                              </div>
                            </div>
                            <div class="form-group form-row">
                              <label class="col-md-3">Upload Image</label>
                              <div class="col-md-9">
                                <input type="file" id="image" />
                              </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="col-md-3">Description <span class="required">*</span></label>
                                <div class="col-md-9">
                                  <textarea name="description" rows="5" class="form-control" placeholder="Description" required></textarea>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                  <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                          </form> --}}

                          <form action="{{url('add-blog-data')}}" method="post" enctype="multipart/form-data">
                            @csrf
                          <div class="form-group form-row">
                                <label class="col-md-3">Blog Category <span class="required">*</span></label>
                                <div class="col-md-9">
                                  
                                  <select name="category_name" id="" class="form-control">
                                    <option value="">Select category</option>
                                    @foreach ($category_data as $category_value)
                                      <option value="{{ $category_value->category }}">{{ $category_value->category }}</option>
                                       @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="col-md-3">Blog Title <span class="required">*</span></label>
                                <div class="col-md-9">
                                  <input type="text" name="blog_title" class="form-control" placeholder="Title" required>
                                </div>
                            </div>
                            {{-- authorData --}}
                            <div class="form-group form-row">
                              <label class="col-md-3">Author Name <span class="required">*</span></label>
                              <div class="col-md-9">
                                <select name="authorData" id="" class="form-control">
                                  <option value="">select author</option>
                                  @foreach ($authorData as $authorValue)
                                  <option value="{{ $authorValue->authorName }}">{{ $authorValue->authorName }}</option>
                                  @endforeach
                                </select>
                              </div>
                          </div>
                            <div class="form-group form-row">
                                <label class="col-md-3">Blog Author <span class="required">*</span></label>
                                <div class="col-md-9">
                                  <input type="text" name="blog_author" class="form-control" placeholder="Author" required>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="col-md-3">Description <span class="required">*</span></label>
                                <div class="col-md-9">
                                  <textarea name="blog_desc" rows="5" class="form-control" placeholder="Description" required></textarea>
                                </div>
                            </div>
                          
                         
                            <div class="form-group form-row">
                              <label class="col-md-3">Upload Image</label>
                              <div class="col-md-9">
                                <input type="file" id="image" name="blog_pic"/>
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

