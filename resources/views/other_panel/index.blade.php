@extends('other_panel/app')


@section('other_content')

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
                @include('other_panel.layouts.sidebar')
            </div>
            <div class="col-md-8">
                <div class="row">
                @foreach($allblogdata as $blogData)
                <div class="col-md-4">
                <div class="blog-box">
                    <img src="{{$blogData->blog_pic}}" alt="{{$blogData->blog_title}}" />
                    <h3>{{Str::limit($blogData->blog_title, 15)}}</h3>
                    <p>By <span>{{$blogData->blog_author}}</span> on <span>{{$blogData->created_at}}</span></p>
                    <p>{{ Str::limit($blogData->blog_desc, 25)}}</p>
                    {{-- {{ Str::limit($data_value->b_desc, 20) }} form string limitation --}}
                    <a href="{{ url('movie_detail/'.$blogData->blog_id) }}" class="btn btn-primary">Read more...</a>
                </div>
            </div>
                @endforeach
            </div>
            </div>

        </div>
    </div>
</section>

@endsection