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
                    <span>LONGTEK ELECTRONICS LTD</span>
                    <h2>FAQ</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==== FaqSection start ==== -->
<section class="faq-section">
    <div class="shape">
        <img src="assets/images/faq-shape.png" alt="" />
    </div>
    <div class="shape-2">
        <img src="assets/images/faq-shape-2.png" alt="" />
    </div>
    <div class="image wow fadeInLeft animated" data-wow-delay="100ms" data-wow-duration="2300ms">
        <img src="assets/images/faq-img.png" alt="" />
    </div>
    <div class="container">
        <div class="row">
            <div class="faq--wrap">
                <div class="top_title" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                    <span style="display: flex; align-items: center; justify-content: center; font-size: 1.2em; margin-bottom: 10px;">
                        <img src="assets/images/title-shap-s2.png" alt="" style="margin-right: 10px; vertical-align: middle;" /> LONGTEK ELECTRONICS LTD
                    </span>
                    <h2>Frequently Questions & Asking Zone Everyone</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="accordion" id="accordionLeft">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOneLeft">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneLeft" aria-expanded="true" aria-controls="collapseOneLeft">
                                            What services does Longtek Electronics Ltd offer?
                                        </button>
                                    </h2>
                                    <div id="collapseOneLeft" class="accordion-collapse collapse show" aria-labelledby="headingOneLeft" data-bs-parent="#accordionLeft">
                                        <div class="accordion-body">
                                            <p>
                                                Longtek Electronics Ltd provides maintenance and repair services for CCTV systems, alarm systems (both burglar and fire alarms), access controllers, and intercom systems. We also offer wholesale machinery for these systems.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoLeft">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoLeft" aria-expanded="false" aria-controls="collapseTwoLeft">
                                            Do you offer emergency repair services?
                                        </button>
                                    </h2>
                                    <div id="collapseTwoLeft" class="accordion-collapse collapse" aria-labelledby="headingTwoLeft" data-bs-parent="#accordionLeft">
                                        <div class="accordion-body">
                                            <p>
                                                Yes, we provide emergency repair services for urgent issues with CCTV, alarms, and intercom systems. Please call our emergency hotline at +44 1234 567891 for immediate assistance.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThreeLeft">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeLeft" aria-expanded="false" aria-controls="collapseThreeLeft">
                                            Can you help with system upgrades?
                                        </button>
                                    </h2>
                                    <div id="collapseThreeLeft" class="accordion-collapse collapse" aria-labelledby="headingThreeLeft" data-bs-parent="#accordionLeft">
                                        <div class="accordion-body">
                                            <p>
                                                Yes, we offer system upgrade services for CCTV, alarm, and intercom systems. Contact us for a consultation to discuss your upgrade needs.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFourLeft">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourLeft" aria-expanded="false" aria-controls="collapseFourLeft">
                                            Do you provide warranty for your services?
                                        </button>
                                    </h2>
                                    <div id="collapseFourLeft" class="accordion-collapse collapse" aria-labelledby="headingFourLeft" data-bs-parent="#accordionLeft">
                                        <div class="accordion-body">
                                            <p>
                                                Yes, we provide a warranty on all our repair and maintenance services. The warranty period may vary depending on the service provided.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFiveLeft">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveLeft" aria-expanded="false" aria-controls="collapseFiveLeft">
                                            How do I know if my CCTV system needs maintenance?
                                        </button>
                                    </h2>
                                    <div id="collapseFiveLeft" class="accordion-collapse collapse" aria-labelledby="headingFiveLeft" data-bs-parent="#accordionLeft">
                                        <div class="accordion-body">
                                            <p>
                                                Regular maintenance is crucial for the optimal performance of CCTV systems. Signs that your system may need maintenance include poor image quality, connectivity issues, and unexpected system shutdowns. If you notice any of these issues, contact us for an inspection.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="accordion" id="accordionRight">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOneRight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneRight" aria-expanded="false" aria-controls="collapseOneRight">
                                            Can you install new CCTV and alarm systems?
                                        </button>
                                    </h2>
                                    <div id="collapseOneRight" class="accordion-collapse collapse" aria-labelledby="headingOneRight" data-bs-parent="#accordionRight">
                                        <div class="accordion-body">
                                            <p>
                                                While our primary focus is on maintenance and repair, we can assist with the installation of new CCTV and alarm systems upon request. Please contact us for more details.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoRight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoRight" aria-expanded="false" aria-controls="collapseTwoRight">
                                            Do you offer any discounts or special offers?
                                        </button>
                                    </h2>
                                    <div id="collapseTwoRight" class="accordion-collapse collapse" aria-labelledby="headingTwoRight" data-bs-parent="#accordionRight">
                                        <div class="accordion-body">
                                            <p>
                                                We occasionally offer discounts on our maintenance services. Check our Special Offers page or subscribe to our newsletter to stay updated on our latest deals.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThreeRight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeRight" aria-expanded="false" aria-controls="collapseThreeRight">
                                            What payment methods do you accept?
                                        </button>
                                    </h2>
                                    <div id="collapseThreeRight" class="accordion-collapse collapse" aria-labelledby="headingThreeRight" data-bs-parent="#accordionRight">
                                        <div class="accordion-body">
                                            <p>
                                                We accept various payment methods, including credit/debit cards, bank transfers, and cash payments.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFourRight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourRight" aria-expanded="false" aria-controls="collapseFourRight">
                                            Do you offer training for operating the systems?
                                        </button>
                                    </h2>
                                    <div id="collapseFourRight" class="accordion-collapse collapse" aria-labelledby="headingFourRight" data-bs-parent="#accordionRight">
                                        <div class="accordion-body">
                                            <p>
                                                Yes, we provide training sessions for operating and maintaining CCTV, alarm, and intercom systems. Contact us to schedule a training session.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFiveRight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveRight" aria-expanded="false" aria-controls="collapseFiveRight">
                                            What makes Longtek Electronics Ltd different from other service providers?
                                        </button>
                                    </h2>
                                    <div id="collapseFiveRight" class="accordion-collapse collapse" aria-labelledby="headingFiveRight" data-bs-parent="#accordionRight">
                                        <div class="accordion-body">
                                            <p>
                                                Our commitment to quality, prompt service, and customer satisfaction sets us apart. With over 20 years of experience, we provide reliable and professional maintenance services for a wide range of electronic systems.
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
    </div>
</section>
@endsection

@section('modal')
<!-- modal -->
@endsection

@section('scripts')
<!-- scripts -->
@endsection