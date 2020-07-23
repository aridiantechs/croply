<template>
    
    <main>
        <!-- slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider">
                    <div class="slider-cap-wrapper">

                        <div class="hero__caption p-5">
                            <p data-animation="fadeInLeft" data-delay=".4s" class="intro-small"><span>we are</span></p>
                            <h1 data-animation="fadeInLeft" data-delay=".4s" class="head-primary ml-5 mb-5">We have <span>technology</span> expertise and experience in <span>app </span> development</h1>
                            
                            <!-- Hero Btn -->
                            
                        </div>

                        <div class="hero__img">
                            <img :src="asset('frontend/img/hero/portfolio.png')" alt=""  data-animation="fadeInRight" data-transition-duration="5s">
                        </div>
                        
                    </div>
                </div>
                <!-- Single Slider -->
                
            </div>
            <!-- Shape -->
            <!-- <div class="hero-shape ">
                <img :src="asset('frontend/img/gallery/heor_shape.png')" alt="">
            </div> -->
        </div>
        <!-- slider Area End-->

        


        <div class="contact-animal-owner section-bg2 footer-top" >
            <div class="footer-top-main">
                <div class="f-col-6">
                    <div class="contact_text ">
                        <h1>Get in touch</h1>
                        <div class="ft-link">
                            <p>Lets talk</p>
                            <img :src="asset('frontend/img/icons/right-w.png')">
                        </div>
                    </div>
                </div>
                <div class="f-col-6">
                    <div class="contact_text ">
                        <h1>Find out more</h1>
                        <div class="ft-link">
                            <p>portfolio</p>
                            <img :src="asset('frontend/img/icons/right.png')">
                        </div>
                    </div>
                </div>
            </div>
                
        </div>
    </main>
</template>

<script>
    export default {

        data(){
            return {
                slickOptions: {
                    dots: false,
                    infinite: true,
                    speed: 2000,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 100,
                    arrows: false,
                    responsive: [{
                      breakpoint: 600,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                      }
                    },
                    {
                       breakpoint: 400,
                       settings: {
                          arrows: false,
                          slidesToShow: 1,
                          slidesToScroll: 1
                       }
                    }]
                },
                slickOptionsPortfolio: {
                    centerMode: true,
                    centerPadding: '60px',
                    slidesToShow: 1,
                    // variableWidth: true,
                    responsive: [
                        {
                          breakpoint: 768,
                          settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                          }
                        },
                        {
                          breakpoint: 480,
                          settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                          }
                        }
                    ]
                }
            };
        },
        mounted() {
            
                }
            }
</script>
