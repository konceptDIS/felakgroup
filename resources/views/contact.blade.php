@extends('layout')

@section('content')
<div class="page-wrapper">
<section class="page-header @@extraClassName">
            <div class="page-header__bg" style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.jpg');"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title">Contact Us</h2>
                <ul class="cleenhearts-breadcrumb list-unstyled">
                    <li><i class="icon-home"></i> <a href="index.html">Home</a></li>
                    <li><span>Contact Us</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="contact-one section-space @@extraClassName">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="contact-one__map">
                            <div class="google-map contact-one__google__map">
                                <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="map__contact-one__google__map" allowfullscreen></iframe>
                            </div>
                            <!-- /.google-map -->
                            <div class="contact-one__info">
                                <div class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <span class="icon-location"></span>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <h4 class="contact-one__info__title">Address</h4>
                                        <address class="contact-one__info__text">6C, Rudolf Close,
                                            Off Katsina-Ala Crescent,
                                            Maitama, Abuja.</address>
                                    </div><!-- /.contact-one__info__content -->
                                </div><!-- /.contact-one__info__item -->
                                <div class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <span class="icon-phone"></span>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <h4 class="contact-one__info__title">Quick Contact</h4>
                                        <a href="tel:+234 (0) 810 388 0336" class="contact-one__info__text contact-one__info__text--link">+234 (0) 810 388 0336</a>,
                                        <a href="tel:+234 (0) 905 320 0000" class="contact-one__info__text contact-one__info__text--link">+234 (0) 905 320 0000</a>,
                                        <a href="tel:+234 (0) 909 996 6648" class="contact-one__info__text contact-one__info__text--link">+234 (0) 909 996 6648</a>
                                        
                                    </div><!-- /.contact-one__info__content -->
                                </div><!-- /.contact-one__info__item -->
                                <div class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <span class="icon-envelope"></span>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <h4 class="contact-one__info__title">Email</h4>
                                        <a href="mailto:info@felakgroup.net" class="contact-one__info__text contact-one__info__text--link">info@felakgroup.net</a>
                                    </div><!-- /.contact-one__info__content -->
                                </div><!-- /.contact-one__info__item -->
                            </div><!-- /.contact-one__info -->
                        </div><!-- /.contact-one__map -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="contact-one__form">
                            <div class="contact-one__form__bg" style="background-image: url('assets/images/backgrounds/contact-bg-1-1.png');"></div><!-- /.contact-one__form__bg -->
                            <h2 class="contact-one__title">Leave us a Message</h2>
                            <form class="contact-one__form__inner contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms" action="https://bracketweb.com/cleenhearts-html/inc/sendemail.php">
                                <div class="row gutter-y-20">
                                    <div class="col-12">
                                        <div class="form-one__control">
                                            <input type="text" name="name" id="name" placeholder="enter your name" class="form-one__control__input">
                                        </div><!-- /.form-one__control -->
                                    </div><!-- /.col-12 -->
                                    <div class="col-12">
                                        <div class="form-one__control">
                                            <input type="text" name="email" id="email" placeholder="your email" class="form-one__control__input">
                                        </div><!-- /.form-one__control -->
                                    </div><!-- /.col-12 -->
                                    <div class="col-12">
                                        <div class="form-one__control">
                                            <input type="tel" name="phone" id="phone" placeholder="phone no" class="form-one__control__input">
                                        </div><!-- /.form-one__control -->
                                    </div><!-- /.col-12 -->
                                    <div class="col-12">
                                        <div class="form-one__control">
                                            <select class="selectpicker" aria-label="Default select example">
                                                <option selected="">subject</option>
                                                <option value="1">Volunteer</option>
                                                <option value="2">Donations</option>
                                                <option value="3">Foods Support</option>
                                                <option value="4">Education Support</option>
                                                <option value="4">Medical Support</option>
                                                <option value="4">Sports Support</option>
                                            </select>
                                        </div><!-- /.form-one__control -->
                                    </div><!-- /.col-12 -->
                                    <div class="col-12">
                                        <div class="form-one__control">
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="write message . . ." class="form-one__control__input form-one__control__message"></textarea>
                                        </div><!-- /.form-one__control -->
                                    </div><!-- /.col-12 -->
                                    <div class="col-12">
                                        <div class="contact-one__btn-box form-one__control">
                                            <button type="submit" class="cleenhearts-btn @@extraClassNameBtn">
                                                <span class="cleenhearts-btn__icon-box">
                                                    <span class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></span>
                                                </span>
                                                <span class="cleenhearts-btn__text">send message</span>
                                            </button>
                                        </div><!-- /.form-one__control -->
                                    </div><!-- /.col-12 -->
                                </div><!-- /.row -->
                            </form><!-- /.contact-one__form__inner -->
                        </div><!-- /.contact-one__form -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->

        <section class="worldwide-one @@extraClassName section-space">
            <div class="worldwide-one__bg" style="background-image: url('assets/images/backgrounds/worldwide-bg-1-1.png');"></div><!-- /.worldwide-one__bg -->
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-xl-6">
                        <div class="worldwide-one__content">
                            <div class="sec-title">

                                <h6 class="sec-title__tagline @@extraClassName">WE ARE WORLDWIDE</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">We Are Serving Everywhere</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="worldwide-one__text">Our global presence ensures you're supported, no matter your corner of the world. We're a diverse company, offering subsidies across oil & gas, technology, hospitality, engineering, and security.  Experience the power of a connected world – explore how we can empower your needs.</p><!-- /.worldwide-one__text -->
                            
                            
                        </div>
                    </div><!-- /.col-xl-6 -->
                    <div class="col-xl-6">
                        <div class="worldwide-one__right">
                            <div class="worldwide-one__location worldwide-one__location--one">
                                <button type="button" class="worldwide-one__location__btn">
                                    <span class="worldwide-one__location__btn__box"></span>
                                </button><!-- /.worldwide-one__location__btn -->
                                
                            </div><!-- /.worldwide-one__location -->
                            <div class="worldwide-one__location worldwide-one__location--two">
                                <button type="button" class="worldwide-one__location__btn">
                                    <span class="worldwide-one__location__btn__box"></span>
                                </button><!-- /.worldwide-one__location__btn -->
                                
                            </div><!-- /.worldwide-one__location -->
                            <div class="worldwide-one__location worldwide-one__location--three">
                                <button type="button" class="worldwide-one__location__btn">
                                    <span class="worldwide-one__location__btn__box"></span>
                                </button><!-- /.worldwide-one__location__btn -->
                                
                            </div><!-- /.worldwide-one__location -->
                            <div class="worldwide-one__location worldwide-one__location--four">
                                <button type="button" class="worldwide-one__location__btn">
                                    <span class="worldwide-one__location__btn__box"></span>
                                </button><!-- /.worldwide-one__location__btn -->
                               
                            </div><!-- /.worldwide-one__location -->
                            <div class="worldwide-one__location worldwide-one__location--five">
                                <button type="button" class="worldwide-one__location__btn">
                                    <span class="worldwide-one__location__btn__box"></span>
                                </button><!-- /.worldwide-one__location__btn -->
                                
                            </div><!-- /.worldwide-one__location -->
                            <div class="worldwide-one__location worldwide-one__location--six">
                                <button type="button" class="worldwide-one__location__btn">
                                    <span class="worldwide-one__location__btn__box"></span>
                                </button><!-- /.worldwide-one__location__btn -->
                                
                            </div><!-- /.worldwide-one__location -->
                            <div class="worldwide-one__location worldwide-one__location--seven">
                                <button type="button" class="worldwide-one__location__btn">
                                    <span class="worldwide-one__location__btn__box"></span>
                                </button><!-- /.worldwide-one__location__btn -->
                                
                            </div><!-- /.worldwide-one__location -->
                            <div class="worldwide-one__location worldwide-one__location--eight">
                                <button type="button" class="worldwide-one__location__btn">
                                    <span class="worldwide-one__location__btn__box"></span>
                                </button><!-- /.worldwide-one__location__btn -->
                                
                            </div><!-- /.worldwide-one__location -->
                            <div class="worldwide-one__location worldwide-one__location--nine">
                                <button type="button" class="worldwide-one__location__btn">
                                    <span class="worldwide-one__location__btn__box"></span>
                                </button><!-- /.worldwide-one__location__btn -->
                                
                            </div><!-- /.worldwide-one__location -->
                        </div><!-- /.worldwide-one__right -->
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            
        </section><!-- /.worldwide-one section-space -->
</div>
@endsection