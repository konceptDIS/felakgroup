@extends('layout', [$page = 'Home'])

@section('content')
<div class="page-wrapper">
<section class="main-slider-one">

            <div class="">
                <div class="main-slider-one__carousel cleenhearts-owl__carousel owl-carousel" data-owl-options='{
			"loop": true,
			"animateOut": "fadeOut",
			"animateIn": "fadeIn",
			"items": 1,
			"autoplay": true,
			"autoplayTimeout": 7000,
			"smartSpeed": 1000,
			"nav": false,
			"navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
			"dots": true,
			"margin": 0
			}'>
                    <div class="item">
                        <div class="main-slider-one__item">
                            <div class="main-slider-one__bg" style="background-image: url(assets/images/backgrounds/slider-1-1.jpg);"></div>

                            <div class="main-slider-one__content">
                                <h2 class="main-slider-one__title">
                                    <span class="main-slider-one__title__text">Felak Concept Limited</span><br>
                                    <span class="main-slider-one__title__text slider-text-2">Felak Concept Limited (FCL) is an expert consortium offering a range of world class consultancy, training and project management services to private and public sector clients.</span>
                                </h2><!-- slider-title -->
                                <div class="main-slider-one__btn">
                                    <a href="{{route('subsidiaries')}}" class="cleenhearts-btn">
                                        <div class="cleenhearts-btn__icon-box">
                                            <div class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></div>
                                        </div>
                                        <span class="cleenhearts-btn__text">Learn More</span>
                                    </a><!-- slider-btn -->

                                </div>
                            </div>
                        </div>
                    </div><!-- item -->
                    <div class="item">
                        <div class="main-slider-one__item">
                            <div class="main-slider-one__bg" style="background-image: url(assets/images/backgrounds/slider-1-2.jpg);"></div>

                            <div class="main-slider-one__content">

                                <h2 class="main-slider-one__title">
                                    <span class="main-slider-one__title__text">Koncept Digital Integrated Services.</span><br>
                                    <span class="main-slider-one__title__text slider-text-2">A technology company that innovative and scalable business quality engineering solutions that protect your brand through end-to-end value demonstration with laser focus on customer experience and release velocity. We have years of innovation and excellence.</span>
                                </h2><!-- slider-title -->

                                <div class="main-slider-one__btn">
                                    <a href="{{route('subsidiaries')}}" class="cleenhearts-btn">
                                        <div class="cleenhearts-btn__icon-box">
                                            <div class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></div>
                                        </div>
                                        <span class="cleenhearts-btn__text">Learn More</span>
                                    </a><!-- slider-btn -->

                                </div>
                            </div>
                        </div>
                    </div><!-- item -->
                    <div class="item">
                        <div class="main-slider-one__item">
                            <div class="main-slider-one__bg" style="background-image: url(assets/images/backgrounds/slider-1-3.jpg);"></div>

                            <div class="main-slider-one__content">

                                <h2 class="main-slider-one__title">
                                    <span class="main-slider-one__title__text">WishWich Koncept.</span><br>
                                    <span class="main-slider-one__title__text slider-text-2">a dynamic organisation that delivers services in Media, Tourism, Entertainment and Consultancy. Our creative approach to implementation has placed us on a vantage position to meet our clients' specific needs leading to optimal satisfaction.</span>
                                </h2><!-- slider-title -->
                                <div class="main-slider-one__btn">
                                    <a href="{{route('subsidiaries')}}" class="cleenhearts-btn">
                                        <div class="cleenhearts-btn__icon-box">
                                            <div class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></div>
                                        </div>
                                        <span class="cleenhearts-btn__text">Learn More</span>
                                    </a><!-- slider-btn -->
                                </div>
                            </div>
                        </div>
                    </div><!-- item -->
                </div>
            </div>
        </section>
        <!-- main-slider-end -->

        <section class=" section-space-top">
            <div class="container">
                <div class="row gutter-y-50">
                    <div class="col-xl-6">
                        <div class="sec-title">
                            <h6 class="sec-title__tagline @@extraClassName">WHO WE ARE</h6><!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title">Felak Concept Group</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="inspiring-one__text">Felak Concept Group is a professional consortium operating in diverse sectors such as Oil and Gas, Infrastrutural Engineering, Marine Advisory/Consultancy, Digital Solutions, Learning and Development, Media Consulting/Solutions, Design and Remodelling. with a robust corporate social responsibility platform (SEF) where we give back to the society.</p>
                        <a href="{{route('about')}}" class="cleenhearts-btn">
                            <div class="cleenhearts-btn__icon-box">
                                <div class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></div>
                            </div>
                            <span class="cleenhearts-btn__text">Learn More</span>
                        </a>
                    </div><!-- /.col-xl-6 -->
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="about-one__left">
                            <div class="about-one__image">
                                <img src="assets/images/about/about-1-1.png" alt="about" class="about-one__image__one">

                                <div class="about-one__profile volunteer-profile">
                                    <div class="volunteer-profile__inner">
                                        <img src="assets/images/resources/robert-joe-kerry.png" alt="Dr. (Mrs) Aisha Achimugu" class="volunteer-profile__image">
                                        <div class="volunteer-profile__info">
                                            <h4 class="volunteer-profile__name"><a href="#">Dr.(Mrs) Aisha Achimugu</a></h4><!-- /.volunteer-profile__name -->
                                            <p class="volunteer-profile__designation">Founder</p><!-- /.volunteer-profile__designation -->
                                        </div><!-- /.volunteer-profile__info -->
                                    </div><!-- /.volunteer-profile__inner -->
                                </div><!-- /.about-one__profile -->
                            </div><!-- /.about-one__image -->
                        </div><!-- /.about-one__left -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.inspiring-one-one section-space -->

        <section class="about-info @@extraClassName section-space">
            <div class="container">
                <div class="row gutter-y-30 justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="about-info__item">
                            <div class="about-info__icon">
                                <span class="icon-location-2"></span>
                            </div><!-- /.about-info__icon -->
                            <div class="about-info__content">
                                <div class="about-info__counter count-box">
                                    <h3 class="about-info__counter__text count-text" data-stop="20" data-speed="1500">00</h3>
                                    <h3 class="about-info__counter__text ">+</h3>
                                </div><!-- /.about-info__counter -->
                                <h5 class="about-info__title">years in service</h5>
                            </div><!-- /.about-info__content -->
                        </div><!-- /.about-info__item -->
                    </div><!-- /.col-xl-3 col-lg-4 col-md-6 -->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="about-info__item">
                            <div class="about-info__icon">
                                <span class="icon-teamwork"></span>
                            </div><!-- /.about-info__icon -->
                            <div class="about-info__content">
                                <div class="about-info__counter count-box">
                                    <h3 class="about-info__counter__text count-text" data-stop="500" data-speed="1500">00</h3>
                                    <h3 class="about-info__counter__text ">+</h3>
                                </div><!-- /.about-info__counter -->
                                <h5 class="about-info__title">Active Staff</h5>
                            </div><!-- /.about-info__content -->
                        </div><!-- /.about-info__item -->
                    </div><!-- /.col-xl-3 col-lg-4 col-md-6 -->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="about-info__item">
                            <div class="about-info__icon">
                                <span class="icon-team"></span>
                            </div><!-- /.about-info__icon -->
                            <div class="about-info__content">
                                <div class="about-info__counter count-box">
                                    <h3 class="about-info__counter__text count-text" data-stop="78" data-speed="1500">00</h3>
                                    <h3 class="about-info__counter__text ">+</h3>
                                </div><!-- /.about-info__counter -->
                                <h5 class="about-info__title">Projects Completed</h5>
                            </div><!-- /.about-info__content -->
                        </div><!-- /.about-info__item -->
                    </div><!-- /.col-xl-3 col-lg-4 col-md-6 -->
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="about-info__item">
                            <div class="about-info__icon">
                                <span class="icon-people"></span>
                            </div><!-- /.about-info__icon -->
                            <div class="about-info__content">
                                <div class="about-info__counter count-box">
                                    <h3 class="about-info__counter__text count-text" data-stop="6.9" data-speed="1500">00</h3>
                                    <h3 class="about-info__counter__text ">M+</h3>
                                </div><!-- /.about-info__counter -->
                                <h5 class="about-info__title">affected lives</h5>
                            </div><!-- /.about-info__content -->
                        </div><!-- /.about-info__item -->
                    </div><!-- /.col-xl-3 col-lg-4 col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-info section-space -->

        <section class="events-page section-space">
            <div class="container">
                <h6 class="sec-title__tagline @@extraClassName" style="margin-bottom: 30px">What's New</h6>
                <div class="tevents-page__carousel cleenhearts-owl__carousel cleenhearts-owl__carousel--basic-nav owl-theme owl-carousel" data-owl-options='{
            "items": 2,
            "margin": 30,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":true,
            "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
            "responsive":{
                "0":{
                    "items": 1,
                    "margin": 20
                },
                "575":{
                    "items": 1,
                    "margin": 30
                },
                "768":{
                    "items": 1,
                    "margin": 30
                },
                "992":{
                    "items": 2,
                    "margin": 30
                },
                "1200":{
                    "items": 2,
                    "margin": 30
                }
            }
            }'>
                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="event-card-grid @@extraClassName">
                            <a href="{{route('blog')}}" class="event-card-grid__image">
                                <img src="assets/images/events/event-4-1.jpg" alt="Let’s education for children get good life style with go us Our donation is hope">
                                <div class="event-card-grid__date-wrapper">
                                    <div class="event-card-grid__time">
                                        <span class="event-card-grid__time__icon fa fa-clock"></span>10:00 aM - 2.00 PM
                                    </div><!-- /.event-card-grid__time -->
                                    <div class="event-card-grid__date">03 Sep</div><!-- /.event-card-grid__date -->
                                </div>
                            </a><!-- /.event-card-grid__image -->
                            <div class="event-card-grid__content">
                                <h4 class="event-card-grid__title"><a href="{{route('blog')}}">Let’s education for children get good life style with go us Our donation is hope</a></h4><!-- /.event-card-grid__title -->
                                <ul class="event-card-grid__meta">
                                    <li>
                                        <h5 class="event-card-grid__meta__title">Organizer</h5>
                                        Ashton Porter
                                    </li>
                                    <li>
                                        <h5 class="event-card-grid__meta__title"><span class="icon-location"></span> Vanue</h5>
                                        350 5th AveNew York, NY 10118
                                    </li>
                                </ul><!-- /.event-card-grid__meta -->
                            </div><!-- /.event-card-grid__content -->
                        </div><!-- /.event-card-grid -->
                    </div><!-- /.item -->
                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="event-card-grid event-card-grid--reverse">
                            <a href="{{route('blog')}}" class="event-card-grid__image">
                                <img src="assets/images/events/event-4-2.jpg" alt="There are many variations of passages of available but majority have alteration">
                                <div class="event-card-grid__date-wrapper">
                                    <div class="event-card-grid__time">
                                        <span class="event-card-grid__time__icon fa fa-clock"></span>10:00 aM - 2.00 PM
                                    </div><!-- /.event-card-grid__time -->
                                    <div class="event-card-grid__date">03 Sep</div><!-- /.event-card-grid__date -->
                                </div>
                            </a><!-- /.event-card-grid__image -->
                            <div class="event-card-grid__content">
                                <h4 class="event-card-grid__title"><a href="{{route('blog')}}">There are many variations of passages of available but majority have alteration</a></h4><!-- /.event-card-grid__title -->
                                <ul class="event-card-grid__meta">
                                    <li>
                                        <h5 class="event-card-grid__meta__title">Organizer</h5>
                                        Ashton Porter
                                    </li>
                                    <li>
                                        <h5 class="event-card-grid__meta__title"><span class="icon-location"></span> Vanue</h5>
                                        350 5th AveNew York, NY 10118
                                    </li>
                                </ul><!-- /.event-card-grid__meta -->
                            </div><!-- /.event-card-grid__content -->
                        </div><!-- /.event-card-grid -->
                    </div><!-- /.item -->
                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="event-card-grid @@extraClassName">
                            <a href="{{route('blog')}}" class="event-card-grid__image">
                                <img src="assets/images/events/event-4-3.jpg" alt="If you are going to use a passage of Lorem Ipsum, you need to be sure there">
                                <div class="event-card-grid__date-wrapper">
                                    <div class="event-card-grid__time">
                                        <span class="event-card-grid__time__icon fa fa-clock"></span>10:00 aM - 2.00 PM
                                    </div><!-- /.event-card-grid__time -->
                                    <div class="event-card-grid__date">03 Sep</div><!-- /.event-card-grid__date -->
                                </div>
                            </a><!-- /.event-card-grid__image -->
                            <div class="event-card-grid__content">
                                <h4 class="event-card-grid__title"><a href="{{route('blog')}}">If you are going to use a passage of Lorem Ipsum, you need to be sure there</a></h4><!-- /.event-card-grid__title -->
                                <ul class="event-card-grid__meta">
                                    <li>
                                        <h5 class="event-card-grid__meta__title">Organizer</h5>
                                        Ashton Porter
                                    </li>
                                    <li>
                                        <h5 class="event-card-grid__meta__title"><span class="icon-location"></span> Vanue</h5>
                                        350 5th AveNew York, NY 10118
                                    </li>
                                </ul><!-- /.event-card-grid__meta -->
                            </div><!-- /.event-card-grid__content -->
                        </div><!-- /.event-card-grid -->
                    </div><!-- /.item -->
                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="event-card-grid event-card-grid--reverse">
                            <a href="{{route('blog')}}" class="event-card-grid__image">
                                <img src="assets/images/events/event-4-4.jpg" alt="injected humour, or randomised words which don’t look even use a passage">
                                <div class="event-card-grid__date-wrapper">
                                    <div class="event-card-grid__time">
                                        <span class="event-card-grid__time__icon fa fa-clock"></span>10:00 aM - 2.00 PM
                                    </div><!-- /.event-card-grid__time -->
                                    <div class="event-card-grid__date">03 Sep</div><!-- /.event-card-grid__date -->
                                </div>
                            </a><!-- /.event-card-grid__image -->
                            <div class="event-card-grid__content">
                                <h4 class="event-card-grid__title"><a href="{{route('blog')}}">injected humour, or randomised words which don’t look even use a passage</a></h4><!-- /.event-card-grid__title -->
                                <ul class="event-card-grid__meta">
                                    <li>
                                        <h5 class="event-card-grid__meta__title">Organizer</h5>
                                        Ashton Porter
                                    </li>
                                    <li>
                                        <h5 class="event-card-grid__meta__title"><span class="icon-location"></span> Vanue</h5>
                                        350 5th AveNew York, NY 10118
                                    </li>
                                </ul><!-- /.event-card-grid__meta -->
                            </div><!-- /.event-card-grid__content -->
                        </div><!-- /.event-card-grid -->
                    </div><!-- /.item -->
                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="event-card-grid @@extraClassName">
                            <a href="{{route('blog')}}" class="event-card-grid__image">
                                <img src="assets/images/events/event-4-5.jpg" alt="The generated Lorem Ipsum is therefore always free from repetition">
                                <div class="event-card-grid__date-wrapper">
                                    <div class="event-card-grid__time">
                                        <span class="event-card-grid__time__icon fa fa-clock"></span>10:00 aM - 2.00 PM
                                    </div><!-- /.event-card-grid__time -->
                                    <div class="event-card-grid__date">03 Sep</div><!-- /.event-card-grid__date -->
                                </div>
                            </a><!-- /.event-card-grid__image -->
                            <div class="event-card-grid__content">
                                <h4 class="event-card-grid__title"><a href="{{route('blog')}}">The generated Lorem Ipsum is therefore always free from repetition</a></h4><!-- /.event-card-grid__title -->
                                <ul class="event-card-grid__meta">
                                    <li>
                                        <h5 class="event-card-grid__meta__title">Organizer</h5>
                                        Ashton Porter
                                    </li>
                                    <li>
                                        <h5 class="event-card-grid__meta__title"><span class="icon-location"></span> Vanue</h5>
                                        350 5th AveNew York, NY 10118
                                    </li>
                                </ul><!-- /.event-card-grid__meta -->
                            </div><!-- /.event-card-grid__content -->
                        </div><!-- /.event-card-grid -->
                    </div><!-- /.item -->
                    <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="event-card-grid event-card-grid--reverse">
                            <a href="{{route('blog')}}" class="event-card-grid__image">
                                <img src="assets/images/events/event-4-6.jpg" alt="you need to be sure there isn’t anything embarrassing hidden in the middle">
                                <div class="event-card-grid__date-wrapper">
                                    <div class="event-card-grid__time">
                                        <span class="event-card-grid__time__icon fa fa-clock"></span>10:00 aM - 2.00 PM
                                    </div><!-- /.event-card-grid__time -->
                                    <div class="event-card-grid__date">03 Sep</div><!-- /.event-card-grid__date -->
                                </div>
                            </a><!-- /.event-card-grid__image -->
                            <div class="event-card-grid__content">
                                <h4 class="event-card-grid__title"><a href="{{route('blog')}}">you need to be sure there isn’t anything embarrassing hidden in the middle</a></h4><!-- /.event-card-grid__title -->
                                <ul class="event-card-grid__meta">
                                    <li>
                                        <h5 class="event-card-grid__meta__title">Organizer</h5>
                                        Ashton Porter
                                    </li>
                                    <li>
                                        <h5 class="event-card-grid__meta__title"><span class="icon-location"></span> Vanue</h5>
                                        350 5th AveNew York, NY 10118
                                    </li>
                                </ul><!-- /.event-card-grid__meta -->
                            </div><!-- /.event-card-grid__content -->
                        </div><!-- /.event-card-grid -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.events-page section-space -->

        <div class="client-carousel @@extraClassName d-flex justify-content-center" style="padding-bottom: 0px">
            <h6 class="sec-title__tagline @@extraClassName" style="position: absolute;">OUR SUBSIDIARIES</h6>
            <div class="container">
                <div class="client-carousel__one cleenhearts-owl__carousel cleenhearts-owl__carousel--basic-nav owl-theme owl-carousel" data-owl-options='{
            "items": 5,
            "margin": 65,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":true,
            "dots":false,
            "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
            "responsive":{
                "0":{
                    "items": 2,
                    "margin": 50
                },
                "360":{
                    "items": 3,
                    "margin": 40
                },
                "575":{
                    "items": 4,
                    "margin": 40
                },
                "768":{
                    "items": 4,
                    "margin": 80
                },
                "992":{
                    "items": 5,
                    "margin": 100
                },
                "1200":{
                    "items": 6,
                    "margin": 134
                }
            }
            }'>
                    <a href="https://felakconcept.net/" class="client-carousel__item">
                        <img src="{{asset('/assets/images/blog/blog-3-1.jpg')}}" alt="brand" class="client-carousel__item__img">
                        <img src="{{asset('/assets/images/blog/blog-3-1.jpg')}}" alt="brand" class="client-carousel__item__hover-img">
                    </a><!-- /.owl-slide-item-->
                    <a href="http://altexengineering.net/" class="client-carousel__item">
                        <img src="{{asset('/assets/images/blog/blog-3-2.jpg')}}" alt="brand" class="client-carousel__item__img">
                        <img src="{{asset('/assets/images/blog/blog-3-2.jpg')}}" alt="brand" class="client-carousel__item__hover-img">
                    </a><!-- /.owl-slide-item-->
                    <a href="https://oceangateoilandgas.net/" class="client-carousel__item">
                        <img src="{{asset('/assets/images/blog/blog-3-3.jpg')}}" alt="brand" class="client-carousel__item__img">
                        <img src="{{asset('/assets/images/blog/blog-3-3.jpg')}}" alt="brand" class="client-carousel__item__hover-img">
                    </a><!-- /.owl-slide-item-->
                    <a href="https://konceptdigital.net/" class="client-carousel__item">
                        <img src="{{asset('/assets/images/blog/blog-3-4.jpg')}}" alt="brand" class="client-carousel__item__img">
                        <img src="{{asset('/assets/images/blog/blog-3-4.jpg')}}" alt="brand" class="client-carousel__item__hover-img">
                    </a><!-- /.owl-slide-item-->
                    <a href="http://aydolinternational.net/" class="client-carousel__item">
                        <img src="{{asset('/assets/images/blog/blog-3-5.jpg')}}" alt="brand" class="client-carousel__item__img">
                        <img src="{{asset('/assets/images/blog/blog-3-5.jpg')}}" alt="brand" class="client-carousel__item__hover-img">
                    </a><!-- /.owl-slide-item-->
                    <a href="http://scscng.net/" class="client-carousel__item">
                        <img src="{{asset('/assets/images/blog/blog-3-6.jpg')}}" alt="brand" class="client-carousel__item__img">
                        <img src="{{asset('/assets/images/blog/blog-3-6.jpg')}}" alt="brand" class="client-carousel__item__hover-img">
                    </a><!-- /.owl-slide-item-->
                    <a href="https://wishwhich.net/" class="client-carousel__item">
                        <img src="{{asset('/assets/images/blog/blog-3-7.jpg')}}" alt="brand" class="client-carousel__item__img">
                        <img src="{{asset('/assets/images/blog/blog-3-7.jpg')}}" alt="brand" class="client-carousel__item__hover-img">
                    </a><!-- /.owl-slide-item-->
                    <a href="http://samempowermentfoundation.org/" class="client-carousel__item">
                        <img src="{{asset('/assets/images/blog/blog-3-8.jpg')}}" alt="brand" class="client-carousel__item__img">
                        <img src="{{asset('/assets/images/blog/blog-3-8.jpg')}}" alt="brand" class="client-carousel__item__hover-img">
                    </a><!-- /.owl-slide-item-->
                </div><!-- /.thm-owl__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->

        <section class="section-space-bottom" style="margin-top: 100px;">
            <div class="container">
                <div class="testimonials-two__top">
                    <div class="row gutter-y-30 align-items-center">
                        <div class="col-lg-7">
                            <div class="sec-title">
                                <h3 class="sec-title__title">Diversity is our strength</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                        </div><!-- /.col-lg-7 -->
                        <div class="col-lg-5 wow fadeInRight" data-wow-duration="1500ms">
                            <p class="testimonials-two__text">At our company, diversity fuels innovation and growth across our multiple subsidiaries. Our varied expertise spans numerous sectors, enriching our collective knowledge and capabilities. We thrive on the unique perspectives and talents that each team member brings, driving us towards a stronger, more inclusive future.</p><!-- /.testimonials-two__text -->
                        </div><!-- /.col-lg-5 -->
                    </div><!-- /.row gutter-y-40 -->
                </div><!-- /.testimonials-two__top -->
            </div>
        </section>

</div>
@endsection
