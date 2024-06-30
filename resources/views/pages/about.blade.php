@extends('layouts.app')

@section('styles')
<!-- styles -->
@endsection

@section('content')

<!-- ==== BreadcumbSection start ==== -->
<section class="breadcumb-section">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="breadcumb-wrap">
                    <span>Longtek Electronics Ltd</span>
                    <h2>About us</h2>
                    <ul>
                        <li><a href="/home">Home</a></li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== AboutSection start ==== -->
<section class="about-section section_space" style="padding-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="2500ms">
                <div class="about-left-wrap">
                    <div class="image-on">
                        <img src="assets/images/about/1.jpg" alt="" />
                        <div class="quate-on">
                            <div class="info">
                                <h3>
                                    <span class="count">25,000</span>+ Customer in Worldwide
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="image-two">
                        <img src="assets/images/about/2.jpg" alt="" />
                        <div class="quate-two">
                            <div class="info">
                                <h3><span class="count">20</span>+</h3>
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
                            LONGTEK ELECTRONICS LTD
                        </span>
                        <h2>Welcome to Longtek Electronics Ltd</h2>
                        <p style="text-align: justify;">
                            At Longtek Electronics (Europe) Ltd, we have been at the forefront of security technology since 2004, serving Enfield Town
                            and the wider region with dedication and expertise. <br />Our company is a pillar in the security industry, specializing in the
                            installation, maintenance, and repair of state-of-the-art CCTV systems, alarm systems (including burglar alarms and fire
                            alarms), access control systems, and intercom systems. We take pride in our commitment to enhancing the safety and security
                            of businesses and homes alike.
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
                        <ul style="display: flex; flex-wrap: wrap; list-style-type: none; padding: 0;">
                            <li style="margin-right: 5px;">CCTVs</li>
                            <li style="margin-right: 5px;">Alarms</li>
                            <li style="margin-right: 5px;">Access Controls</li>
                            <li style="margin-right: 5px;">Intercom Systems</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== FaqSectionS2 start ==== -->
<section class="faq-section-s2 section_space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="faq--wrap">
                    <div class="accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                Our Mission
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <div class="text">
                                        <p>
                                            Our mission is to provide top-tier security solutions that offer peace of mind and robust protection.
                                            We strive to ensure that our clients feel safe and secure, knowing that their premises are safeguarded by
                                            the latest technology and backed by a team of dedicated professionals.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="faq--wrap">
                    <div class="accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                Our Vision
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <div class="text">
                                        <p>
                                            We envision a future where advanced security systems are an integral part of every business and household.
                                            Our goal is to be a leading provider of comprehensive security solutions across Europe, renowned for our
                                            expertise, customer-centric approach, and cutting-edge technology
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <img src="assets/images/brand/alhua-cctv.png" alt="" />
                        </div>
                    </div>
                    <div class="brand-item">
                        <div class="images">
                            <img src="assets/images/brand/hikvision-cctv.png" alt="" />
                        </div>
                    </div>
                    <div class="brand-item">
                        <div class="images">
                            <img src="assets/images/brand/honeywell-alarm.png" alt="" />
                        </div>
                    </div>
                    <div class="brand-item">
                        <div class="images">
                            <img src="assets/images/brand/paxton-access-control.png" alt="" />
                        </div>
                    </div>
                    <div class="brand-item">
                        <div class="images">
                            <img src="assets/images/brand/pyronix-alarm.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== ServcesSectionS3 start ==== -->
<section class="servces-section-s3 section_space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="top_title">
                    <span><img src="assets/images/title-shap.png" alt="" />LONGTEK ELECTRONICS LTD</span>
                    <h2>Our Expertise</h2>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="top_title">
                    <p style="text-align: justify;">
                        With over 20 years of experience in the wholesale machinery industry, Longtek Electronics has established itself as a
                        trusted name in security solutions.
                    </p>
                </div>
            </div>
        </div>
        <div class="servces-wrap">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp">
                <div class="servces-single-card">
                        <div class="text">
                            <span>01</span>
                            <h3>
                                <a>CCTVs</a>
                            </h3>
                        </div>
                        <div class="icon">
                            <img src="assets/images/servces/5.svg" alt="" class="active" />
                            <img src="assets/images/servces/hover-5.svg" alt="" class="hover" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp">
                    <div class="servces-single-card">
                        <div class="text">
                            <span>02</span>
                            <h3>
                                <a href="/alarms" target="_blank">Alarms</a>
                            </h3>
                        </div>
                        <div class="icon">
                            <img src="assets/images/servces/6.svg" alt="" class="active" />
                            <img src="assets/images/servces/hover-6.svg" alt="" class="hover" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 wow fadeInUp">
                    <div class="servces-single-card">
                        <div class="text">
                            <span>03</span>
                            <h3>
                                <a href="/accessControls" target="_blank">Access Controls</a>
                            </h3>
                        </div>
                        <div class="icon">
                            <img src="assets/images/servces/7.svg" alt="" class="active" />
                            <img src="assets/images/servces/hover-7.svg" alt="" class="hover" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 wow fadeInUp">
                    <div class="servces-single-card">
                        <div class="text">
                            <span>04</span>
                            <h3>
                                <a href="/intercomSystems" target="_blank">Intercom Systems</a>
                            </h3>
                        </div>
                        <div class="icon">
                            <img src="assets/images/servces/8.svg" alt="" class="active" />
                            <img src="assets/images/servces/hover-8.svg" alt="" class="hover" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 wow fadeInUp">
                    <div class="servces-single-card">
                        <div class="text">
                            <span>05</span>
                            <h3>
                                <a href="/maintenances" target="_blank">Maintenances</a>
                            </h3>
                        </div>
                        <div class="icon">
                            <img src="assets/images/servces/9.svg" alt="" class="active" />
                            <img src="assets/images/servces/hover-9.svg" alt="" class="hover" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-4">
        <img src="assets/images/servces/shape-4.png" alt="" />
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
                                <p style="text-align: justify;">
                                    “At Longtek Electronics, our core philosophy is to provide unmatched security solutions that our clients can rely on.
                                    We’ve spent over two decades building a reputation for excellence in the security industry, and we’re proud to
                                    continue serving our community with innovative and effective solutions. Our team’s commitment to quality and
                                    customer satisfaction is what sets us apart.”
                                </p>
                                <h2>Thevalojan Thevarajah</h2>
                                <span>Director, Longtek Electronics Ltd</span>
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
                                <p style="text-align: justify;">
                                    “Ensuring the safety and security of our clients is not just a job for us; it’s a responsibility we take very seriously.
                                    From the initial consultation to ongoing maintenance, we strive to offer a seamless and supportive experience. Our clients’
                                    peace of mind is our top priority, and I am proud to be part of a team that consistently delivers on that promise.”
                                </p>
                                <h2>Tharshini Thevalojan</h2>
                                <span>Secretary, Longtek Electronics Ltd</span>
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
                                <div class="text">Director</div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <div class="content">
                                <div class="image">
                                    <img src="assets/images/testiminial/img-2.jpg" alt="" />
                                </div>
                                <div class="text">Secretary</div>
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