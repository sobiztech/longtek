@extends('layouts.app')

@section('styles')
<!-- styles -->
@endsection

@section('content')

<!-- breadcumbSection start -->
<section class="breadcumb-section">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="breadcumb-wrap">
                    <span>Longtek Electronics Ltd</span>
                    <h2>Quote Form</h2>
                    <ul>
                        <li><a href="/home">Home</a></li>
                        <li>Quote Form</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- blogPagesSection start -->
<section class="contact-us-section section_space">
    <div class="container">
        <div class="row">
            <form class="new-coment-form contact-validation-active" name="new-quote-form">
                <h5 class="comment-title">Drop Us a Line</h5>
                <p>Your email address will not be published. Required fields are marked *</p>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <input type="text" name="name" id="name" placeholder="Enter your name*" required />
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <input type="email" name="email" id="email" placeholder="Enter your email*" required />
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <select name="service" id="service" required>
                            <option value="">Select Service Type*</option>
                            <option value="All">All</option>
                            <option value="CCTVs">CCTVs</option>
                            <option value="Alarms">Alarms</option>
                            <option value="Access Controls">Access Controls</option>
                            <option value="Intercom Systems">Intercom Systems</option>
                            <option value="Maintenances">Maintenances</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <input type="text" name="phone" id="phone" placeholder="Enter Phone Number*" required />
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <textarea name="note" id="note" placeholder="Enter your Message*" required></textarea>
                    </div>
                </div>
                <button class="btn_primary" type="submit">Send a Quote</button>
            </form>
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