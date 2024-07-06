@extends('layouts.app')

@section('styles')
<!-- styles -->
@endsection

@section('content')

<!-- ==== VideoSection start ==== -->
<section class="video-section section_space">
    <div class="container">
        <div class="video-wrap">
            <div class="row align-items-center" style="padding-top: 100px;">
                <div class="col-lg-6 col-12">
                    <div class="video-left">
                        <div class="top_title">
                            <span><img src="assets/images/title-shap.png" alt="" />Longtek Electronics Ltd</span>
                            <h2> Do You Need Help to <span>Maintenances</span></h2><h4> for your CCTVs, Alarms, Access Controls and Intercom System</h4>
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
                9 AM – 5 PM Saturday: 9 AM – 5 PM Sunday: Closed
                <div class="shape">
                    <svg width="29" height="31" viewBox="0 0 29 31" fill="none">
                        <path d="M28.365 21.08L15.19 15.345L28.21 9.61L26.195 5.9675L14.6475 14.57L16.1975 0H12.1675L13.7175 14.57L2.17 5.9675L0.155 9.61L13.175 15.345L0 21.08L2.17 24.5675L13.7175 15.965L12.1675 30.69H16.1975L14.6475 15.965L26.195 24.5675L28.365 21.08Z" fill="white" />
                    </svg>
                </div>
            </li>
            <li class="listitem">
                UK — 12 Bishops Close, Enfield EN1 3QJ, UK
                <div class="shape">
                    <svg width="29" height="31" viewBox="0 0 29 31" fill="none">
                        <path d="M28.365 21.08L15.19 15.345L28.21 9.61L26.195 5.9675L14.6475 14.57L16.1975 0H12.1675L13.7175 14.57L2.17 5.9675L0.155 9.61L13.175 15.345L0 21.08L2.17 24.5675L13.7175 15.965L12.1675 30.69H16.1975L14.6475 15.965L26.195 24.5675L28.365 21.08Z" fill="white" />
                    </svg>
                </div>
            </li>
            <li class="listitem">
                Get In Touch — phone: +44 800 511 8611
                <div class="shape">
                    <svg width="29" height="31" viewBox="0 0 29 31" fill="none">
                        <path d="M28.365 21.08L15.19 15.345L28.21 9.61L26.195 5.9675L14.6475 14.57L16.1975 0H12.1675L13.7175 14.57L2.17 5.9675L0.155 9.61L13.175 15.345L0 21.08L2.17 24.5675L13.7175 15.965L12.1675 30.69H16.1975L14.6475 15.965L26.195 24.5675L28.365 21.08Z" fill="white" />
                    </svg>
                </div>
            </li>
        </ul>
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
                            <h2>Find Local Maintance Service Man</h2>
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
                                    <span>+44 800 511 8611</span>
                                </div>
                            </a>
                            <a href="/quote" class="btn_primary">Get a quoate</a>
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
        <div class="row" style="padding: 20px;">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="item">
                    <h3><span class="count">392</span></h3>
                    <p>Maintanaces</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="item">
                    <h3><span class="count">98.7</span>%</h3>
                    <p>Maintanaces Satisfiction</p>
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

<!-- ==== ServiceSingleSection start ==== -->
<section class="service-single-section section_space" style="padding-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="service-side-bar" style="padding-top: 1px;">
                    <ul class="service-list-widget">
                        <li>
                            <a href="#" id="cctvMaintenanceLink" class="service-link active">
                                <p class="text">CCTVs Maintenance</p>
                                <div class="arrow">
                                    <svg viewBox="0 0 23 12" fill="none">
                                        <path d="M22.4545 4.93435C22.4543 4.93408 22.4541 4.93377 22.4538 4.9335L17.9142 0.261622C17.5742 -0.0883642 17.0241 -0.0870618 16.6856 0.264676C16.3471 0.61637 16.3484 1.18522 16.6885 1.53525L19.7363 4.67187H1.33752C0.8577 4.67187 0.46875 5.0741 0.46875 5.57031C0.46875 6.06652 0.8577 6.46875 1.33752 6.46875H19.7363L16.6885 9.60537C16.3484 9.9554 16.3471 10.5242 16.6856 10.8759C17.0241 11.2277 17.5742 11.2289 17.9143 10.879L22.4538 6.20712C22.4541 6.20685 22.4543 6.20654 22.4546 6.20627C22.7948 5.85507 22.7937 5.28438 22.4545 4.93435Z" fill="#8893A8" />
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" id="alarmMaintenanceLink" class="service-link">
                                <p class="text">Alarms Maintenance</p>
                                <div class="arrow">
                                    <svg viewBox="0 0 23 12" fill="none">
                                        <path d="M22.4545 4.93435C22.4543 4.93408 22.4541 4.93377 22.4538 4.9335L17.9142 0.261622C17.5742 -0.0883642 17.0241 -0.0870618 16.6856 0.264676C16.3471 0.61637 16.3484 1.18522 16.6885 1.53525L19.7363 4.67187H1.33752C0.8577 4.67187 0.46875 5.0741 0.46875 5.57031C0.46875 6.06652 0.8577 6.46875 1.33752 6.46875H19.7363L16.6885 9.60537C16.3484 9.9554 16.3471 10.5242 16.6856 10.8759C17.0241 11.2277 17.5742 11.2289 17.9143 10.879L22.4538 6.20712C22.4541 6.20685 22.4543 6.20654 22.4546 6.20627C22.7948 5.85507 22.7937 5.28438 22.4545 4.93435Z" fill="#8893A8" />
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" id="accessControlMaintenanceLink" class="service-link">
                                <p class="text">Access Controls Maintenance</p>
                                <div class="arrow">
                                    <svg viewBox="0 0 23 12" fill="none">
                                        <path d="M22.4545 4.93435C22.4543 4.93408 22.4541 4.93377 22.4538 4.9335L17.9142 0.261622C17.5742 -0.0883642 17.0241 -0.0870618 16.6856 0.264676C16.3471 0.61637 16.3484 1.18522 16.6885 1.53525L19.7363 4.67187H1.33752C0.8577 4.67187 0.46875 5.0741 0.46875 5.57031C0.46875 6.06652 0.8577 6.46875 1.33752 6.46875H19.7363L16.6885 9.60537C16.3484 9.9554 16.3471 10.5242 16.6856 10.8759C17.0241 11.2277 17.5742 11.2289 17.9143 10.879L22.4538 6.20712C22.4541 6.20685 22.4543 6.20654 22.4546 6.20627C22.7948 5.85507 22.7937 5.28438 22.4545 4.93435Z" fill="#8893A8" />
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" id="intercomSystemMaintenanceLink" class="service-link">
                                <p class="text">Intercom Systems Maintenance</p>
                                <div class="arrow">
                                    <svg viewBox="0 0 23 12" fill="none">
                                        <path d="M22.4545 4.93435C22.4543 4.93408 22.4541 4.93377 22.4538 4.9335L17.9142 0.261622C17.5742 -0.0883642 17.0241 -0.0870618 16.6856 0.264676C16.3471 0.61637 16.3484 1.18522 16.6885 1.53525L19.7363 4.67187H1.33752C0.8577 4.67187 0.46875 5.0741 0.46875 5.57031C0.46875 6.06652 0.8577 6.46875 1.33752 6.46875H19.7363L16.6885 9.60537C16.3484 9.9554 16.3471 10.5242 16.6856 10.8759C17.0241 11.2277 17.5742 11.2289 17.9143 10.879L22.4538 6.20712C22.4541 6.20685 22.4543 6.20654 22.4546 6.20627C22.7948 5.85507 22.7937 5.28438 22.4545 4.93435Z" fill="#8893A8" />
                                    </svg>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="service-cta">
                        <div class="icon">
                            <img src="assets/images/maintenanace/phone-call.svg" alt="" />
                        </div>
                        <div class="text">
                            <h5>Looking for help from Longtek?</h5>
                            <p>Call anytime</p>
                            <a href="tel:+448005118611">+44 800 511 8611</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 subMaintenance">
                <!-- subMaintenance content shown -->
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