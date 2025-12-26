@extends('layouts.frontend')

@section('title', $blog->title . ' || Spectrum Robotics Blog')

@section('content')
    <!-- page-banner9 -->
    <section class="page-banner9">
        <div class="shape"></div>
        <div class="shape3"></div>
        <div class="staff-text">Articles</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">{{ $blog->title }}</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='{{ route('home') }}' title>Home</a></li>
            <li>/</li>
            <li><a href='{{ route('blog') }}' title>Blog</a></li>
            <li>/</li>
            <li>{{ Str::limit($blog->title, 30) }}</li>
        </ul>
    </section>
    <!-- End page-banner9 -->

    <!-- blog-sec4 -->
    <section class="blog-single ibt-section-gap">
        <button class="sidebar-toggle"></button>
        <!-- Overlay -->
        <div class="sidebar-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="blog-single-content">
                        <div class="blog-img4">
                            @if($blog->featured_image)
                                <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}">
                            @else
                                <img src="{{ asset('frontend/assets/images/blog/blog5-1.png') }}" alt="{{ $blog->title }}">
                            @endif
                            <span class="blog-meta4">{{ $blog->formatted_date }}
                                {{ $blog->author ? '/ ' . $blog->author : '' }}</span>
                        </div>

                        <div class="blog-content-body">
                            {!! $blog->content !!}
                        </div>

                        <div class="post-meta2">
                            @if($blog->author)
                                <h4 class="name">By <a href="#">{{ $blog->author }}</a></h4>
                            @endif
                            @if($blog->tags && count($blog->tags) > 0)
                                <ul class="tag-list">
                                    @foreach($blog->tags as $tag)
                                        <li><a href="#" title="">/ {{ $tag }} /</a></li>
                                    @endforeach
                                </ul>
                            @endif
                            {{-- Social icons hidden
                            <ul class="social-icon">
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                                        target="_blank" title=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($blog->title) }}"
                                        target="_blank" title=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($blog->title) }}"
                                        target="_blank" title=""><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                            --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="side-bar2">
                        <button class="sidebar-close"></button>
                        <div class="form-widget side-widget2 mb-0">
                            <form action="{{ route('blog') }}" method="GET">
                                <input type="text" name="search" placeholder="Search" required>
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                        @if($recentPosts->count() > 0)
                            <div class="post-widget side-widget2">
                                <h4 class="side-bar-title">Recent posts</h4>
                                @foreach($recentPosts as $recentPost)
                                    <div class="recent-post {{ $loop->last ? 'mb-0' : '' }}">
                                        @if($recentPost->featured_image)
                                            <img src="{{ asset($recentPost->featured_image) }}" alt="{{ $recentPost->title }}">
                                        @else
                                            <img src="{{ asset('frontend/assets/images/blog/post1-1.png') }}"
                                                alt="{{ $recentPost->title }}">
                                        @endif
                                        <span class="sub-title">{{ $recentPost->formatted_date }}</span>
                                        <h4 class="title"><a href='{{ route('blog.single', $recentPost->slug) }}'
                                                title>{{ Str::limit($recentPost->title, 40) }}</a></h4>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        @if($blog->tags && count($blog->tags) > 0)
                            <div class="tag-list-widget side-widget2">
                                <h4 class="side-bar-title">Tags</h4>
                                <ul class="tag-list">
                                    @foreach($blog->tags as $tag)
                                        <li><a href="#" title="">/ {{ $tag }} /</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="strategy-widget side-widget">
                            <img src="{{ asset('frontend/assets/images/event/shades.png') }}" alt="Spectrum Robotics">
                            <div class="strategy-content">
                                <h4 class="title">Robotics Solutions</h4>
                                <p>Discover our range of robotics solutions for your business</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog-sec4 -->
@endsection

@section('contact_section')
    @include('partials.contact')
@endsection