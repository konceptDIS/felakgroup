@extends('layout', [$page = 'Blog'])

@section('content')
<div class="page-wrapper">
    <section class="page-header @@extraClassName">
        <div class="page-header__bg" style="background-image: url('/assets/images/backgrounds/page-header-bg-1-1.jpg');"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title">Blog</h2>
            <ul class="cleenhearts-breadcrumb list-unstyled">
                <li><i class="icon-home"></i> <a href="index.html">Home</a></li>
                <li><span>Blog</span></li>
                <li><span>{{$post->link}}</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="blog-page section-space">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-8">
                    <div class="blog-details">
                        <div class="blog-card blog-card-four @@extraClassName wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <a href="/b/{{$post->link}}" class="blog-card__image" style="max-height: 500px">
                                <img src="{{ asset('/storage/images/'.$post->thumbnail) }}" alt="{{$post->title}}" style="object-fit: cover;">
                                <div class="blog-details__hall">
                                    <span>{{$post->category->title}}</span>
                                </div><!-- /.blog-details__hall -->
                                <div class="blog-card__date"><span>{{$post->created_at->format('j')}}</span>
                                    {{$post->created_at->format('M')}}</div><!-- /.blog-card__date -->
                            </a><!-- /.blog-card__image -->
                            <div class=" blog-card-four__content">
                                <ul class="list-unstyled blog-card-four__meta">
                                    <li>
                                        <a href="/b/{{$post->link}}"><span class="icon-user"></span>{{$post->user->first_name}} {{$post->user->last_name}}</a>
                                    </li>
                                    {{-- <li>
                                        <a href="/b/{{$post->link}}"><span class="icon-comment"></span>2 Comments</a>
                                    </li> --}}
                                </ul><!-- /.list-unstyled blog-card-four__meta -->
                                <h3 class="blog-card__title"><a href="/b/{{$post->link}}">{{$post->title}}</a></h3><!-- /.blog-card__title -->
                                <p class="blog-card-four__text blog-card-four__text--one">
                                    {!!$post->content!!}
                                </p><!-- /.blog-card-four__text -->
                                <div class="blog-details__inner mt-5">
                                    <div class="row gutter-y-30">
                                        <div class="col-md-6 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                            @if ($previousPost)
                                                <div class="blog-details__inner__image">
                                                    <a href="/b/{{$previousPost->link}}" title="Prev: {{$previousPost->title}}">
                                                        <div class="post-overlay">
                                                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                                        </div>
                                                        <img src="{{ asset('/storage/images/'.$previousPost->thumbnail) }}" alt="blog details">
                                                    </a>
                                                </div><!-- /.blog-details__inner__image -->
                                            @endif
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6 wow fadeInUp d-flex justify-content-end" data-wow-delay="300ms" data-wow-duration="1500ms">
                                            @if ($nextPost)
                                                <div class="blog-details__inner__image">
                                                    <a href="/b/{{$nextPost->link}}" title="Next: {{$nextPost->title}}">
                                                        <div class="post-overlay">
                                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                                        </div>
                                                        <img src="{{ asset('/storage/images/'.$nextPost->thumbnail) }}" alt="blog details">
                                                    </a>
                                                </div><!-- /.blog-details__inner__image -->
                                            @endif
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->

                                </div><!-- /.blog-details__inner -->
                            </div><!-- /.blog-card-four__content -->
                        </div><!-- /.blog-card -->
                        <div class="blog-details__meta">
                            <div class="blog-details__tags">
                                <h4 class="blog-details__meta__title">Tags:</h4><!-- /.blog-details__meta__title -->
                                <div class="blog-details__tags__box">
                                    @foreach ($tags as $tag)
                                        <a href="javascript:void(0);">{{ trim($tag) }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="blog-details__social">
                                <h4 class="blog-details__meta__title">share:</h4><!-- /.blog-details__meta__title -->
                                <div class="social-link">
                                    <a href="https://facebook.com/">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://twitter.com/">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://linkedin.com/" aria-hidden="true">
                                        <i class="fab fa-linkedin-in"></i>
                                        <span class="sr-only">Linkedin</span>
                                    </a>
                                    <a href="https://youtube.com/" aria-hidden="true">
                                        <i class="fab fa-youtube"></i>
                                        <span class="sr-only">Youtube</span>
                                    </a>
                                </div><!-- /.social-link -->
                            </div><!-- /.blog-details__social -->
                        </div><!-- /.blog-details__meta -->
                    </div><!-- /.blog-details -->




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
                                        <li><a href="#"><span>{{$cat->title}}</span> <span>({{$cat->posts->count()}})</span></a></li>
                                    @endforeach
                                </ul><!-- /.sidebar__categories list-unstyled -->
                            </div><!-- /.sidebar__categories-wrapper sidebar__single -->
                            @endif
                            @if (count($tags)>0)
                                <div class="sidebar__tags-wrapper sidebar__single">
                                    <h4 class="sidebar__title">Tags</h4><!-- /.sidebar__title -->
                                    <div class="sidebar__tags">
                                        @foreach ($tags as $tag)
                                            <a href="javascript:void(0);">{{ trim($tag) }}</a>
                                        @endforeach
                                    </div><!-- /.sidebar__tags -->
                                </div><!-- /.sidebar__tags-wrapper sidebar__single -->
                            @endif

                        </aside><!-- /.widget-area -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-page section-space -->
</div>
@endsection
