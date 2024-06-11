@extends('layout', [$page = 'Team'])

@section('content')
<div class="page-wrapper">
<section class="page-header @@extraClassName">
            <div class="page-header__bg" style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.jpg');"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title">Team</h2>
                <ul class="cleenhearts-breadcrumb list-unstyled">
                    <li><i class="icon-home"></i> <a href="index.html">Home</a></li>
                    <li><span>Our Team</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="volunteer-page section-space">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="volunteer-card @@extraClassName">

                        </div><!-- /.volunteer-card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="volunteer-card @@extraClassName">
                            <div class="volunteer-card__image">
                                <img src="assets/images/volunteer/volunteer-1-1.jpg" alt="Dr. (Mrs) Aisha Achimugu">
                                {{-- <div class="volunteer-card__social">
                                    <span class="icon-share"></span>
                                    <div class="volunteer-card__social__list">
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
                                    </div><!-- /.volunteer-card__social__list -->
                                </div><!-- /.volunteer-card__social --> --}}
                            </div><!-- /.volunteer-card__image -->
                            <div class="volunteer-card__content" style="background-image: url('assets/images/backgrounds/volunteer-bg-1-1.png');">
                                <h3 class="volunteer-card__name">
                                    <a href="volunteer-details.html">Dr. (Mrs) Aisha Achimugu</a>
                                </h3><!-- /.volunteer-card__name -->
                                <h6 class="volunteer-card__designation">Group Chief Executive Officer</h6><!-- /.volunteer-card__designation -->
                            </div><!-- /.volunteer-card__content -->
                        </div><!-- /.volunteer-card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="volunteer-card @@extraClassName">

                        </div><!-- /.volunteer-card -->
                    </div><!-- /.col-md-6 col-lg-4 -->



                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.volunteer-page section-space -->

        <section class="volunteer-page" style="margin-bottom: 30px;">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="volunteer-card @@extraClassName">
                            <div class="volunteer-card__image">
                                <img src="assets/images/volunteer/volunteer-1-2.jpg" alt="Uzoma Mbaike">
                                {{-- <div class="volunteer-card__social">
                                    <span class="icon-share"></span>
                                    <div class="volunteer-card__social__list">
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
                                    </div><!-- /.volunteer-card__social__list -->
                                </div><!-- /.volunteer-card__social --> --}}
                            </div><!-- /.volunteer-card__image -->
                            <div class="volunteer-card__content" style="background-image: url('assets/images/backgrounds/volunteer-bg-1-1.png');">
                                <h3 class="volunteer-card__name">
                                    <a href="volunteer-details.html">Uzoma Mbaike</a>
                                </h3><!-- /.volunteer-card__name -->
                                <h6 class="volunteer-card__designation">Group Executive Director</h6><!-- /.volunteer-card__designation -->
                            </div><!-- /.volunteer-card__content -->
                        </div><!-- /.volunteer-card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="volunteer-card @@extraClassName">
                            <div class="volunteer-card__image">
                                <img src="assets/images/volunteer/volunteer-1-3.jpg" alt="Ken Elofuke">
                                {{-- <div class="volunteer-card__social">
                                    <span class="icon-share"></span>
                                    <div class="volunteer-card__social__list">
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
                                    </div><!-- /.volunteer-card__social__list -->
                                </div><!-- /.volunteer-card__social --> --}}
                            </div><!-- /.volunteer-card__image -->
                            <div class="volunteer-card__content" style="background-image: url('assets/images/backgrounds/volunteer-bg-1-1.png');">
                                <h3 class="volunteer-card__name">
                                    <a href="volunteer-details.html">Ken Elofuke</a>
                                </h3><!-- /.volunteer-card__name -->
                                <h6 class="volunteer-card__designation">Group Project Director</h6><!-- /.volunteer-card__designation -->
                            </div><!-- /.volunteer-card__content -->
                        </div><!-- /.volunteer-card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="volunteer-card @@extraClassName">
                            <div class="volunteer-card__image">
                                <img src="assets/images/volunteer/volunteer-1-4.jpg" alt="Iliya Wakil">
                                {{-- <div class="volunteer-card__social">
                                    <span class="icon-share"></span>
                                    <div class="volunteer-card__social__list">
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
                                    </div><!-- /.volunteer-card__social__list -->
                                </div><!-- /.volunteer-card__social --> --}}
                            </div><!-- /.volunteer-card__image -->
                            <div class="volunteer-card__content" style="background-image: url('assets/images/backgrounds/volunteer-bg-1-1.png');">
                                <h3 class="volunteer-card__name">
                                    <a href="volunteer-details.html">Iliya Wakil</a>
                                </h3><!-- /.volunteer-card__name -->
                                <h6 class="volunteer-card__designation">Group General Manager</h6><!-- /.volunteer-card__designation -->
                            </div><!-- /.volunteer-card__content -->
                        </div><!-- /.volunteer-card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="volunteer-card @@extraClassName">
                            <div class="volunteer-card__image">
                                <img src="assets/images/volunteer/volunteer-1-5.jpg" alt="Barr. Nnenna Ike">
                                {{-- <div class="volunteer-card__social">
                                    <span class="icon-share"></span>
                                    <div class="volunteer-card__social__list">
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
                                    </div><!-- /.volunteer-card__social__list -->
                                </div><!-- /.volunteer-card__social --> --}}
                            </div><!-- /.volunteer-card__image -->
                            <div class="volunteer-card__content" style="background-image: url('assets/images/backgrounds/volunteer-bg-1-1.png');">
                                <h3 class="volunteer-card__name">
                                    <a href="volunteer-details.html">Nnenna Ike</a>
                                </h3><!-- /.volunteer-card__name -->
                                <h6 class="volunteer-card__designation">Company Secretary / Legal Adviser</h6><!-- /.volunteer-card__designation -->
                            </div><!-- /.volunteer-card__content -->
                        </div><!-- /.volunteer-card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="volunteer-card @@extraClassName">
                            <div class="volunteer-card__image">
                                <img src="assets/images/volunteer/volunteer-1-6.jpg" alt="Andrew Egbeshi">
                                {{-- <div class="volunteer-card__social">
                                    <span class="icon-share"></span>
                                    <div class="volunteer-card__social__list">
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
                                    </div><!-- /.volunteer-card__social__list -->
                                </div><!-- /.volunteer-card__social --> --}}
                            </div><!-- /.volunteer-card__image -->
                            <div class="volunteer-card__content" style="background-image: url('assets/images/backgrounds/volunteer-bg-1-1.png');">
                                <h3 class="volunteer-card__name">
                                    <a href="volunteer-details.html">Andrew Egbeshi</a>
                                </h3><!-- /.volunteer-card__name -->
                                <h6 class="volunteer-card__designation">Project Manager</h6><!-- /.volunteer-card__designation -->
                            </div><!-- /.volunteer-card__content -->
                        </div><!-- /.volunteer-card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="volunteer-card @@extraClassName">
                            <div class="volunteer-card__image">
                                <img src="assets/images/volunteer/volunteer-1-7.jpg" alt="Panna Madziga">
                                {{-- <div class="volunteer-card__social">
                                    <span class="icon-share"></span>
                                    <div class="volunteer-card__social__list">
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
                                    </div><!-- /.volunteer-card__social__list -->
                                </div><!-- /.volunteer-card__social --> --}}
                            </div><!-- /.volunteer-card__image -->
                            <div class="volunteer-card__content" style="background-image: url('assets/images/backgrounds/volunteer-bg-1-1.png');">
                                <h3 class="volunteer-card__name">
                                    <a href="volunteer-details.html">Panna Madziga</a>
                                </h3><!-- /.volunteer-card__name -->
                                <h6 class="volunteer-card__designation">Group Human Resource Manager</h6><!-- /.volunteer-card__designation -->
                            </div><!-- /.volunteer-card__content -->
                        </div><!-- /.volunteer-card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="volunteer-card @@extraClassName">
                            <div class="volunteer-card__image">
                                <img src="assets/images/volunteer/volunteer-1-8.jpg" alt="Aina Segun Aina">
                                {{-- <div class="volunteer-card__social">
                                    <span class="icon-share"></span>
                                    <div class="volunteer-card__social__list">
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
                                    </div><!-- /.volunteer-card__social__list -->
                                </div><!-- /.volunteer-card__social --> --}}
                            </div><!-- /.volunteer-card__image -->
                            <div class="volunteer-card__content" style="background-image: url('assets/images/backgrounds/volunteer-bg-1-1.png');">
                                <h3 class="volunteer-card__name">
                                    <a href="volunteer-details.html">Aina Segun Aina</a>
                                </h3><!-- /.volunteer-card__name -->
                                <h6 class="volunteer-card__designation">General Manager Corporate Services and Training</h6><!-- /.volunteer-card__designation -->
                            </div><!-- /.volunteer-card__content -->
                        </div><!-- /.volunteer-card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="volunteer-card @@extraClassName">
                            <div class="volunteer-card__image">
                                <img src="assets/images/volunteer/volunteer-1-9.jpg" alt="Kiema Ogunlana">
                                {{-- <div class="volunteer-card__social">
                                    <span class="icon-share"></span>
                                    <div class="volunteer-card__social__list">
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
                                    </div><!-- /.volunteer-card__social__list -->
                                </div><!-- /.volunteer-card__social --> --}}
                            </div><!-- /.volunteer-card__image -->
                            <div class="volunteer-card__content" style="background-image: url('assets/images/backgrounds/volunteer-bg-1-1.png');">
                                <h3 class="volunteer-card__name">
                                    <a href="volunteer-details.html">Kiema Ogunlana</a>
                                </h3><!-- /.volunteer-card__name -->
                                <h6 class="volunteer-card__designation">General Manager New Business Development
                                    (PD-SEF)</h6><!-- /.volunteer-card__designation -->
                            </div><!-- /.volunteer-card__content -->
                        </div><!-- /.volunteer-card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="volunteer-card @@extraClassName">
                            <div class="volunteer-card__image">
                                <img src="assets/images/volunteer/volunteer-1-10.jpg" alt="Kaase Lan">
                                {{-- <div class="volunteer-card__social">
                                    <span class="icon-share"></span>
                                    <div class="volunteer-card__social__list">
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
                                    </div><!-- /.volunteer-card__social__list -->
                                </div><!-- /.volunteer-card__social --> --}}
                            </div><!-- /.volunteer-card__image -->
                            <div class="volunteer-card__content" style="background-image: url('assets/images/backgrounds/volunteer-bg-1-1.png');">
                                <h3 class="volunteer-card__name">
                                    <a href="volunteer-details.html">Kaase Lan</a>
                                </h3><!-- /.volunteer-card__name -->
                                <h6 class="volunteer-card__designation">General Manager
                                    KDIS</h6><!-- /.volunteer-card__designation -->
                            </div><!-- /.volunteer-card__content -->
                        </div><!-- /.volunteer-card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.volunteer-page section-space -->
</div>
@endsection
