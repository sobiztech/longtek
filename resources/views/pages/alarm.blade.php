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
                            <h3><span>Alarms<span></h3>
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

<!-- ==== AboutSectionS2 start ==== -->
<section class="project-section-s2 section_space">
    <div class="shape">
        <img src="assets/images/project/shape.png" alt="" />
    </div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6 col-12">
                <div class="project-content">
                    <div class="top_title">
                        <span>
                            <img src="assets/images/title-shap-s2.png" alt="" />
                            Longtek Electronics LTD
                        </span>
                        <h2>Comprehensive Alarm System Maintenance and Repair Services</h2>
                        <p>
                            At Longtek Electronics (Europe) Ltd, we specialize in the maintenance and repair of high-quality burglar alarms and fire alarm systems.
                            <br /> With over two decades of experience, we ensure your properties are safeguarded against intrusions and fire hazards, providing you with the peace of mind you deserve.
                        </p>
                    </div>

                    <div class="project-btn">
                        <span> Burglar Alarm</span>
                        <span> Fire Alarm</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project-slider-wrap">
        <div class="project-slider owl-carousel">
            <div class="item">
                <div class="image">
                    <img src="assets/images/project/6.jpg" alt="" />
                </div>
                <div class="text">
                    <span>Alarm-Type 01</span>
                    <h2><a>Burglar Alarm</a></h2>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <img src="assets/images/project/5.jpg" alt="" />
                </div>
                <div class="text">
                    <span>Alarm-Type 02</span>
                    <h2><a>Fire Alarm</a></h2>
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
                        <p>We offer diverse alarm maintenance for commercial properties, ensuring protection from theft and fire hazards.</p>
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
                        <p>Our team offers reliable burglar and fire alarm services for homes, providing homeowners with
                            peace of mind and enhanced safety.</p>
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
                        <p>We specialize in maintaining and repairing robust alarms for industrial facilities,
                            safe guarding against intrusions and fire risks.</p>
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
                    <h2>Discover Our Diverse Alarm System Selection</h2>
                </div>
            </div>
        </div>
        <div class="wraper">
            <div class="row">
                <h3 class="text-center">Burglar Alarms </h3>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/wired-burglar-alarm.png" alt="" />
                        </div>
                        <h6><a href="#">Wired Alarms</a></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/wireless-burglar-alarms.png" alt="" />
                        </div>
                        <h6><a href="#">Wireless Alarms</a></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/audible-sound-only-burglar-alarms.png" alt="" />
                        </div>
                        <h6><a href="#">Audible (Sound Only) Burglar Alarms</a></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/remotely-monitored-burglar-alarms.png" alt="" />
                        </div>
                        <h6><a href="#">Remotely Monitored Burglar Alarms</a></h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <h3 class="text-center">Fire Alarms </h3>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/ionization-smoke-fire-alarms.png" alt="" />
                        </div>
                        <h6><a href="#">Ionization Smoke Alarms</a></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/photoelectric-smoke-fire-alarms.png" alt="" />
                        </div>
                        <h6><a href="#">Photoelectric Smoke Alarms</a></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/heat-detectors-alarms.png" alt="" />
                        </div>
                        <h6><a href="#">Heat Detectors</a></h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
                    <div class="team-single">
                        <div class="image">
                            <img src="assets/images/team/carbon-monoxide-alarms-smoke-fire-alarms.png" alt="" />
                        </div>
                        <h6><a href="#">Carbon Monoxide (CO) Alarms</a></h6>
                    </div>
                </div>
            </div>
            <div class="bottom-text">
                <span>Bringing Alarm Systems Together to Exceed Expectations</span>
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
                    <img src="assets/images/brand/honeywell-alarm.png" alt="" style="display: block; margin: auto;" />
                </div>
            </div>
            <div class="brand-item" style="display: flex; justify-content: center; align-items: center; margin: 0 10px;">
                <div class="images" style="display: flex; justify-content: center;">
                    <img src="assets/images/brand/pyronix-alarm.png" alt="" style="display: block; margin: auto;" />
                </div>
            </div>
            <div class="brand-item" style="display: flex; justify-content: center; align-items: center; margin: 0 10px;">
                <div class="images" style="display: flex; justify-content: center;">
                    <img src="assets/images/brand/texecom-alarm.png" alt="" style="display: block; margin: auto;" />
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
                            Longtek Electronics Ltd
                        </span>
                        <h2>Do You Need Help With Maintenance</h2>
                        <p>
                            We understand the importance of security and safety. Our burglar alarm systems and fire alarm systems are designed to
                            provide round-the-clock protection, minimizing risks to your property and loved ones.
                            <br />
                            Our team of highly skilled technicians offers comprehensive alarm system maintenance and repair services to ensure your
                            alarms are always in top working condition.
                        </p>
                    </div>
                    <div class="item">
                        <div class="images">
                            <img src="assets/images/call-message/1.jpg" alt="" />
                        </div>
                        <ul>
                            <li>Burglar & Fire Alarm System Maintenance</li>
                            <li>System Upgrades and Replacements</li>
                            <li>24/7 Emergency Support</li>
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
                        <span><img src="assets/images/title-shap.png" alt="" />Longtek Electronics Ltd</span>
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