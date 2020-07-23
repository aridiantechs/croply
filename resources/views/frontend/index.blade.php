@extends('frontend.layouts.app')

@section('styles')
@endsection

@section('content')

<main>
    <!-- slider Area Start-->
    <div class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider">
                <div class="slider-cap-wrapper">

                    <div class="hero__caption p-5">
                        <p data-animation="fadeInLeft" data-delay=".4s" class="intro-small"><span>we are</span></p>
                        <h1 data-animation="fadeInLeft" data-delay=".4s" class="head-primary ml-5">World-class <span>mobile</span>  <br>and<span> web app</span> <br>development agency </h1>
                        <p data-animation="fadeInLeft" data-delay=".6s" class="text-primary ml-5">Reach your business goals with awesome apps in a cost-effective and timely manner, using lean philosophy principles.</p>
                        <!-- Hero Btn -->
                        <a href="#" class="btn ml-5"  data-animation="fadeInLeft" data-delay=".9s" >Explore Services</a>
                    </div>

                    <div class="hero__img">
                        <img src="{{ asset('frontend/img/hero/home-banner-1.png') }}" alt=""  data-animation="fadeInRight" data-transition-duration="5s">
                    </div>
                    
                </div>
            </div>
            <!-- Single Slider -->
            
        </div>
        <!-- Shape -->
        <!-- <div class="hero-shape ">
            <img src="{{ asset('frontend/img/gallery/heor_shape.png') }}" alt="">
        </div> -->
    </div>
    <!-- slider Area End-->

    <section class="about-low-area">
        <div class="container">
            <div class="row scroll-sec">
                <div class="col-sm-2">
                    <div class="scroll-intro-sec pt-5">
                        <p data-animation="fadeInLeft" data-delay=".4s" class="intro-small"><span>our partners</span></p>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="scroll-icons">
                        <img src="{{ asset('frontend/img/partners/espn.svg') }}" />
                        <img src="{{ asset('frontend/img/partners/alpine.svg') }}" />
                        <img src="{{ asset('frontend/img/partners/level-up.svg') }}" />
                        <img src="{{ asset('frontend/img/partners/panasonic.svg') }}" />
                        <img src="{{ asset('frontend/img/partners/espn.svg') }}" />
                        <img src="{{ asset('frontend/img/partners/alpine.svg') }}" />
                        <img src="{{ asset('frontend/img/partners/level-up.svg') }}" />
                        <img src="{{ asset('frontend/img/partners/panasonic.svg') }}" />
                        
                    </div>
                </div>
            </div>
        </div>
        
    </section>


    <section>
        <div class="popular-items section-padding40">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70">
                            <p data-animation="fadeInLeft" data-delay=".4s" class="intro-small"><span>our experties</span></p>
                            <h2>We’re<span class="tittle-light"> serving our clients</span> </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50">
                            <div class="gif-icon">
                                <img src="{{ asset('frontend/img/gif/diamond/animat-diamond-color.gif') }}" alt="" class="img img-fluid">
                            </div>
                            <div class="service-text p-3">
                                <h4>Web development</h4>
                                <p>iOS, Android, cross-platform solutions, you name it, the mobile development team at 4Vision.</p>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50">
                            <div class="gif-icon">
                                <img src="{{ asset('frontend/img/gif/responsive/animat-responsive-color.gif') }}" alt="" class="img img-fluid">
                            </div>
                            <div class="service-text p-3">
                                <h4>Mobile development</h4>
                                <p>iOS, Android, cross-platform solutions, you name it, the mobile development team at 4Vision.</p>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50">
                            <div class="gif-icon">
                                <img src="{{ asset('frontend/img/gif/pencil/animat-pencil-color.gif') }}" alt="" class="img img-fluid">
                            </div>
                            <div class="service-text p-3">
                                <h4>UI/UX Design</h4>
                                <p>iOS, Android, cross-platform solutions, you name it, the mobile development team at 4Vision.</p>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50">
                            <div class="gif-icon">
                                <img src="{{ asset('frontend/img/gif/lightbulb/animat-lightbulb-color.gif') }}" alt="" class="img img-fluid">
                            </div>
                            <div class="service-text p-3">
                                <h4>Digital Marketing</h4>
                                <p>iOS, Android, cross-platform solutions, you name it, the mobile development team at 4Vision.</p>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50">
                            <div class="gif-icon">
                                <img src="{{ asset('frontend/img/gif/checkmark/animat-checkmark-color.gif') }}" alt="" class="img img-fluid">
                            </div>
                            <div class="service-text p-3">
                                <h4>QA & QC</h4>
                                <p>iOS, Android, cross-platform solutions, you name it, the mobile development team at 4Vision.</p>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50">
                            <div class="gif-icon">
                                <img src="{{ asset('frontend/img/gif/search/animat-search-color.gif') }}" alt="" class="img img-fluid">
                            </div>
                            <div class="service-text p-3">
                                <h4>E-Commerce Solutions</h4>
                                <p>iOS, Android, cross-platform solutions, you name it, the mobile development team at 4Vision.</p>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50">
                            <div class="gif-icon">
                                <img src="{{ asset('frontend/img/gif/line-chart/animat-linechart-color.gif') }}" alt="" class="img img-fluid">
                            </div>
                            <div class="service-text p-3">
                                <h4>Blockchain</h4>
                                <p>iOS, Android, cross-platform solutions, you name it, the mobile development team at 4Vision.</p>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50">
                            <div class="gif-icon">
                                <img src="{{ asset('frontend/img/gif/rocket/animat-rocket-color.gif') }}" alt="" class="img img-fluid">
                            </div>
                            <div class="service-text p-3">
                                <h4>BigData</h4>
                                <p>iOS, Android, cross-platform solutions, you name it, the mobile development team at 4Vision.</p>
                            </div>
                            
                        </div>
                    </div>
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </section>


    <section class="about-low-area">
        <div class="container">
            <div class="row scroll-sec">
                <div class="col-sm-2">
                    <div class="scroll-intro-sec pt-5">
                        <p data-animation="fadeInLeft" data-delay=".4s" class="intro-small"><span>our clients</span></p>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="scroll-icons">
                        <img src="{{ asset('frontend/img/partners/award-clutch.svg') }}" />
                        <img src="{{ asset('frontend/img/partners/award-itfirms.svg') }}" />
                        <img src="{{ asset('frontend/img/partners/award-goodfirms.svg') }}" />
                        <img src="{{ asset('frontend/img/partners/espn.svg') }}" />
                        <img src="{{ asset('frontend/img/partners/alpine.svg') }}" />
                        <img src="{{ asset('frontend/img/partners/level-up.svg') }}" />
                        <img src="{{ asset('frontend/img/partners/panasonic.svg') }}" />
                        
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <section>
        <div class="scroll-portfolio">
            <div class="porfolio-back p-5" style="background: #2ba892">
                
                <div class="row portfolio-desc">
                    <div class="col-sm-8">
                        <p data-animation="fadeInLeft" data-delay=".4s" class="intro-small mt-3"><span>our work</span></p>
                        <h1>Implacoin</h1>
                        <p>iOS, Android, cross-platform solutions, you name it, the mobile development team at 4Vision has built hundreds of apps over the last decade. We can help you build or update and make your web application.</p>
                        <p>iOS, Android, cross-platform solutions, you name it, the mobile development team at 4Vision has built hundreds of apps over the last decade. We can help you build or update and make your web application.</p>

                        <div class="tag">
                            <img src="{{ asset('frontend/img/icons/tag.svg') }}">
                            <p>E-Commerce, On-Demand Delivery, Hospitality and Food Services</p>
                        </div>
                    </div>
                    <div class="col-sm-4 port-img">
                        <img src="{{ asset('frontend/img/portfolio/laptop.png') }}">
                    </div>
                </div>
            </div>
            <div class="porfolio-back p-5" style="background: #ffc20f">
                
                <div class="row portfolio-desc">
                    <div class="col-sm-8">
                        <p data-animation="fadeInLeft" data-delay=".4s" class="intro-small mt-3"><span>our work</span></p>
                        <h1>Implacoin</h1>
                        <p>iOS, Android, cross-platform solutions, you name it, the mobile development team at 4Vision has built hundreds of apps over the last decade. We can help you build or update and make your web application.</p>
                        <p>iOS, Android, cross-platform solutions, you name it, the mobile development team at 4Vision has built hundreds of apps over the last decade. We can help you build or update and make your web application.</p>
                        <div class="tag">
                            <img src="{{ asset('frontend/img/icons/tag.svg') }}">
                            <p>E-Commerce, On-Demand Delivery, Hospitality and Food Services</p>
                        </div>
                    </div>
                    <div class="col-sm-4 port-img">
                        <img src="{{ asset('frontend/img/portfolio/laptop.png') }}">
                    </div>
                </div>
            </div>


        </div>
    </section>



    <!--? About 1 Start-->
    <section class="about-low-area expectation-area">
        <div class="container mt-5">
            <div class="row justify-content-between mt-5">
                <div class="col-xl-6 col-lg-6 col-md-10">
                    <div class=" mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <p data-animation="fadeInLeft" data-delay=".4s" class="intro-small mt-3"><span>we deliver</span></p>
                            <h2><span class="tittle-light">Exceed Expectations</span> </h2>
                        </div>
                        <p>Productboard is the product management system that helps you understand what users need. You don't believe in the commonplace, and neither do we. We strive for absolute greatness - and our watches are the living illustration of that ideology. Are you ready to make your mark?</p>
                    </div>
                    <a href="about.html" class="btn about-btn">More About Us</a>
                    
                </div>
                <div class="col-xl-5 col-lg-6 col-md-9">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="about-right-cap">
                                <div class="about-right-img">
                                    <img class="expect-img" src="{{ asset('frontend/img/gallery/ongoing.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About  End-->

    <section id="timeline">

        <div class="tl-item">

            <div class="tl-bg" style="background-image: url('{{ asset('frontend/img/gallery/4vision-part-1.svg') }}')"></div>

            <div class="tl-year">
                <h2 class="f2 heading--sanSerif head-primary">Business<br><span>Analysis</span></h2>
            </div>

            <div class="tl-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                <div class="header-btns d-none d-lg-block mt-4 f-left">
                    <a href="contact.html" class="border-btn">Read more</a>
                </div>
            </div>

        </div>

        <div class="tl-item">

            <div class="tl-bg" style="background-image: url('{{ asset('frontend/img/gallery/4vision-part-2.svg') }}')"></div>

            <div class="tl-year">
                <h2 class="f2 heading--sanSerif head-primary">Mobile & Web<br><span>Design</span></h2>
            </div>

            <div class="tl-content">
                <p>Suspendisse potenti. Sed sollicitudin eros lorem, eget accumsan risus dictum id. Maecenas dignissim ipsum vel mi rutrum egestas. Donec mauris nibh, facilisis ut hendrerit vel, fringilla sed felis. Morbi sed nisl et arcu.</p>
                <div class="header-btns d-none d-lg-block mt-4 f-left">
                    <a href="contact.html" class="border-btn">Read more</a>
                </div>
            </div>

        </div>

        <div class="tl-item">

            <div class="tl-bg" style="background-image: url('{{ asset('frontend/img/gallery/4vision-part-3.svg') }}')"></div>

            <div class="tl-year">
                <h2 class="f2 heading--sanSerif head-primary">MVP<br><span>Development</span></h2>
            </div>

            <div class="tl-content">
                <p>Mauris cursus magna at libero lobortis tempor. Suspendisse potenti. Aliquam interdum vulputate neque sit amet varius. Maecenas ac pulvinar nisi. Fusce vitae nunc ultrices, tristique dolor at, porttitor dolor. Etiam id cursus arcu, in dapibus nibh. Pellentesque non porta leo. Nulla eros odio, egestas quis efficitur vel, pretium sed.</p>
                <div class="header-btns d-none d-lg-block mt-4 f-left">
                    <a href="contact.html" class="border-btn">Read more</a>
                </div>
            </div>

        </div>

        <div class="tl-item">

            <div class="tl-bg" style="background-image: url('{{ asset('frontend/img/gallery/4vision-part-4.svg') }}')"></div>

            <div class="tl-year">
                <h2 class="f2 heading--sanSerif head-primary">Ongoing<br><span>Development</span></h2>
            </div>

            <div class="tl-content">
                <p>Suspendisse ac mi at dolor sodales faucibus. Nunc sagittis ornare purus non euismod. Donec vestibulum efficitur tortor, eget efficitur enim facilisis consequat. Vivamus laoreet laoreet elit. Ut ut varius metus, bibendum imperdiet ex. Curabitur diam quam, blandit at risus nec, pulvinar porttitor lorem. Pellentesque dolor elit.</p>
                <div class="header-btns d-none d-lg-block mt-4 f-left">
                    <a href="contact.html" class="border-btn">Read more</a>
                </div>
            </div>

        </div>
    </section>



    <!-- <div class="testimonial-area testimonial-padding section-bg2" data-background="{{ asset('frontend/img/gallery/section_bg01.png') }}">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="h1-testimonial-active dot-style">
                        <div class="single-testimonial text-center">
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <img src="{{ asset('frontend/img/gallery/testi-logo.png') }}" alt="">
                                    <p>“Ascend worked around the clock, connecting me with opportunities that ultimately led me to find an internship which I could not be more excited for.”</p>
                                </div>
                                <div class="testimonial-founder  ">
                                    <div class="founder-img">
                                        <span><strong>- Anderila Miller, </strong>  Creative Director</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial text-center">
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <img src="{{ asset('frontend/img/gallery/testi-logo.png') }}" alt="">
                                    <p>“Ascend worked around the clock, connecting me with opportunities that ultimately led me to find an internship which I could not be more excited for.”</p>
                                </div>
                                <div class="testimonial-founder  ">
                                    <div class="founder-img">
                                        <span><strong>- Anderila Miller, </strong>  Creative Director</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial text-center">
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <img src="{{ asset('frontend/img/gallery/testi-logo.png') }}" alt="">
                                    <p>“Ascend worked around the clock, connecting me with opportunities that ultimately led me to find an internship which I could not be more excited for.”</p>
                                </div>
                                <div class="testimonial-founder  ">
                                    <div class="founder-img">
                                        <span><strong>- Anderila Miller, </strong>  Creative Director</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    

    <div class="contact-animal-owner section-bg2 footer-top" >
        <div class="footer-top-main">
            <div class="f-col-6">
                <div class="contact_text ">
                    <h1>Get in touch</h1>
                    <div class="ft-link">
                        <p>Lets talk</p>
                        <img src="{{ asset('frontend/img/icons/right-w.png') }}">
                    </div>
                </div>
            </div>
            <div class="f-col-6">
                <div class="contact_text ">
                    <h1>Find out more</h1>
                    <div class="ft-link">
                        <p>portfolio</p>
                        <img src="{{ asset('frontend/img/icons/right.png') }}">
                    </div>
                </div>
            </div>
        </div>
            
    </div>
</main>

@endsection