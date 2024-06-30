@extends('layouts.app')

@section('styles')
<!-- styles -->
@endsection

@section('content')

<!-- ==== HeroSectionS3 start ==== -->
<section class="hero-section">
    <div class="bg-img">
        <img src="assets/images/slider/slide-2.jpg" alt="" />
    </div>
    <div class="container">
        <div class="hero-wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hreo-content">
                        <div class="animted-top wow fadeIndown" data-wow-delay="100ms">
                            <span>Longtek Electronics Ltd</span>
                            <br />
                            <h3><span>Access Controls<span></h3>
                            <h2>for your home and office</h2>
                        </div>
                        <div class="hero-botom wow fadeInUp" data-wow-delay="100ms">
                            <div class="video-item">
                                <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="video-btn popup-youtube" data-type="iframe"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape">
        <img src="assets/images/slider/shape-2.png" alt="" />
    </div>
</section>

<!-- ==== QuateinfoSection start ==== -->
<section class="quate-info-section">
    <h2 class="d-none">hiden</h2>
    <div class="container">
        <div class="wraper" data-aos="fade-up" data-aos-duration="500">
            <span>Give Information</span>
            <form>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="info">
                            <input type="text" class="form-control" placeholder="Your Name*" />
                            <div class="icon">
                                <img src="assets/images/quate-info/1.svg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="info">
                            <input type="email" class="form-control" placeholder="Your Email" />
                            <div class="icon">
                                <img src="assets/images/quate-info/2.svg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="info">
                            <input type="text" class="form-control" placeholder="Phone" />
                            <div class="icon">
                                <img src="assets/images/quate-info/3.svg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="info info-btn">
                            <input type="submit" class="btn_primary" value="Get a quoate" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- ==== AboutSectionS3 start ==== -->
<section class="about-section-s3 section_space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                <div class="about-left-wrap">
                    <div class="image">
                        <img src="assets/images/about/5.jpg" alt="" />
                        <div class="shape">
                            <img src="assets/images/about/shape.svg" alt="" />
                        </div>
                        <div class="shape-2">
                            <svg width="474" height="559" viewBox="0 0 474 559" fill="none">
                                <path d="M474 17C474 7.61116 466.389 0 457 0H17C7.61115 0 0 7.61116 0 17V465.09C0 473.352 5.94104 480.418 14.081 481.837L454.081 558.528C464.48 560.341 474 552.337 474 541.781V17Z" fill="#00205C" />
                            </svg>
                        </div>
                    </div>
                    <div class="item">
                        <p>Services</p>
                        <h3><span class="count">1990</span>/Year</h3>
                        <div class="hsape">
                            <svg width="36" height="27" viewBox="0 0 36 27" fill="none">
                                <path d="M0 0H36L16.2 15L0 27V0Z" fill="#0057FF" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-right-wrap">
                    <div class="top_title">
                        <span>
                            <img src="assets/images/title-shap.png" alt="" />
                            Longtek Electronics Ltd
                        </span>
                        <h2>Secure Your Business with Longtek Electronics</h2>
                        <p>
                            Longtek Electronics (Europe) Ltd specializes in providing robust access control systems designed to enhance the security of
                            your business or institution. Located in Enfield Town, England, we offer state-of-the-art solutions to ensure that only
                            authorized individuals can access restricted areas.
                        </p>
                    </div>
                    <div class="noun-electricit">
                        <div class="icon">
                            <img src="assets/images/about/icon-3.svg" alt="" />
                        </div>
                        <h3>Don't compromise on your safety and security.</h3>
                    </div>
                    <div class="about-scervice">
                        <div class="about-card">
                            <div class="icon">
                                <img src="assets/images/about/icon-1.svg" alt="" />
                            </div>
                            <div class="text">
                                <h2>Maintenance and Repair</h2>
                            </div>
                        </div>
                        <div class="about-card">
                            <div class="icon">
                                <img src="assets/images/about/icon-2.svg" alt="" />
                            </div>
                            <div class="text">
                                <h2>24/7 Protection</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== CounterSectionS2 start ==== -->
<section class="counter-section-s2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="item">
                    <h3><span class="count">392</span></h3>
                    <p>Services</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="item">
                    <h3><span class="count">98.7</span>%</h3>
                    <p>Client Satisfiction</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="item">
                    <h3><span class="count">20</span>+</h3>
                    <p>Years Experince</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== MorecatagroeisSection start ==== -->
<section class="more-catagroeis-section" style="padding: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="item">
                    <div class="icon">
                        <div class="image">
                            <img src="assets/images/catagroeis/1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="text">
                        <h2>Commercial Service</h2>
                        <p>Longtek Electronics provides advanced access control systems to secure commercial buildings, ensuring only authorized
                            personnel can enter restricted areas.</p>
                    </div>
                    <div class="shape">
                        <img src="assets/images/catagroeis/shape-2.png" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="item">
                    <div class="icon">
                        <div class="image">
                            <img src="assets/images/catagroeis/2.jpg" alt="" />
                        </div>
                    </div>
                    <div class="text">
                        <h2>Residential Service</h2>
                        <p>We offer exceptionally reliable access control solutions for homes, significantly enhancing security and providing
                            unparalleled peace of mind.</p>
                    </div>
                    <div class="shape">
                        <img src="assets/images/catagroeis/shape-2.png" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="item">
                    <div class="icon">
                        <div class="image">
                            <img src="assets/images/catagroeis/3.jpg" alt="" />
                        </div>
                    </div>
                    <div class="text">
                        <h2>Enterprice Service</h2>
                        <p>Our access control systems for industrial sites ensure that sensitive areas are protected and accessible only to authorized workers.</p>
                    </div>
                    <div class="shape">
                        <img src="assets/images/catagroeis/shape-2.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== ServiceSectionS2 start ==== -->
<section class="service-section-s2 section_space">
    <div class="shape-1">
        <img src="assets/images/servces/shape-1.png" alt="" />
    </div>
    <div class="shape-2">
        <img src="assets/images/servces/shape-2.png" alt="" />
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="top_title">
                    <span>
                        <img src="assets/images/title-shap-s2.png" alt="" />
                        Longtek Electronics LTD
                    </span>
                    <h2>Explore Our Advanced Access Control Systems</h2>
                </div>
            </div>
        </div>
        <div class="wraper">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/biometric-access-control-systems.png" alt="" />
                        </div>
                        <h6><a href="#">Biometric Access Control Systems</a></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/card-based-access-control-systems.png" alt="" />
                        </div>
                        <h6><a href="#">Card Access Control Systems</a></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/keypad-access-control-systems.png" alt="" />
                        </div>
                        <h6><a href="#">Keypad Access Control Systems</a></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/electronic-and-smart-locks-access-control-systems.png" alt="" />
                        </div>
                        <h6><a href="#">Smart Locks Access Control Systems</a></h6>
                    </div>
                </div>
            </div>
            <div class="bottom-text">
                <span>Integrate Our Access Control Systems for Superior Security</span>
            </div>
        </div>
    </div>
</section>

<!-- ==== BrandSectionS2 start ==== -->
<section class="brand-section-s2 section_space" style="padding-top: 10px;">
    <div class="container">
        <div class="top-text">
            <h4>our partners & supporters</h4>
        </div>
        <div class="brand-wrap brand-slider-s2 owl-carousel" style="display: flex; justify-content: center; width: 100%;">
            <div class="brand-item" style="display: flex; justify-content: center; align-items: center; margin: 0 10px;">
                <div class="images" style="display: flex; justify-content: center;">
                    <img src="assets/images/brand/paxton-access-control.png" alt="" style="display: block; margin: auto;" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== CallmessageSection start ==== -->
<section class="call-message-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="left-content">
                    <div class="top_title">
                        <span>
                            <img src="assets/images/title-shap-s2.png" alt="" />
                            LONGTEK ELECTRONICS LTD
                        </span>
                        <h2>Do You Need Help With Maintenance</h2>
                        <p>
                            With over 20 years of experience in the industry, Longtek Electronics is a trusted name in the field of access control.
                            Our team of experts is well-versed in the latest technologies and industry standards.
                        </p>
                    </div>
                    <div class="item">
                        <div class="images">
                            <img src="assets/images/call-message/1.jpg" alt="" />
                        </div>
                        <ul>
                            <li>Enhanced Security</li>
                            <li>Efficient Management</li>
                            <li>High-Level Security</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="right-content">
                    <div class="image wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <img src="assets/images/call-message/2.png" alt="" />
                        <div class="round"></div>
                        <div class="sing">
                            <img src="assets/images/call-message/singe.png" alt="" />
                        </div>
                    </div>

                    <div class="call-message">
                        <div class="call">
                            <div class="icon">
                                <img src="assets/images/call-message/call.svg" alt="" />
                            </div>
                            <div class="text">
                                <h3>Have any question ?</h3>
                                <span>+880 123 456 789</span>
                            </div>
                        </div>
                        <div class="sms">
                            <div class="icon">
                                <img src="assets/images/call-message/text.svg" alt="" />
                            </div>
                            <div class="text">
                                <h3>Mail any question ?</h3>
                                <span>helpsupport@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== ProcessSection start ==== -->
<section class="process-section section_space">
    <div class="shape">
        <img src="assets/images/process-shape.png" alt="" />
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="video-left">
                    <div class="top_title">
                        <span><img src="assets/images/title-shap.png" alt="" />LONGTEK ELECTRONICS LTD</span>
                        <h2>See Our Working Process How We Manage</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="process-wrap">
            <div class="row">
                <div class="shape-two">
                    <svg width="1123" height="170" viewBox="0 0 1123 170" fill="none">
                        <rect x="0.75" y="0.75" width="1121.5" height="168.5" stroke="#D7CDCD" stroke-width="1.5" stroke-dasharray="2 2" />
                    </svg>
                </div>
                <div class="col col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="process-single">
                        <div class="number">1</div>
                        <div class="content">
                            <div class="icon">
                                <img src="assets/images/process/1.svg" alt="" />
                                <div class="shape-icon">
                                    <svg width="14" height="9" viewBox="0 0 14 9" fill="none">
                                        <path d="M7 9L13.0622 0.75H0.937822L7 9Z" fill="#0057FF" />
                                    </svg>
                                </div>
                                <div class="bg">
                                    <svg width="95" height="99" viewBox="0 0 95 99" fill="none">
                                        <path d="M0 46.4486C0 20.7957 20.7957 0 46.4486 0H52.4422C75.9462 0 95 19.0538 95 42.5578V51.158C95 76.4131 48.4064 64.6833 45.5 89.7706C42.6526 114.349 0 79.9487 0 55.2064V46.4486Z" fill="#00CC83" />
                                    </svg>
                                </div>
                            </div>
                            <div class="text">
                                <h2>Select Services</h2>
                                <!-- <span>Lorem ipsum dolor sit amet sed consectetur elit</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="process-single">
                        <div class="number">2</div>
                        <div class="content">
                            <div class="icon">
                                <img src="assets/images/process/2.svg" alt="" />
                                <div class="shape-icon">
                                    <svg width="14" height="9" viewBox="0 0 14 9" fill="none">
                                        <path d="M7 9L13.0622 0.75H0.937822L7 9Z" fill="#0057FF" />
                                    </svg>
                                </div>
                                <div class="bg">
                                    <svg width="95" height="99" viewBox="0 0 95 99" fill="none">
                                        <path d="M0 46.4486C0 20.7957 20.7957 0 46.4486 0H52.4422C75.9462 0 95 19.0538 95 42.5578V51.158C95 76.4131 48.4064 64.6833 45.5 89.7706C42.6526 114.349 0 79.9487 0 55.2064V46.4486Z" fill="#00CC83" />
                                    </svg>
                                </div>
                            </div>
                            <div class="text">
                                <h2>Schedule Meeting</h2>
                                <!-- <span>Lorem ipsum dolor sit amet sed consectetur elit</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="process-single">
                        <div class="number">3</div>
                        <div class="content">
                            <div class="icon">
                                <img src="assets/images/process/3.svg" alt="" />
                                <div class="shape-icon">
                                    <svg width="14" height="9" viewBox="0 0 14 9" fill="none">
                                        <path d="M7 9L13.0622 0.75H0.937822L7 9Z" fill="#0057FF" />
                                    </svg>
                                </div>
                                <div class="bg">
                                    <svg width="95" height="99" viewBox="0 0 95 99" fill="none">
                                        <path d="M0 46.4486C0 20.7957 20.7957 0 46.4486 0H52.4422C75.9462 0 95 19.0538 95 42.5578V51.158C95 76.4131 48.4064 64.6833 45.5 89.7706C42.6526 114.349 0 79.9487 0 55.2064V46.4486Z" fill="#00CC83" />
                                    </svg>
                                </div>
                            </div>
                            <div class="text">
                                <h2>Contact With Team</h2>
                                <!-- <span>Lorem ipsum dolor sit amet sed consectetur elit</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="process-single">
                        <div class="number">4</div>
                        <div class="content">
                            <div class="icon">
                                <img src="assets/images/process/4.svg" alt="" />
                                <div class="shape-icon">
                                    <svg width="14" height="9" viewBox="0 0 14 9" fill="none">
                                        <path d="M7 9L13.0622 0.75H0.937822L7 9Z" fill="#0057FF" />
                                    </svg>
                                </div>
                                <div class="bg">
                                    <svg width="95" height="99" viewBox="0 0 95 99" fill="none">
                                        <path d="M0 46.4486C0 20.7957 20.7957 0 46.4486 0H52.4422C75.9462 0 95 19.0538 95 42.5578V51.158C95 76.4131 48.4064 64.6833 45.5 89.7706C42.6526 114.349 0 79.9487 0 55.2064V46.4486Z" fill="#00CC83" />
                                    </svg>
                                </div>
                            </div>
                            <div class="text">
                                <h2>Get Services</h2>
                                <!-- <span>Lorem ipsum dolor sit amet sed consectetur elit</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('modal')
<!-- modal -->
@endsection

@section('scripts')
<!-- scripts -->
@endsection