
@extends("user_panel/app")
@section("content")
<section class="blog-detail mtb-40">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8">
    				<div class="blog-left">
                        <h1>{{$blog_data[0]->blog_title}}</h1>
                        <div class="posted-on">
                            <p>by <span>{{ $blog_data[0]->blog_author}}</span> on <span>{{ $blog_data[0]->created_at }}</span></p>
                        </div>
                        <div class="detail-img">
    					   <img src="{{ $blog_data[0]->blog_pic}}" alt="blog1" style="width:50%;height:100%" />
                        </div>
                        <div class="blog-desc">
        					<p>{{ $blog_data[0]->blog_desc}} </p>
                            
                        </div>
    				</div>

                    {{-- <form action="{{ url('add-comment/'.$blog_data[0]->blog_id) }}" method="post">
                        @csrf
                            <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">User name</label>
                            <input type="text" class="form-control" name="user_name"  placeholder="User Name">
                            </div>
                            <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Email Id</label>
                            <input type="text" class="form-control" name="email_id" placeholder="Email Id">
                            </div>

                            <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Subject </label>
                            <input type="text" class="form-control" name="subject"  placeholder="Subject">
                            </div>
                            <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Comments</label>
                            <textarea name="comment" id="" class="form-control" placeholder="Comment" ></textarea>
                            </div>
                            <div class="mb-3">
                                    <input type="submit" value="Add Cooment" name="add_comment" class="btn btn-success">
                            </div>
                    </form> --}}
    			</div>
    			<div class="col-md-4">
    				<div class="blog-right">
                        <div class="right-widget recent-post">
                            <h3>Recent Blogs</h3>
                            <a href="#">
                                <div class="rb-box">
                                    <div class="rb-box-img">
                                        <img src="assets/images/img1.jpg" alt="blog1" />
                                    </div>
                                    <div class="rb-box-desc">
                                        <h4>Sample blog post 1</h4>
                                        <p>Posted On: October 22, 2018</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="rb-box">
                                    <div class="rb-box-img">
                                        <img src="assets/images/img2.jpg" alt="blog1" />
                                    </div>
                                    <div class="rb-box-desc">
                                        <h4>Sample blog post 2</h4>
                                        <p>Posted On: October 22, 2018</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="rb-box">
                                    <div class="rb-box-img">
                                        <img src="assets/images/img3.jpg" alt="blog1" />
                                    </div>
                                    <div class="rb-box-desc">
                                        <h4>Sample blog post 3</h4>
                                        <p>Posted On: October 22, 2018</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="rb-box">
                                    <div class="rb-box-img">
                                        <img src="assets/images/img4.jpg" alt="blog1" />
                                    </div>
                                    <div class="rb-box-desc">
                                        <h4>Sample blog post 4</h4>
                                        <p>Posted On: October 22, 2018</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="rb-box">
                                    <div class="rb-box-img">
                                        <img src="assets/images/img5.jpg" alt="blog1" />
                                    </div>
                                    <div class="rb-box-desc">
                                        <h4>Sample blog post 5</h4>
                                        <p>Posted On: October 22, 2018</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                         <div class="right-widget categories">
                             <h3>Categories</h3>
                             <ul>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Culture</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Politics</a></li>
                                <li><a href="#">Opinion</a></li>
                                <li><a href="#">Science</a></li>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">Style</a></li>
                                <li><a href="#">Travel</a></li>
                            </ul>
                         </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

@endsection