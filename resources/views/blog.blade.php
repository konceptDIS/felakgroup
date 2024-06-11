@extends('layout', [$page = 'Blog'])

@section('content')
<div class="page-wrapper">
    <section class="page-header @@extraClassName">
        <div class="page-header__bg" style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.jpg');"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title">Blog</h2>
            <ul class="cleenhearts-breadcrumb list-unstyled">
                <li><i class="icon-home"></i> <a href="{{route('index')}}">Home</a></li>
                <li><span>Blog</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="blog-page section-space">
        <div class="container">
        <div class="row gutter-y-60">
                <div class="col-lg-8">
                    <div class="row gutter-y-40">
                        @if(count($posts) > 0)
                        @foreach ($posts as $post)
                            <div class="col-md-12">
                                <div class="blog-card blog-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                                    <a href="/b/{{$post->link}}" class="blog-card__image" style="height: 400px">
                                        <img src="{{ asset('/storage/images/'.$post->thumbnail) }}" alt="{{$post->title}}" style="object-fit: cover; height:100%">
                                        <div class="blog-card__date"><span>{{$post->created_at->format('j')}}</span>
                                            {{$post->created_at->format('M')}}</div><!-- /.blog-card__date -->
                                    </a><!-- /.blog-card__image -->
                                    <div class=" blog-card-four__content">
                                        <ul class="list-unstyled blog-card-four__meta">
                                            <li>
                                                <a href="#"><span class="icon-user"></span>
                                                    {{$post->user->first_name}} {{$post->user->last_name}}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="icon-eye"></span>
                                                    {{$post->views}} Views
                                                </a>
                                            </li>
                                        </ul><!-- /.list-unstyled blog-card-four__meta -->
                                        <h3 class="blog-card__title"><a href="#">{{$post->title}}</a></h3><!-- /.blog-card__title -->
                                        <p class="blog-card-four__text">{{$post->excerpt}}</p><!-- /.blog-card-four__text -->
                                        <a href="/b/{{$post->link}}" class="cleenhearts-btn cleenhearts-btn--border">
                                            <div class="cleenhearts-btn__icon-box">
                                                <div class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></div>
                                            </div>
                                            <span class="cleenhearts-btn__text">news details</span>
                                        </a><!-- /.blog-card__link -->
                                    </div><!-- /.blog-card-four__content -->
                                </div><!-- /.blog-card -->
                            </div><!-- /.col-md-12 -->
                        @endforeach
                        @endif
                        {{-- <div class="col-md-12">
                            <ul class="post-pagination blog-page__pagination">
                                <li>
                                    <a href="blog.html"><span class="icon-arrow-left"></span></a>
                                </li>
                                <li>
                                    <a href="blog.html">01</a>
                                </li>
                                <li>
                                    <a href="blog.html">02</a>
                                </li>
                                <li>
                                    <a href="blog.html">03</a>
                                </li>
                                <li>
                                    <a href="blog.html"><span class="icon-arrow-right"></span></a>
                                </li>
                            </ul><!-- /.post-pagination -->
                        </div><!-- /.col-md-12 --> --}}
                    </div><!-- /.row -->
                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <aside class="widget-area">
                            <div class="sidebar__form sidebar__single">
                                <h4 class="sidebar__title sidebar__form__title">Search</h4><!-- /.sidebar__title -->
                                <form action="#" class="sidebar__search">
                                    <input type="text" placeholder="Search Here" />
                                    <button type="submit" aria-label="search submit">
                                        <span class="icon-search"></span>
                                    </button>
                                </form><!-- /.sidebar__search -->
                            </div><!-- /.sidebar__form sidebar__single -->
                            @if (count($latest)>0)
                            <div class="sidebar__posts-wrapper sidebar__single">
                                <h4 class="sidebar__title">Latest posts</h4><!-- /.sidebar__title -->
                                <ul class="sidebar__posts list-unstyled">
                                    @foreach ($latest as $post)
                                        <li class="sidebar__posts__item">
                                            <div class="sidebar__posts__image" style="overflow: hidden">
                                                <img src="{{ asset('/storage/images/'.$post->thumbnail) }}" alt="Latest posts">
                                            </div><!-- /.sidebar__posts__image -->
                                            <div class="sidebar__posts__content">
                                                <p class="sidebar__posts__meta"><a href="blog-list-left.html">
                                                        <span class="icon-user"></span>
                                                        By {{$post->user->first_name}} {{$post->user->last_name}}</a></p><!-- /.sidebar__posts__date -->
                                                <h4 class="sidebar__posts__title">
                                                    <a href="/b/{{$post->link}}">{{$post->title}}</a></h4><!-- /.sidebar__posts__title -->
                                            </div><!-- /.sidebar__posts__content -->
                                        </li>
                                    @endforeach
                                </ul><!-- /.sidebar__posts list-unstyled -->
                            </div><!-- /.sidebar__posts-wrapper sidebar__single -->
                            @endif
                            @if (count($categories)>0)
                            <div class="sidebar__categories-wrapper sidebar__single">
                                <h4 class="sidebar__title">Categories</h4><!-- /.sidebar__title -->
                                <ul class="sidebar__categories list-unstyled">
                                    @foreach ($categories as $cat)
                                        <li><a href="blog-details-right.html"><span>{{$cat->title}}</span> <span>({{$cat->posts->count()}})</span></a></li>
                                    @endforeach
                                </ul><!-- /.sidebar__categories list-unstyled -->
                            </div><!-- /.sidebar__categories-wrapper sidebar__single -->
                            @endif

                        </aside><!-- /.widget-area -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.events-page section-space -->
</div>
@endsection
