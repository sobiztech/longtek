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
                            <h2>#Security</h2>
                            <h3><span>Longtek</span> Protect Your Business</h3>
                        </div>
                        <div class="hero-botom wow fadeInUp" data-wow-delay="100ms">
                            <div class="hero-btn" style="margin-right: 20px;">
                                <a href="/cctvs" target="_blank" class="btn_primary">CCTVs <span></span></a>
                            </div>
                            <div class="hero-btn">
                                <a href="/alarms" target="_blank" class="btn_primary">Alarms<span></span></a>
                            </div>
                            <div class="video-item">
                                <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="video-btn popup-youtube" data-type="iframe"></a>
                            </div>
                        </div>
                        <div class="hero-botom wow fadeInUp" data-wow-delay="100ms">
                            <div class="hero-btn" style="margin-right: 20px;">
                                <a href="/intercomSystems" target="_blank" class="btn_primary">Intercom Systems<span></span></a>
                            </div>
                            <div class="hero-btn">
                                <a href="/accessControls" target="_blank" class="btn_primary">Access Controls<span></span></a>
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

<!-- ==== ProjectSectionS2 start ==== -->
<section class="project-section-s3 section_space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="top_title">
                    <span><img src="assets/images/title-shap-s2.png" alt="" />Longtek Electronics Ltd</span>
                    <h2>Do You Need Help With Electrical Maint</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="project-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="project-single">
                        <div class="image">
                            <img src="assets/images/services/cctv.jpg" alt="CCTV" />
                            <div class="img-link">
                                <a href="/cctvs"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="text">
                            <h2>
                                <a href="/cctvs">CCTVs</a>
                            </h2>
                            <span>Installation & Maintenace</span>
                            <div class="shape">
                                <svg width="51" height="51" viewBox="0 0 51 51" fill="none">
                                    <path d="M0.5 0H51V51L25.4333 25.5L0.5 0Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="project-single">
                        <div class="image">
                            <img src="assets/images/services/alarm.jpg" alt="Alarm" />
                            <div class="img-link">
                                <a href="/alarms"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="text">
                            <h2>
                                <a href="/alarms">Alarms</a>
                            </h2>
                            <span>Installation & Maintenace</span>
                            <div class="shape">
                                <svg width="51" height="51" viewBox="0 0 51 51" fill="none">
                                    <path d="M0.5 0H51V51L25.4333 25.5L0.5 0Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="project-single">
                        <div class="image">
                            <img src="assets/images/services/access_control.jpg" alt="Access Control" />
                            <div class="img-link">
                                <a href="/accessControls"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="text">
                            <h2><a href="/accessControls">Access Controls</a></h2>
                            <span>Installation & Maintenace</span>
                            <div class="shape">
                                <svg width="51" height="51" viewBox="0 0 51 51" fill="none">
                                    <path d="M0.5 0H51V51L25.4333 25.5L0.5 0Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="project-single">
                        <div class="image">
                            <img src="assets/images/services/intercom.jpg" alt="Intercom Systems" />
                            <div class="img-link">
                                <a href="/intercomSystems"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <div class="text">
                            <h2>
                                <a href="/intercomSystems">Intercom Systems</a>
                            </h2>
                            <span>Installation & Maintenace</span>
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
                        <span><img src="assets/images/title-shap.png" alt="" />Longtek Electronics Ltd</span>
                        <h2>Longtek Make Your Life More Secure Live</h2>
                    </div>
                    <div class="inner-Content">
                        <ul>
                            <li><a>CCTV Systems</a></li>
                            <li><a>Alarm Systems</a></li>
                            <li><a>Access Control Systems</a></li>
                            <li><a>Intercom Systems</a></li>
                        </ul>
                        <ul>
                            <li><a>Expert Technicians</a></li>
                            <li><a>Quality Products</a></li>
                            <li><a>Customer Satisfaction</a></li>
                            <li><a>Competitive Pricing</a></li>
                            <li><a>24/7 Monitoring</a></li>
                            <li><a>Emergency Repairs</a></li>
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
                            <img src="assets/images/brand/alhua-cctv.png" alt="Dahua Technology CCTV" />
                        </div>
                    </div>
                    <div class="brand-item">
                        <div class="images">
                            <img src="assets/images/brand/hikvision-cctv.png" alt="Hikvision CCTV" />
                        </div>
                    </div>
                    <div class="brand-item">
                        <div class="images">
                            <img src="assets/images/brand/honeywell-alarm.png" alt="Honeywell Home Alarm" />
                        </div>
                    </div>
                    <div class="brand-item">
                        <div class="images">
                            <img src="assets/images/brand/pyronix-alarm.png" alt="Pyronix Alarm " />
                        </div>
                    </div>
                    <div class="brand-item">
                        <div class="images">
                            <img src="assets/images/brand/texecom-alarm.png" alt="Texecom Alarm" />
                        </div>
                    </div>
                    <div class="brand-item">
                        <div class="images">
                            <img src="assets/images/brand/paxton-access-control.png" alt="Paxton Access Control" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== CounterSection start ==== -->
<section class="counter-section section_space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="counter-left-wrap">
                    <div class="top_title">
                        <span><img src="assets/images/title-shap.png" alt="" />Longtek Electronics Ltd</span>
                        <h2>Secure Life Easiest</h2>
                        <p>
                            We are committed to staying at the forefront of security technology, continuously innovating and improving our services to
                            provide the best possible solutions to our clients. Our team is dedicated to ongoing learning and development, ensuring that
                            we are always equipped with the latest knowledge and skills in the industry.
                        </p>
                    </div>
                    <div class="left-contnet">
                        <div class="images">
                            <img src="assets/images/counter/img-1.jpg" alt="" />
                        </div>
                        <ul>
                            <li>Installation, maintenance, and upgrades </li>
                            <li>Comprehensive solutions</li>
                            <li>Secure and efficient</li>
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
                            <h3><span class="count">20</span> +</h3>
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

<!-- ==== TestiminialSectionS3 start ==== -->
<section class="testiminial-section-s3 section_space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-12">
                <div class="testiminial-left-content">
                    <div class="top_title">
                        <span><img src="assets/images/title-shap.png" alt="" />LONGTEK ELECTRONICS LTD</span>
                        <h2>What they,re saying about us</h2>
                        <p style="text-align: justify;">
                            We are honored to serve a diverse range of clients, from residential homeowners to large commercial enterprises.
                            Our clients trust us for our reliability, expertise, and commitment to quality. We have worked with a variety of industries,
                            including retail, healthcare, education, and more, providing tailored security solutions that meet their specific needs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="testiminial-right-slider testimonial-slider-s3 owl-carousel">
                    <div class="item">
                        <ul class="retin">
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star-white.png" alt="" />
                            </li>
                        </ul>
                        <div class="text">
                            <h4>Mike S</h4>
                            <!-- <span>Client</span> -->
                        </div>
                        <a style="text-align: justify;">
                            "Longtek Electronics provided exceptional service when we needed a new CCTV system installed for our business.
                            The team was professional, punctual, and the installation was flawless. Their attention to detail and commitment to customer
                            satisfaction is top-notch. Highly recommend them for all security system needs!"
                        </a>
                        <div class="shape">
                            <svg width="376" height="76" viewBox="0 0 376 76">
                                <path d="M0 0L191 44.4045L367 1L376 76H0V0Z" fill="#0057FF" />
                            </svg>
                        </div>
                    </div>
                    <div class="item">
                        <ul class="retin">
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star-white.png" alt="" /></li>
                        </ul>
                        <div class="text">
                            <h4>Jessica K</h4>
                            <!-- <span>Client</span> -->
                        </div>
                        <a style="text-align: justify;">
                            "I had an urgent issue with my intercom system, and Longtek Electronics came through brilliantly.
                            They were quick to respond and had my system up and running in no time. The technicians were friendly and knowledgeable.
                            Great service at a reasonable price. Will definitely use them again!"
                        </a>
                        <div class="shape">
                            <svg width="376" height="76" viewBox="0 0 376 76">
                                <path d="M0 0L191 44.4045L367 1L376 76H0V0Z" fill="#0057FF" />
                            </svg>
                        </div>
                    </div>
                    <div class="item">
                        <ul class="retin">
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star-white.png" alt="" /></li>
                        </ul>
                        <div class="text">
                            <h4>Alan B</h4>
                            <!-- <span>Client</span> -->
                        </div>
                        <a>
                            "Fantastic service from Longtek Electronics! They upgraded our alarm system and provided excellent advice on enhancing our
                            security. The team was very professional and left the site spotless.
                            I’m very impressed with their expertise and customer care. Definitely worth a five-star rating!"
                        </a>
                        <div class="shape">
                            <svg width="376" height="76" viewBox="0 0 376 76">
                                <path d="M0 0L191 44.4045L367 1L376 76H0V0Z" fill="#0057FF" />
                            </svg>
                        </div>
                    </div>
                    <div class="item">
                        <ul class="retin">
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star-white.png" alt="" /></li>
                        </ul>
                        <div class="text">
                            <h4>Karen L</h4>
                            <!-- <span>Client</span> -->
                        </div>
                        <a>
                            "Longtek Electronics installed a state-of-the-art access control system for our office. The whole process was smooth,
                            and the team went above and beyond to ensure everything was set up perfectly. Their customer service is exceptional,
                            and their prices are competitive. Highly recommend them!"
                        </a>
                        <div class="shape">
                            <svg width="376" height="76" viewBox="0 0 376 76">
                                <path d="M0 0L191 44.4045L367 1L376 76H0V0Z" fill="#0057FF" />
                            </svg>
                        </div>
                    </div>
                    <div class="item">
                        <ul class="retin">
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star-white.png" alt="" /></li>
                        </ul>
                        <div class="text">
                            <h4>David W</h4>
                            <!-- <span>Client</span> -->
                        </div>
                        <a>
                            "Had a wonderful experience with Longtek Electronics! They were quick to respond and very professional in upgrading our
                            fire alarm system. The quality of their work and the level of customer service was outstanding.
                            Wouldn’t hesitate to recommend them for any electronic system needs. Five stars all the way!"
                        </a>
                        <div class="shape">
                            <svg width="376" height="76" viewBox="0 0 376 76">
                                <path d="M0 0L191 44.4045L367 1L376 76H0V0Z" fill="#0057FF" />
                            </svg>
                        </div>
                    </div>
                    <div class="item">
                        <ul class="retin">
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star.png" alt="" /></li>
                            <li><img src="assets/images/testiminial/star-white.png" alt="" /></li>
                        </ul>
                        <div class="text">
                            <h4>Sophia M</h4>
                            <!-- <span>Client</span> -->
                        </div>
                        <a>
                            Longtek Electronics exceeded our expectations with their prompt and efficient service. We needed a complex CCTV system
                            for our facility, and their team handled everything seamlessly. They provided valuable recommendations and ensured the
                            installation was done with minimal disruption. Outstanding service and excellent value for money.
                            I can’t recommend them highly enough!
                        </a>
                        <div class="shape">
                            <svg width="376" height="76" viewBox="0 0 376 76">
                                <path d="M0 0L191 44.4045L367 1L376 76H0V0Z" fill="#0057FF" />
                            </svg>
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