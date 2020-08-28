@extends('layouts.layout')

@section('content')
    <div class="site-section py-0">
        <div class="owl-carousel hero-slide owl-style">
            @forelse($posts as $post)

                <div class="site-section">
                    <div class="container">
                        <div class="half-post-entry d-block d-lg-flex bg-light">
                            <div class="img-bg" style="background-image: url('/storage/{{$post->image}}')"></div>
                            <div class="contents">
                                <span class="caption">Editor's Pick</span>
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <p class="mb-3">{{$post->comment}}</p>

                                <div class="post-meta">
                                    <span class="d-block"><a
                                            href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                            class="icon-star2"></span></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
@empty
                <div class="site-section">
                    <div class="container">
                        <div class="half-post-entry d-block d-lg-flex bg-light">
<p>No posts!To see posts,please follow users!</p>
                            </div>
                        </div>
                    </div>
                </div>

            @endforelse



        </div>



    <div class="site-section" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h2>Editor's Pick</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="post-entry-1">
                                <a href="post-single.html"><img src="images/img_h_1.jpg" alt="Image" class="img-fluid"></a>
                                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus
                                    praesentium neque, voluptatum quam quibusdam.</p>
                                <div class="post-meta">
                                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                            class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post-entry-2 d-flex bg-light">
                                <div class="thumbnail" style="background-image: url('images/img_v_1.jpg')"></div>
                                <div class="contents">
                                    <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                        <span class="date-read">Jun 14 <span
                                                class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="post-entry-2 d-flex">
                                <div class="thumbnail" style="background-image: url('images/img_v_2.jpg')"></div>
                                <div class="contents">
                                    <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                        <span class="date-read">Jun 14 <span
                                                class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="post-entry-2 d-flex">
                                <div class="thumbnail" style="background-image: url('images/img_v_3.jpg')"></div>
                                <div class="contents">
                                    <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                                        <span class="date-read">Jun 14 <span
                                                class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section-title">
                        <h2>All users</h2>
                    </div>

                    @foreach($allusers as $user)
                        <div class="trend-entry d-flex">
                            <div class="number align-self-start"></div>
                            <div class="trend-contents">
                                <div class="d-flex">
                                <img src="{{$user->profile->profileImage()}}" style="width: 20%" class="rounded-circle" alt="">

                                <h2><a href="/profile/{{$user->id}}">{{$user->username}}</a></h2>
                                </div>
                                <div class="post-meta">
                                <span class="d-block" ></span>
                                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
                                            class="icon-star2"></span></span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <p>
                        <a href="#" class="more">See All Trends <span class="icon-keyboard_arrow_right"></span></a>
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!-- END section -->







@endsection
