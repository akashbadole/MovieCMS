
@extends("other_panel/app")
@section("other_content")
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
                    <h4>Comments</h4>
                    <div>
                        @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                    </div>
                    <form action="{{ url('add-comment/'.$blog_data[0]->blog_id) }}" method="post">
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
                                    <input type="submit" value="Add Comment" name="add_comment" class="btn btn-success">
                            </div>
                    </form>

                    <div>
                        <h4>Latest comment</h4>
                        @foreach($comment_data as $comments)
                        <table class="table-responsive table-striped">
                            <tr>
                                <th>User Name</th>
                                <th>Email Id</th>
                                <th>Subject</th>
                                <th>Comments Detail</th>
                            </tr>
                            <tr>
                                <td>{{$comments->user_name}}</td>
                                <td>{{$comments->email_id}}</td>
                                <td>{{$comments->subject}}</td>
                                <td>{{$comments->comment}}</td>
                            </tr>

                        </table>
                        @endforeach
                    </div>
    			</div>
    			<div class="col-md-4">
    				<div class="blog-right">
                        <div class="right-widget recent-post">
                            <h3>Recent Movies Blogs</h3>
                            @foreach($all_blog_data as $blogdata)
                            <a href="{{ url('movie_detail/'.$blogdata->blog_id) }}">
                                <div class="rb-box">
                                    <div class="rb-box-img">
                                        <img src="{{$blogdata->blog_pic}}" alt="{{$blogdata->blog_title}}" />
                                    </div>
                                    <div class="rb-box-desc">
                                        <h4>{{$blogdata->blog_title}}</h4>
                                        <p>Posted By: {{$blogdata->blog_author}}</p>
                                        <p>Posted On: {{$blogdata->created_at}}</p>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                         <div class="right-widget categories">
                             <h3>Categories</h3>
                            @foreach($allcategorydetail as $allcategory)
                             <ul>
                                <li><a href="{{URL::to('/?val='.$allcategory->category)}}">{{$allcategory->category}}</a></li>
                            </ul>
                            @endforeach
                         </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

@endsection