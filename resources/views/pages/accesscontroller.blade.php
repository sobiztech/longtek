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
                            <h2>CCTV</h2>
                            <h3><span>system</span> for your home and office</h3>
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

<!-- ==== AboutSectionS2 start ==== -->
<section class="about-section-s2 section_space" style="padding: 40px;">
    <div class="shape">
        <img src="assets/images/about/shape-1.png" alt="" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="300ms">
                <div class="about-image">
                    <div class="image-1">
                        <img src="assets/images/about/3.jpg" alt="" />
                        <div class="image-shape">
                            <img src="assets/images/about/shape-3.png" alt="" />
                        </div>
                    </div>
                    <div class="image-2">
                        <img src="assets/images/about/4.jpg" alt="" />
                    </div>
                    <div class="item">
                        <p>Services</p>
                        <h3><span class="count">545</span>/Year</h3>
                        <div class="hsape">
                            <svg width="36" height="27" viewBox="0 0 36 27" fill="none">
                                <path d="M0 0H36L16.2 15L0 27V0Z" fill="#0057FF" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-right-content">
                    <div class="top_title">
                        <span>
                            <img src="assets/images/title-shap-s2.png" alt="" />
                            Longtek Electronics LTD
                        </span>
                        <h2>Ensure Optimal Security with Longtek Electronics' CCTV Systems</h2>
                        <div style="text-align: justify;">
                            <a>At Longtek Electronics, we specialize in providing top-notch CCTV systems to secure and monitor both residential and
                                commercial properties.<br /> Our comprehensive services are designed to ensure that your surveillance setup functions optimally,
                                offering peace of mind and robust protection against potential threats.</a>
                        </div>
                        <p>Why Choose Longtek Electronics for Your CCTV Systems?</p>
                        <ul>
                            <li>Expert Installation and Maintenance</li>
                            <li>State-of-the-Art Technology</li>
                            <li>Tailored Solutions</li>
                            <li>24/7 Monitoring</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-2">
        <img src="assets/images/about/shape-2.png" alt="" />
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
                        <p>We provides expert CCTV systems installation and maintenance for commercial properties, ensuring
                            comprehensive security and monitoring.</p>
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
                        <p>We offer customized CCTV solutions for homes, giving homeowners peace of mind with reliable security and round-the-clock
                            surveillance.</p>
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
                        <p> Our specialized CCTV services for industrial sites include robust, high-quality camera systems that monitor and secure large,
                            complex areas effectively.</p>
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
                    <h2>Discover Our Diverse CCTV System Selection</h2>
                </div>
            </div>
        </div>
        <div class="wraper">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/bullet_cctv_security_camara.png" alt="" />
                        </div>
                        <h6><a href="#">Bullet CCTV</a></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/dome_cctv_security_camara.png" alt="" />
                        </div>
                        <h6><a href="#">Dome CCTV</a></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/hidden_covert_cctv_security_camara.png" alt="" />
                        </div>
                        <h6><a href="#">Hidden/Covert CCTV</a></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/infrared_cctv_security_camara.png" alt="" />
                        </div>
                        <h6><a href="#">Infrared CCTV</a></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/box_cctv_security_camara.png" alt="" />
                        </div>
                        <h6><a href="#">Box CCTV</a></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/outdoor_cctv_security_camara.png" alt="" />
                        </div>
                        <h6><a href="#">Outdoor CCTV</a></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/ptz_cctv_security_camara.png" alt="" />
                        </div>
                        <h6><a href="#">PTZ CCTV</a></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/wireless_cctv_security_camara.png" alt="" />
                        </div>
                        <h6><a href="#">Wireless CCTV</a></h6>
                    </div>
                </div>
            </div>
            <div class="bottom-text">
                <span>Combine Our CCTV Solutions to Achieve Unparalleled Security.</span>
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
                    <img src="assets/images/brand/alhua_cctv.png" alt="" style="display: block; margin: auto;" />
                </div>
            </div>
            <div class="brand-item" style="display: flex; justify-content: center; align-items: center; margin: 0 10px;">
                <div class="images" style="display: flex; justify-content: center;">
                    <img src="assets/images/brand/hikvision_cctv.png" alt="" style="display: block; margin: auto;" />
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
                            Our experienced technicians handle everything from initial installation to ongoing maintenance, ensuring your CCTV system is always in perfect working condition.
                        </p>
                    </div>
                    <div class="item">
                        <div class="images">
                            <img src="assets/images/call-message/1.jpg" alt="" />
                        </div>
                        <ul>
                            <li>Professional Installation</li>
                            <li>System Design and Consultation</li>
                            <li>Maintenance and Suppor</li>
                            <li>Upgrades and Expansion</li>
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