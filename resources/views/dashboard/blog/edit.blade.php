@extends('home')
@section('title', 'Update Blog')
@section('content')

<section id="main-banner-page" style="width:100%; height:80px;background:url(/images/banner1-1.jpg)"></section>

<div class="container-fluid">
    <div class="row flex-nowrap">

        @include('dashboard.sidebar')

        <div class="col py-3" style="background:#eee">

            @include('partials.message')

            <div class="col-md-8 whitebox">
                <div class="col-md-12 text-center wow fadeIn" data-wow-delay="300ms">
                    <h2 class="heading bottom30 darkcolor font-light2">Dashboard
                    </h2>
                </div>
                <div class="widget logincontainer">
                    <h3 class="darkcolor bottom30 text-center text-lg-start">Edit Blog 
                        <a class="btn btn-primary" style="float:right;font-size:15px" href="{{route('blog.index')}}">View</a>
                    </h3>
                    <form class="getin_form border-form" id="login" action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="blog-title" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Blog Title:" required id="blog-title" name="blog_title" value="{{ $blog->blog_title }}">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="blog-date" class="d-none"></label>
                                    <input class="form-control date-picker" type="date" placeholder="Publish Date: (MM-DD-YYYY)" id="blog-date" name="blog_date" value="{{ $blog->blog_date }}">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="blog-image" class="d-none"></label>
                                    <input class="form-control" type="file" placeholder="Blog Image:" id="blog-image" name="blog_image">
                                    <label style="color:red">Blog image size 6:4 or (600px X 400px)</label>
                                </div>
                                <img src="{{$blog->blog_image}}" altl="" style="width:100%;max-width:200px;margin-bottom:15px">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="blog-details" class="d-none"></label>
                                    <textarea class="form-control" placeholder="Blog details:" required id="blog-details" name="blog_details" rows="10">{{ $blog->blog_details }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom30 ml-1">
                                    <div class="form-check text-left">
                                        <input class="form-check-input" {{$blog->status == 'Active'?'checked':''}} type="checkbox" value="Active" name="status" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Publish</label>
                                    </div>
                                    <div class="form-check text-left">
                                        <input class="form-check-input" {{$blog->home == 'Yes'?'checked':''}} type="checkbox" value="Yes" name="home" id="home">
                                        <label class="form-check-label" for="home">Home</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="button gradient-btn">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $('.dropify').dropify();
    CKEDITOR.replace( 'blog-details' );
</script>
@endsection