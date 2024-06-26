@extends('layouts.app')

@section('styles')
<!-- styles -->
@endsection

@section('content')

<!-- ==== HeroSection start ==== -->
<section class="hero-section">
    <div class="bg-img">
        <img src="assets/images/slider/slide-1.jpg" alt="" />
    </div>
    <div class="container">
        <div class="hero-wrap">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="hreo-content">
                        <div class="animted-top wow fadeIndown" data-wow-delay="100ms">
                            <span>Longtek Electronics Ltd</span>
                            <br />
                            <h2>Air conditioning</h2>
                            <h3><span>system</span> for your home and office</h3>
                        </div>
                        <div class="hero-botom wow fadeInUp" data-wow-delay="100ms">
                            <div class="hero-btn" style="margin-right: 20px;">
                                <a href="/cctv" class="btn_primary">CCTVs <span></span></a>
                            </div>
                            <div class="hero-btn">
                                <a href="/alarm" class="btn_primary">Alarms<span></span></a>
                            </div>
                            <div class="video-item">
                                <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="video-btn popup-youtube" data-type="iframe"></a>
                            </div>
                        </div>
                        <div class="hero-botom wow fadeInUp" data-wow-delay="100ms">
                            <div class="hero-btn" style="margin-right: 20px;">
                                <a href="/intercomsystem" class="btn_primary">Intercom Systems<span></span></a>
                            </div>
                            <div class="hero-btn">
                                <a href="/accesscontroller" class="btn_primary">Access Controllers<span></span></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape">
        <img src="assets/images/slider/shape-1.png" alt="" />
    </div>
</section>

<!-- ==== ServcesSection start ==== -->
<section class="servces-section section_space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="top_title">
                    <span><img src="assets/images/title-shap.png" alt="" />Trusted
                        electricity Care</span>
                    <h2>Do You Need Help With Electrical Maint</h2>
                </div>
            </div>
        </div>
        <div class="servces-wrap wow fadeInUp" data-wow-delay="300ms">
            <div class="servces-slider owl-carousel">
                <div class="servces-card">
                    <div class="shape">
                        <svg width="95" height="120" viewBox="0 0 95 104" fill="none">
                            <path d="M0 0H95V104L45.5 90.6422L0 104V0Z" fill="#00CC83" />
                        </svg>
                    </div>
                    <div class="icon">
                        <img src="assets/images/servces/1.svg" alt="" />
                    </div>
                    <div class="text">
                        <h2><a href="services-single.html">CCTV</a></h2>
                        <span>Lorem ipsum dolor sit amet sed consectetur elit </span>
                    </div>
                </div>
                <div class="servces-card">
                    <div class="shape">
                        <svg width="95" height="120" viewBox="0 0 95 104" fill="none">
                            <path d="M0 0H95V104L45.5 90.6422L0 104V0Z" fill="#00CC83" />
                        </svg>
                    </div>
                    <div class="icon">
                        <img src="assets/images/servces/2.svg" alt="" />
                    </div>
                    <div class="text">
                        <h2><a href="services-single.html">Burglar Alarm & Fire Alarm</a></h2>
                        <span>Lorem ipsum dolor sit amet sed consectetur elit </span>
                    </div>
                </div>
                <div class="servces-card">
                    <div class="shape">
                        <svg width="95" height="120" viewBox="0 0 95 104" fill="none">
                            <path d="M0 0H95V104L45.5 90.6422L0 104V0Z" fill="#00CC83" />
                        </svg>
                    </div>
                    <div class="icon">
                        <img src="assets/images/servces/3.svg" alt="" />
                    </div>
                    <div class="text">
                        <h2><a href="services-single.html">Intercom System</a></h2>
                        <span>Lorem ipsum dolor sit amet sed consectetur elit </span>
                    </div>
                </div>
                <div class="servces-card">
                    <div class="shape">
                        <svg width="95" height="120" viewBox="0 0 95 104" fill="none">
                            <path d="M0 0H95V104L45.5 90.6422L0 104V0Z" fill="#00CC83" />
                        </svg>
                    </div>
                    <div class="icon">
                        <img src="assets/images/servces/4.svg" alt="" />
                    </div>
                    <div class="text">
                        <h2><a href="services-single.html">Access Controllers</a></h2>
                        <span>Lorem ipsum dolor sit amet sed consectetur elit </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== FeaturesSection start ==== -->
<section class="features-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="features-card">
                    <div class="text">
                        <span><img src="assets/images/features/shape-1.svg" alt="" />Features</span>
                        <h2>Safety Installation & Best Service</h2>
                    </div>
                    <div class="icon">
                        <img src="assets/images/features/1.svg" alt="" />
                    </div>
                    <div class="shape">
                        <img src="assets/images/features/shape-2.png" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="features-card">
                    <div class="text">
                        <span><img src="assets/images/features/shape-1.svg" alt="" />Features</span>
                        <h2>Expert Mechanics & Best Efforts</h2>
                    </div>
                    <div class="icon">
                        <img src="assets/images/features/2.svg" alt="" />
                    </div>
                    <div class="shape">
                        <img src="assets/images/features/shape-2.png" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="features-card">
                    <div class="text">
                        <span><img src="assets/images/features/shape-1.svg" alt="" />Features</span>
                        <h2>Budget Friendly & 24/7 Support</h2>
                    </div>
                    <div class="icon">
                        <img src="assets/images/features/3.svg" alt="" />
                    </div>
                    <div class="shape">
                        <img src="assets/images/features/shape-2.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== AboutSection start ==== -->
<section class="about-section section_space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="2500ms">
                <div class="about-left-wrap">
                    <div class="image-on">
                        <img src="assets/images/about/1.jpg" alt="" />
                        <div class="quate-on">
                            <div class="info">
                                <h3>
                                    <span class="count">25,000</span>+
                                    Customer Worldwide
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="image-two">
                        <img src="assets/images/about/2.jpg" alt="" />
                        <div class="quate-two">
                            <div class="info">
                                <h3><span class="count">25</span></h3>
                                <p>year of experience</p>
                            </div>
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
                        <h2>Outstanding Residential & Commercial Services</h2>
                        <p>
                            Transmds is the world’s driving worldwide coordinations
                            supplier — we uphold industry and exchange the worldwide
                            trade of merchandi
                        </p>
                    </div>
                    <div class="about-scervice">
                        <div class="about-card">
                            <div class="icon">
                                <img src="assets/images/about/icon-1.svg" alt="" />
                            </div>
                            <div class="text">
                                <h2>Award Wining Company</h2>
                            </div>
                        </div>
                        <div class="about-card">
                            <div class="icon">
                                <img src="assets/images/about/icon-2.svg" alt="" />
                            </div>
                            <div class="text">
                                <h2>Friendly Support Team</h2>
                            </div>
                        </div>
                    </div>
                    <div class="left-contnet">
                        <ul>
                            <li>service electrical layout, design</li>
                            <li>Emergency power solutions (generate)</li>
                            <li>Becoming a registered provider</li>
                        </ul>
                        <div class="images">
                            <div class="video-right">
                                <div class="video-item">
                                    <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="video-btn popup-youtube" data-type="iframe"><i class="ti-control-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-btn">
                        <a href="about.html" class="btn_primary">More about us <span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== BrandSection start ==== -->
<section class="brand-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-12">
                <div class="title">
                    <h2>our partners & supporters</h2>
                </div>
            </div>
            <div class="col-lg-9 col-12">
                <div class="brand-wrap brand-slider owl-carousel">
                    <div class="brand-item">
                        <div class="images">
                            <img src="assets/images/brand/1.png" alt="" />
                        </div>
                    </div>
                    <div class="brand-item">
                        <div class="images">
                            <img src="assets/images/brand/2.png" alt="" />
                        </div>
                    </div>
                    <div class="brand-item">
                        <div class="images">
                            <img src="assets/images/brand/3.png" alt="" />
                        </div>
                    </div>
                    <div class="brand-item">
                        <div class="images">
                            <img src="assets/images/brand/4.png" alt="" />
                        </div>
                    </div>
                    <div class="brand-item">
                        <div class="images">
                            <img src="assets/images/brand/5.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== TrustedSection start ==== -->
<section class="trusted-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12 wow fadeInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms">
                <div class="trusted-left-wrap">
                    <div class="imgage">
                        <img src="assets/images/trusted-img.jpg" alt="" />
                        <div class="quate-on">
                            <div class="info">
                                <h3>
                                    <span class="count">25,000</span>+
                                    Customer Worldwide
                                </h3>
                            </div>
                        </div>
                        <div class="quate-two">
                            <div class="info">
                                <h3>
                                    <span class="count">250</span>+
                                    Services
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <div class="trusted-right-wrap">
                    <div class="top_title">
                        <span><img src="assets/images/title-shap.png" alt="" />Trusted
                            electricity Care</span>
                        <h2>Electricity Make us Life More Beautiful Live</h2>
                    </div>
                    <div class="inner-Content">
                        <ul>
                            <li>
                                <a href="services-single.html">Indoor/outdoor Light</a>
                            </li>
                            <li><a href="services-single.html">Electricties</a></li>
                            <li>
                                <a href="services-single.html">Lighting Fixtures</a>
                            </li>
                            <li><a href="services-single.html">Switch Board</a></li>
                            <li>
                                <a href="services-single.html">Retrofits and Upgrades</a>
                            </li>
                            <li><a href="services-single.html">24h Response</a></li>
                        </ul>
                        <ul>
                            <li>
                                <a href="services-single.html">Electronics Industry</a>
                            </li>
                            <li>
                                <a href="services-single.html">Ceiling Fan Installation ser</a>
                            </li>
                            <li><a href="services-single.html">Semicon & Solar</a></li>
                            <li><a href="services-single.html">Surge Protection</a></li>
                            <li>
                                <a href="services-single.html">Double Power Outside</a>
                            </li>
                            <li><a href="services-single.html">Panel Change</a></li>
                        </ul>
                        <div class="shape">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none">
                                <path d="M0 0L31 0L31 31L0 0Z" fill="#00CC83" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape">
        <img src="assets/images/trusted-shape.jpg" alt="" />
    </div>
</section>

<!-- ==== CounterSection start ==== -->
<section class="counter-section section_space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="counter-left-wrap">
                    <div class="top_title">
                        <span><img src="assets/images/title-shap.png" alt="" />Trusted
                            electricity Care</span>
                        <h2>Electricty Life Easiest</h2>
                        <p>
                            Transmax is the world’s driving worldwide coordinations
                            supplieruindustry and exchange the worldwide trade of
                        </p>
                    </div>
                    <div class="left-contnet">
                        <div class="images">
                            <img src="assets/images/counter/img-1.jpg" alt="" />
                        </div>
                        <ul>
                            <li>service electrical layout, design as</li>
                            <li>Compliance and Enforcement</li>
                            <li>Becoming a registered provider</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="counter-right-wrap">
                    <ul>
                        <li>
                            <h5>Satsified Clients</h5>
                            <h3><span class="count">250</span> +</h3>
                        </li>
                        <li>
                            <h5>Total Services</h5>
                            <h3>
                                <span class="count">1538</span>
                            </h3>
                        </li>
                        <li>
                            <h5>Years of build</h5>
                            <h3><span class="count">28</span> +</h3>
                        </li>
                        <li>
                            <h5>Total Revinew</h5>
                            <h3>
                                <span class="count">386</span>
                            </h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="shape">
        <img src="assets/images/counter/shape.png" alt="" />
    </div>
</section>

<!-- ==== ProjectSection start ==== -->
<section class="project-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="top_title">
                    <span><img src="assets/images/title-shap.png" alt="" />electricity
                        Care project</span>
                    <h2>Our Work Portfolio That You Get ideas</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="project-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="project-single">
                        <div class="image">
                            <img src="assets/images/project/1.jpg" alt="" />
                            <div class="img-link">
                                <a href="projects-single.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="text">
                            <h2><a href="projects-single.html">House Electricty</a></h2>
                            <span>Electricity</span>
                            <div class="shape">
                                <svg width="51" height="51" viewBox="0 0 51 51" fill="none">
                                    <path d="M0.5 0H51V51L25.4333 25.5L0.5 0Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="project-single">
                        <div class="image">
                            <img src="assets/images/project/2.jpg" alt="" />
                            <div class="img-link">
                                <a href="projects-single.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="text">
                            <h2>
                                <a href="projects-single.html">Solar Panel Install</a>
                            </h2>
                            <span>Electricity</span>
                            <div class="shape">
                                <svg width="51" height="51" viewBox="0 0 51 51" fill="none">
                                    <path d="M0.5 0H51V51L25.4333 25.5L0.5 0Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="project-single">
                        <div class="image">
                            <img src="assets/images/project/3.jpg" alt="" />
                            <div class="img-link">
                                <a href="projects-single.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="text">
                            <h2><a href="projects-single.html">Cable weiring</a></h2>
                            <span>Electricity</span>
                            <div class="shape">
                                <svg width="51" height="51" viewBox="0 0 51 51" fill="none">
                                    <path d="M0.5 0H51V51L25.4333 25.5L0.5 0Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="project-single">
                        <div class="image">
                            <img src="assets/images/project/4.jpg" alt="" />
                            <div class="img-link">
                                <a href="projects-single.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="text">
                            <h2>
                                <a href="projects-single.html">Lamp Bulb Install</a>
                            </h2>
                            <span>Art , Direction</span>
                            <div class="shape">
                                <svg width="51" height="51" viewBox="0 0 51 51" fill="none">
                                    <path d="M0.5 0H51V51L25.4333 25.5L0.5 0Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== GetquateSection start ==== -->
<section class="get-quate-section">
    <div class="container">
        <div class="wraper">
            <div class="content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="left-text">
                            <h2>Find Local Electrical mechanic</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="right-content">
                            <a class="call" href="tel:+4733378901">
                                <div class="icon">
                                    <img src="assets/images/call.svg" alt="" />
                                </div>
                                <div class="text">
                                    <h3>Phone Number</h3>
                                    <span>(671) 555-0110</span>
                                </div>
                            </a>
                            <a href="contact.html" class="btn_primary">Get a quoate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== VideoSection start ==== -->
<section class="video-section section_space">
    <div class="container">
        <div class="video-wrap">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="video-left">
                        <div class="top_title">
                            <span><img src="assets/images/title-shap.png" alt="" />electricity Care
                                project</span>
                            <h2>
                                Do You Need Help With <span>Electrical</span> us
                                Maintenance
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="video-right-wrap">
                        <div class="video-right">
                            <div class="video-item">
                                <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="video-btn popup-youtube" data-type="iframe"><svg width="15" height="18" viewBox="0 0 15 18" fill="none">
                                        <path d="M14.332 9L0.582029 17.6603L0.582029 0.339746L14.332 9Z" fill="#0057FF" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="strip-wrap">
        <ul class="gallery tickerWrapper">
            <li class="listitem">
                9 AM – 6 PM Saturday: 9 AM – 4 PM Sunday: Closed
                <div class="shape">
                    <svg width="29" height="31" viewBox="0 0 29 31" fill="none">
                        <path d="M28.365 21.08L15.19 15.345L28.21 9.61L26.195 5.9675L14.6475 14.57L16.1975 0H12.1675L13.7175 14.57L2.17 5.9675L0.155 9.61L13.175 15.345L0 21.08L2.17 24.5675L13.7175 15.965L12.1675 30.69H16.1975L14.6475 15.965L26.195 24.5675L28.365 21.08Z" fill="white" />
                    </svg>
                </div>
            </li>
            <li class="listitem">
                Germany —785 15h Street, Office 478Berlin, De 81566
                <div class="shape">
                    <svg width="29" height="31" viewBox="0 0 29 31" fill="none">
                        <path d="M28.365 21.08L15.19 15.345L28.21 9.61L26.195 5.9675L14.6475 14.57L16.1975 0H12.1675L13.7175 14.57L2.17 5.9675L0.155 9.61L13.175 15.345L0 21.08L2.17 24.5675L13.7175 15.965L12.1675 30.69H16.1975L14.6475 15.965L26.195 24.5675L28.365 21.08Z" fill="white" />
                    </svg>
                </div>
            </li>
            <li class="listitem">
                9 AM – 6 PM Saturday: 9 AM – 4 PM Sunday: Closed
                <div class="shape">
                    <svg width="29" height="31" viewBox="0 0 29 31" fill="none">
                        <path d="M28.365 21.08L15.19 15.345L28.21 9.61L26.195 5.9675L14.6475 14.57L16.1975 0H12.1675L13.7175 14.57L2.17 5.9675L0.155 9.61L13.175 15.345L0 21.08L2.17 24.5675L13.7175 15.965L12.1675 30.69H16.1975L14.6475 15.965L26.195 24.5675L28.365 21.08Z" fill="white" />
                    </svg>
                </div>
            </li>
            <li class="listitem">
                Get In Touch — phone: +1(800)123-4566
                <div class="shape">
                    <svg width="29" height="31" viewBox="0 0 29 31" fill="none">
                        <path d="M28.365 21.08L15.19 15.345L28.21 9.61L26.195 5.9675L14.6475 14.57L16.1975 0H12.1675L13.7175 14.57L2.17 5.9675L0.155 9.61L13.175 15.345L0 21.08L2.17 24.5675L13.7175 15.965L12.1675 30.69H16.1975L14.6475 15.965L26.195 24.5675L28.365 21.08Z" fill="white" />
                    </svg>
                </div>
            </li>
        </ul>
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
                        <span><img src="assets/images/title-shap.png" alt="" />electricity Working</span>
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
                                <span>Lorem ipsum dolor sit amet sed consectetur elit</span>
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
                                <span>Lorem ipsum dolor sit amet sed consectetur elit</span>
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
                                <span>Lorem ipsum dolor sit amet sed consectetur elit</span>
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
                                <span>Lorem ipsum dolor sit amet sed consectetur elit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== TestiminialSection start ==== -->
<section class="testiminial-section section_space">
    <div class="shape">
        <img src="assets/images/testiminial/shape.png" alt="" />
    </div>
    <div class="shape-2">
        <svg width="88" height="39" viewBox="0 0 88 39" fill="none">
            <path d="M82.4727 20.7287C84.1846 16.6601 81.5444 12.3696 85.7753 8.6391C86.1472 9.73254 86.4577 10.4223 86.4838 11.0446C86.9491 18.613 87.4349 26.3159 87.7683 33.9178C87.8204 35.1624 87.5584 37.0458 86.7721 37.7347C85.2552 39.0286 84.03 37.7327 83.0335 36.5884C79.8152 33.0038 76.4649 29.4528 73.1704 25.8177C75.8548 24.0874 75.8548 24.0874 82.1722 29.1206C79.4233 13.7471 64.7753 6.21877 50.768 13.272C51.389 14.6515 52.0658 15.947 52.6868 17.3265C54.3975 21.3641 54.8235 25.5184 53.3255 30.0917C52.2475 33.3704 50.2901 35.8244 46.9141 36.6124C43.462 37.3498 41.2105 35.616 39.4963 32.907C35.7424 27.1526 36.5524 20.3083 41.6904 14.8799C42.3448 14.2245 42.8466 13.468 43.6478 12.4259C36.9493 7.1402 29.3902 4.30926 20.7792 5.3793C7.44624 6.95042 2.7363 18.3495 2.90436 28.0199C2.88028 29.2139 3.19641 30.3914 3.35086 32.3087C1.1552 30.4908 0.827837 28.3379 0.576703 26.2355C-0.463131 18.0444 4.26926 8.59623 11.5564 4.22893C16.2149 1.50785 21.0985 0.266905 26.1719 0.724702C33.6118 1.41968 40.3529 3.82957 45.949 8.62676C46.503 9.11488 47.1128 9.51895 47.8193 10.1081C54.4429 7.23709 61.2096 5.308 68.1738 7.38169C74.8739 9.52247 78.3638 15.344 82.4727 20.7287ZM46.7285 15.5563C40.4415 19.7393 38.6815 26.1961 42.3479 30.9246C43.2124 32.1025 44.9247 32.9951 46.3617 32.9793C48.3472 32.964 49.4216 31.0139 49.8713 29.0129C51.2113 23.8508 49.8761 19.5781 46.7285 15.5563Z" fill="#FFB302" />
        </svg>
    </div>
    <div class="left-image">
        <img src="assets/images/testiminial/img-2.jpg" alt="" />
    </div>
    <div class="right-image">
        <img src="assets/images/testiminial/img-4.jpg" alt="" />
    </div>
    <div class="feed">
        <img src="assets/images/testiminial/feedback.svg" alt="" />
        <span>Feedback</span>
    </div>
    <div class="container">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-12">
                        <div class="testiminial-left-content">
                            <div class="image-slider">
                                <div class="item">
                                    <div class="single-img">
                                        <img src="assets/images/testiminial/3.jpg" alt="" />
                                    </div>
                                    <ul class="retin">
                                        <li>
                                            <img src="assets/images/testiminial/star.png" alt="" />
                                        </li>
                                        <li>
                                            <img src="assets/images/testiminial/star.png" alt="" />
                                        </li>
                                        <li>
                                            <img src="assets/images/testiminial/star.png" alt="" />
                                        </li>
                                        <li>
                                            <img src="assets/images/testiminial/star.png" alt="" />
                                        </li>
                                        <li>
                                            <img src="assets/images/testiminial/star.png" alt="" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="quate-icon">
                                <img src="assets/images/testiminial/quate.svg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="testiminial-slider">
                            <div class="item">
                                <h3>
                                    The other hand we denounce with righteou indg ation and
                                    dislike men who are so beguiled and demorali ed by the
                                    of pleasure Events moment.Dislike men who are so
                                    beguiled and demoraliz worlds by the charms of pleasure
                                    “
                                </h3>
                                <h2>Mathias Herasen</h2>
                                <span>Ceo & Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-12">
                        <div class="testiminial-left-content">
                            <div class="image-slider">
                                <div class="item">
                                    <div class="single-img">
                                        <img src="assets/images/testiminial/4.jpg" alt="" />
                                    </div>
                                    <ul class="retin">
                                        <li>
                                            <img src="assets/images/testiminial/star.png" alt="" />
                                        </li>
                                        <li>
                                            <img src="assets/images/testiminial/star.png" alt="" />
                                        </li>
                                        <li>
                                            <img src="assets/images/testiminial/star.png" alt="" />
                                        </li>
                                        <li>
                                            <img src="assets/images/testiminial/star.png" alt="" />
                                        </li>
                                        <li>
                                            <img src="assets/images/testiminial/star.png" alt="" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="quate-icon">
                                <img src="assets/images/testiminial/quate.svg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="testiminial-slider">
                            <div class="item">
                                <h3>
                                    The other hand we denounce with righteou indg ation and
                                    dislike men who are so beguiled and demorali ed by the
                                    of pleasure Events moment.Dislike men who are so
                                    beguiled and demoraliz worlds by the charms of pleasure
                                    “
                                </h3>
                                <h2>Jonathan Watkins</h2>
                                <span>Ceo & Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-12">
                        <div class="testiminial-left-content">
                            <div class="image-slider">
                                <div class="item">
                                    <div class="single-img">
                                        <img src="assets/images/testiminial/2.jpg" alt="" />
                                    </div>
                                    <ul class="retin">
                                        <li>
                                            <img src="assets/images/testiminial/star.png" alt="" />
                                        </li>
                                        <li>
                                            <img src="assets/images/testiminial/star.png" alt="" />
                                        </li>
                                        <li>
                                            <img src="assets/images/testiminial/star.png" alt="" />
                                        </li>
                                        <li>
                                            <img src="assets/images/testiminial/star.png" alt="" />
                                        </li>
                                        <li>
                                            <img src="assets/images/testiminial/star.png" alt="" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="quate-icon">
                                <img src="assets/images/testiminial/quate.svg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="testiminial-slider">
                            <div class="item">
                                <h3>
                                    The other hand we denounce with righteou indg ation and
                                    dislike men who are so beguiled and demorali ed by the
                                    of pleasure Events moment.Dislike men who are so
                                    beguiled and demoraliz worlds by the charms of pleasure
                                    “
                                </h3>
                                <h2>Dorothy Williams</h2>
                                <span>Ceo & Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="active-item">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <div class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                            <div class="content">
                                <div class="image">
                                    <img src="assets/images/testiminial/img-1.jpg" alt="" />
                                </div>
                                <div class="text">Mehedi h.</div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <div class="content">
                                <div class="image">
                                    <img src="assets/images/testiminial/img-2.jpg" alt="" />
                                </div>
                                <div class="text">Ashraf. H</div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                            <div class="content">
                                <div class="image">
                                    <img src="assets/images/testiminial/img-3.jpg" alt="" />
                                </div>
                                <div class="text">Keyamot. M</div>
                            </div>
                        </div>
                    </li>
                </ul>
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