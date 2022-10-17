@extends('user_panel/app')


@section('content')

{{-- <section class="banner">
    <div class="banner-box">
        <div class="intro-text">
            <div class="intro-text-box">
                <h1>Lorem Ipsum is simply dummy text</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>
        </div>
        <img src="assets/images/banner.jpg" alt="banner" />
    </div>
</section> --}}
<section class="featured-blog mtb-40">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @include('user_panel.layouts.sidebar')
            </div>
            <div class="col-md-8">
                <div class="row">
                @foreach($allblogdata as $blogData)
                <div class="col-md-4">
                <div class="blog-box">
                    <img src="{{$blogData->blog_pic}}" alt="{{$blogData->blog_title}}" />
                    <h3>{{$blogData->blog_title}}</h3>
                    <p>By <span>{{$blogData->blog_author}}</span> on <span>{{$blogData->created_at}}</span></p>
                    <p>{{$blogData->blog_desc}}</p>
                    <a href="detail.html" class="btn btn-danger">Read more...</a>
                </div>
            </div>
                @endforeach
            </div>
            </div>

        </div>
    </div>
</section>

@endsection